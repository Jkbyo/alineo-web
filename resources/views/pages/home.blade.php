<x-layouts.app>
    {{-- Portada --}}
    <section class="bg-gradient-to-b from-brand-50 to-white">
        <div class="mx-auto max-w-6xl px-6 py-20 md:py-28">
            <p class="text-sm font-semibold tracking-wide text-brand-700 uppercase">Laboratorio digital de ortodoncia</p>
            <h1 class="mt-4 max-w-3xl text-4xl font-bold tracking-tight text-slate-900 md:text-6xl">
                Planificación e impresión de alineadores para tu clínica
            </h1>
            <p class="mt-6 max-w-2xl text-lg text-slate-600">
                Diseñamos el plan de tratamiento digital y fabricamos los alineadores,
                para que tú puedas centrarte en tus pacientes.
            </p>
            <div class="mt-10 flex flex-wrap gap-4">
                <a href="{{ route('contact') }}" class="btn-primary">Solicitar información</a>
                <a href="{{ route('services') }}" class="btn-secondary">Ver servicios</a>
            </div>
        </div>
    </section>

    {{-- Qué hacemos --}}
    <section class="mx-auto max-w-6xl px-6 py-20">
        <h2 class="text-3xl font-bold tracking-tight text-slate-900">Qué hacemos</h2>
        <div class="mt-10 grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 p-8">
                <div class="grid size-12 place-items-center rounded-xl bg-brand-100 text-brand-700">
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" /></svg>
                </div>
                <h3 class="mt-6 text-xl font-semibold text-slate-900">Planificación digital</h3>
                <p class="mt-2 text-slate-600">
                    A partir del escaneo intraoral preparamos el setup virtual del tratamiento
                    y lo ajustamos contigo hasta que lo apruebes.
                </p>
            </div>
            <div class="rounded-2xl border border-slate-200 p-8">
                <div class="grid size-12 place-items-center rounded-xl bg-brand-100 text-brand-700">
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" /></svg>
                </div>
                <h3 class="mt-6 text-xl font-semibold text-slate-900">Impresión y fabricación</h3>
                <p class="mt-2 text-slate-600">
                    Imprimimos en 3D los modelos de cada etapa y fabricamos los alineadores,
                    listos para entregar al paciente.
                </p>
            </div>
        </div>
    </section>

    {{-- Proceso --}}
    <section class="bg-slate-50">
        <div class="mx-auto max-w-6xl px-6 py-20">
            <h2 class="text-3xl font-bold tracking-tight text-slate-900">Cómo trabajamos</h2>
            <ol class="mt-10 grid gap-8 md:grid-cols-4">
                @foreach ([
                    ['Envías el caso', 'Nos mandas el escaneo intraoral, fotos y tus indicaciones clínicas.'],
                    ['Planificamos', 'Preparamos el setup digital del tratamiento, etapa por etapa.'],
                    ['Revisas y apruebas', 'Ajustamos el plan con tus comentarios hasta que esté a tu gusto.'],
                    ['Imprimimos y enviamos', 'Fabricamos los alineadores y te los enviamos a la clínica.'],
                ] as $i => [$step, $text])
                    <li>
                        <span class="grid size-10 place-items-center rounded-full bg-brand-600 font-semibold text-white">{{ $i + 1 }}</span>
                        <h3 class="mt-4 font-semibold text-slate-900">{{ $step }}</h3>
                        <p class="mt-2 text-sm text-slate-600">{{ $text }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <x-cta />
</x-layouts.app>
