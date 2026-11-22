<x-layouts.app title="Sobre nosotros" description="Conoce Alineo, laboratorio de planificación e impresión de alineadores.">
    <section class="bg-brand-50">
        <div class="mx-auto max-w-6xl px-6 py-16">
            <h1 class="text-4xl font-bold tracking-tight text-slate-900">Sobre nosotros</h1>
            <p class="mt-4 max-w-2xl text-lg text-slate-600">
                En Alineo trabajamos como una extensión de tu clínica: nos encargamos de la parte
                técnica del tratamiento con alineadores para que tú puedas dedicarte al paciente.
            </p>
        </div>
    </section>

    <section class="mx-auto grid max-w-6xl gap-12 px-6 py-20 md:grid-cols-2">
        <div>
            <h2 class="text-2xl font-bold text-slate-900">Nuestra forma de trabajar</h2>
            <p class="mt-4 text-slate-600">
                Cada caso lo revisa una persona de nuestro equipo, que está en contacto directo
                contigo durante todo el proceso. Te explicamos cada propuesta y no damos un plan
                por cerrado hasta que lo apruebes.
            </p>
            <p class="mt-4 text-slate-600">
                Nos ocupamos de todo el proceso, desde el diseño digital hasta la impresión y la
                fabricación, para que lo que planificamos sea lo que recibes.
            </p>
        </div>

        <dl class="grid gap-6 sm:grid-cols-2">
            @foreach ([
                ['Trato directo', 'Hablas siempre con quien planifica tu caso.'],
                ['Criterio clínico', 'Planes pensados para que funcionen en boca.'],
                ['Todo en un sitio', 'Planificación, impresión y fabricación en el mismo laboratorio.'],
                ['Flexibilidad', 'Elige solo el servicio que necesitas.'],
            ] as [$term, $definition])
                <div class="rounded-2xl border border-slate-200 p-6">
                    <dt class="font-semibold text-slate-900">{{ $term }}</dt>
                    <dd class="mt-2 text-sm text-slate-600">{{ $definition }}</dd>
                </div>
            @endforeach
        </dl>
    </section>

    <x-cta />
</x-layouts.app>
