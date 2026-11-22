@php
    $services = [
        [
            'title' => 'Planificación digital de tratamientos',
            'text' => 'Convertimos el escaneo intraoral en un plan de tratamiento completo con alineadores. Te enviamos el setup para que lo revises y lo ajustamos con tus indicaciones.',
            'items' => [
                'Setup virtual y secuencia de movimientos por etapas',
                'Propuesta de attachments y stripping (IPR)',
                'Revisiones del plan hasta tu aprobación',
                'Archivos listos para imprimir en tu clínica o en nuestro laboratorio',
            ],
        ],
        [
            'title' => 'Impresión 3D de modelos',
            'text' => 'Imprimimos los modelos de cada etapa del tratamiento a partir de los archivos de la planificación, ya sea nuestra o de tu propio software.',
            'items' => [
                'Impresión a partir de archivos STL',
                'Modelos de todas las etapas del tratamiento',
                'Control de calidad de cada modelo',
            ],
        ],
        [
            'title' => 'Fabricación de alineadores',
            'text' => 'Fabricamos los alineadores sobre los modelos impresos y te los enviamos preparados para entregar al paciente.',
            'items' => [
                'Termoformado, recorte y pulido',
                'Alineadores identificados por etapa',
                'Envío a tu clínica',
            ],
        ],
    ];
@endphp

<x-layouts.app title="Servicios" description="Servicios de Alineo: planificación digital de tratamientos con alineadores, impresión 3D de modelos y fabricación de alineadores.">
    <section class="bg-brand-50">
        <div class="mx-auto max-w-6xl px-6 py-16">
            <h1 class="text-4xl font-bold tracking-tight text-slate-900">Servicios</h1>
            <p class="mt-4 max-w-2xl text-lg text-slate-600">
                Puedes encargarnos solo la planificación, solo la impresión o el proceso completo.
            </p>
        </div>
    </section>

    <section class="mx-auto max-w-6xl space-y-16 px-6 py-20">
        @foreach ($services as $service)
            <article class="grid gap-8 md:grid-cols-2">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">{{ $service['title'] }}</h2>
                    <p class="mt-4 text-slate-600">{{ $service['text'] }}</p>
                </div>
                <ul class="space-y-3 rounded-2xl border border-slate-200 p-8">
                    @foreach ($service['items'] as $item)
                        <li class="flex gap-3">
                            <svg class="mt-0.5 size-5 shrink-0 text-brand-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" /></svg>
                            <span>{{ $item }}</span>
                        </li>
                    @endforeach
                </ul>
            </article>
        @endforeach
    </section>

    <x-cta />
</x-layouts.app>
