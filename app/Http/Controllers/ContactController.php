<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function show(): View
    {
        return view('pages.contact', [
            'topics' => ContactRequest::TOPICS,
        ]);
    }

    public function store(ContactRequest $request): RedirectResponse
    {
        // Honeypot: los bots rellenan el campo oculto. Fingimos éxito sin enviar nada.
        if ($request->filled('website')) {
            return to_route('contact')->with('status', 'sent');
        }

        Mail::to(config('alineo.contact.email'))
            ->send(new ContactMessage($request->safe()->except(['privacy', 'website'])));

        return to_route('contact')->with('status', 'sent');
    }
}
