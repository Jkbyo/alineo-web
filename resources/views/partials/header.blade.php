@php
    $links = [
        'home' => 'Inicio',
        'services' => 'Servicios',
        'about' => 'Sobre nosotros',
    ];
@endphp

<header class="sticky top-0 z-40 border-b border-slate-200 bg-white/90 backdrop-blur">
    <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4" aria-label="Principal">
        <a href="{{ route('home') }}" class="flex items-center gap-2 text-xl font-bold tracking-tight text-slate-900">
            <span class="grid size-8 place-items-center rounded-lg bg-brand-600 text-white">a</span>
            alineo
        </a>

        <div class="hidden items-center gap-8 md:flex">
            @foreach ($links as $route => $label)
                <a href="{{ route($route) }}"
                   @class([
                       'text-sm font-medium transition hover:text-brand-700',
                       'text-brand-700' => request()->routeIs($route),
                       'text-slate-600' => ! request()->routeIs($route),
                   ])
                   @if (request()->routeIs($route)) aria-current="page" @endif>
                    {{ $label }}
                </a>
            @endforeach
            <a href="{{ route('contact') }}" class="btn-primary py-2">Contacto</a>
        </div>

        {{-- Menú móvil sin JavaScript --}}
        <details class="group relative md:hidden">
            <summary class="cursor-pointer list-none rounded-lg p-2 text-slate-700 ring-1 ring-slate-200 [&::-webkit-details-marker]:hidden">
                <span class="sr-only">Abrir menú</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </summary>
            <div class="absolute right-0 mt-2 w-56 rounded-xl bg-white p-2 shadow-lg ring-1 ring-slate-200">
                @foreach ($links + ['contact' => 'Contacto'] as $route => $label)
                    <a href="{{ route($route) }}" class="block rounded-lg px-3 py-2 text-sm font-medium text-slate-700 hover:bg-brand-50 hover:text-brand-700">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </details>
    </nav>
</header>
