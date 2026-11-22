<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    /**
     * @return array<string, array{string, string}>
     */
    public static function pages(): array
    {
        return [
            'inicio' => ['/', 'Planificación e impresión de alineadores'],
            'servicios' => ['/servicios', 'Servicios'],
            'sobre nosotros' => ['/sobre-nosotros', 'Sobre nosotros'],
            'contacto' => ['/contacto', 'Enviar mensaje'],
        ];
    }

    #[DataProvider('pages')]
    public function test_public_pages_load(string $url, string $text): void
    {
        $this->get($url)
            ->assertOk()
            ->assertSee($text)
            ->assertSee('<title>', false);
    }
}
