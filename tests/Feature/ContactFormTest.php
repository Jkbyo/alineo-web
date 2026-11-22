<?php

namespace Tests\Feature;

use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * @return array<string, string>
     */
    private function validData(array $overrides = []): array
    {
        return array_merge([
            'name' => 'Ana García',
            'clinic' => 'Clínica Dental Ejemplo',
            'email' => 'ana@example.com',
            'phone' => '600000000',
            'topic' => 'planificacion',
            'message' => 'Quería información sobre la planificación de casos.',
            'privacy' => '1',
        ], $overrides);
    }

    public function test_valid_message_is_sent_by_email(): void
    {
        Mail::fake();
        config(['alineo.contact.email' => 'destino@alineo.test']);

        $this->post('/contacto', $this->validData())
            ->assertRedirect('/contacto')
            ->assertSessionHas('status', 'sent');

        Mail::assertSent(ContactMessage::class, function (ContactMessage $mail) {
            return $mail->hasTo('destino@alineo.test')
                && $mail->hasReplyTo('ana@example.com')
                && $mail->data['clinic'] === 'Clínica Dental Ejemplo'
                && ! array_key_exists('privacy', $mail->data);
        });
    }

    public function test_required_fields_are_validated(): void
    {
        Mail::fake();

        $this->post('/contacto', [])
            ->assertSessionHasErrors(['name', 'email', 'topic', 'message', 'privacy']);

        Mail::assertNothingSent();
    }

    public function test_invalid_topic_is_rejected(): void
    {
        $this->post('/contacto', $this->validData(['topic' => 'hack']))
            ->assertSessionHasErrors('topic');
    }

    public function test_honeypot_blocks_bots_silently(): void
    {
        Mail::fake();

        $this->post('/contacto', $this->validData(['website' => 'http://spam.example']))
            ->assertRedirect('/contacto')
            ->assertSessionHas('status', 'sent');

        Mail::assertNothingSent();
    }

    public function test_contact_email_renders(): void
    {
        $mail = new ContactMessage($this->validData(['website' => null]));

        $mail->assertSeeInHtml('Ana García');
        $mail->assertSeeInHtml('Planificación de tratamientos');
    }
}
