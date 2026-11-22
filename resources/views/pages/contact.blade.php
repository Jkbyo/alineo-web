<x-layouts.app title="Contacto" description="Contacta con Alineo para planificar o imprimir tus casos de alineadores.">
    <section class="bg-brand-50">
        <div class="mx-auto max-w-6xl px-6 py-16">
            <h1 class="text-4xl font-bold tracking-tight text-slate-900">Contacto</h1>
            <p class="mt-4 max-w-2xl text-lg text-slate-600">
                Cuéntanos qué necesitas y te responderemos lo antes posible.
            </p>
        </div>
    </section>

    <section class="mx-auto grid max-w-6xl gap-12 px-6 py-20 md:grid-cols-3">
        <aside class="space-y-6">
            <div>
                <h2 class="text-sm font-semibold text-slate-900">Email</h2>
                <a href="mailto:{{ config('alineo.contact.email') }}" class="mt-1 block text-brand-700 hover:underline">
                    {{ config('alineo.contact.email') }}
                </a>
            </div>
            @if (config('alineo.contact.phone'))
                <div>
                    <h2 class="text-sm font-semibold text-slate-900">Teléfono</h2>
                    <p class="mt-1">{{ config('alineo.contact.phone') }}</p>
                </div>
            @endif
            @if (config('alineo.contact.address'))
                <div>
                    <h2 class="text-sm font-semibold text-slate-900">Dirección</h2>
                    <p class="mt-1">{{ config('alineo.contact.address') }}</p>
                </div>
            @endif
        </aside>

        <div class="md:col-span-2">
            @if (session('status') === 'sent')
                <div class="mb-8 rounded-xl bg-brand-50 p-4 text-brand-800 ring-1 ring-brand-200" role="status">
                    ¡Gracias! Hemos recibido tu mensaje y te responderemos pronto.
                </div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}" class="grid gap-6 sm:grid-cols-2" novalidate>
                @csrf

                {{-- Honeypot antispam: oculto para personas --}}
                <div class="hidden" aria-hidden="true">
                    <label for="website">No rellenes este campo</label>
                    <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div>
                    <label for="name" class="form-label">Nombre *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" class="form-input">
                    @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="clinic" class="form-label">Clínica</label>
                    <input type="text" id="clinic" name="clinic" value="{{ old('clinic') }}" autocomplete="organization" class="form-input">
                    @error('clinic') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-input">
                    @error('email') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" autocomplete="tel" class="form-input">
                    @error('phone') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="topic" class="form-label">Tipo de consulta *</label>
                    <select id="topic" name="topic" required class="form-input">
                        <option value="" disabled @selected(! old('topic'))>Selecciona una opción</option>
                        @foreach ($topics as $value => $label)
                            <option value="{{ $value }}" @selected(old('topic') === $value)>{{ $label }}</option>
                        @endforeach
                    </select>
                    @error('topic') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="message" class="form-label">Mensaje *</label>
                    <textarea id="message" name="message" rows="6" required class="form-input">{{ old('message') }}</textarea>
                    @error('message') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="sm:col-span-2">
                    <label class="flex items-start gap-3 text-sm">
                        <input type="checkbox" name="privacy" value="1" @checked(old('privacy')) required class="mt-0.5 size-4 accent-brand-600">
                        <span>He leído y acepto la política de privacidad. Usaremos tus datos solo para responder a tu consulta. *</span>
                    </label>
                    @error('privacy') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="sm:col-span-2">
                    <button type="submit" class="btn-primary">Enviar mensaje</button>
                </div>
            </form>
        </div>
    </section>
</x-layouts.app>
