<footer class="border-t border-slate-200 bg-slate-50">
    <div class="mx-auto grid max-w-6xl gap-8 px-6 py-12 md:grid-cols-3">
        <div>
            <p class="text-lg font-bold text-slate-900">alineo</p>
            <p class="mt-2 text-sm text-slate-600">
                Planificación digital e impresión de alineadores para clínicas dentales y ortodoncistas.
            </p>
        </div>

        <div>
            <p class="text-sm font-semibold text-slate-900">Navegación</p>
            <ul class="mt-3 space-y-2 text-sm">
                <li><a href="{{ route('services') }}" class="hover:text-brand-700">Servicios</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-brand-700">Sobre nosotros</a></li>
                <li><a href="{{ route('contact') }}" class="hover:text-brand-700">Contacto</a></li>
            </ul>
        </div>

        <div>
            <p class="text-sm font-semibold text-slate-900">Contacto</p>
            <ul class="mt-3 space-y-2 text-sm">
                <li><a href="mailto:{{ config('alineo.contact.email') }}" class="hover:text-brand-700">{{ config('alineo.contact.email') }}</a></li>
                @if (config('alineo.contact.phone'))
                    <li>{{ config('alineo.contact.phone') }}</li>
                @endif
                @if (config('alineo.contact.address'))
                    <li>{{ config('alineo.contact.address') }}</li>
                @endif
            </ul>
        </div>
    </div>
    <div class="border-t border-slate-200 py-6 text-center text-xs text-slate-500">
        © {{ date('Y') }} Alineo. Todos los derechos reservados.
    </div>
</footer>
