{{-- Header with h1 and h2 --}}
<header x-data="{showBeta: false}">

    {{-- Beta --}}
    <x-beta></x-beta>

    {{-- Triangles --}}
    <div class="hidden md:block relative">
        <div
            class="
            w-0 h-0 absolute top-0 right-0
            border-l-[500px] border-l-transparent
            border-b-[200px] border-b-blue-200
            border-r-[0px] border-r-transparent
        ">
        </div>
        <div
            class="
            w-0 h-0 absolute top-0 right-0
            border-l-[300px] border-l-transparent
            border-b-[200px] border-b-blue-400
            border-r-[0px] border-r-transparent
        ">
        </div>
    </div>

    {{-- Logo, H1 & H2 --}}
    <div id="header" class="flex justify-start w-full relative px-2 xl:px-0">

        {{-- Logo --}}
        <x-logo
            class="hidden lg:block px-4"
            :url="route('home')"
            :img="asset('/img/logo.png?from=home')"
            width="200"
            height="154"
        ></x-logo>

        {{-- Headers --}}
        <div class="mt-5 w-full">
            <h1 class="w-full lg:w-3/4 2xl:w-4/5 text-left mt-4 mx-auto text-2xl font-extrabold text-orange-500">
                Buscador de empleo y formación
            </h1>

            <h2 class="w-full lg:w-3/4 2xl:w-4/5 text-left mx-auto mt-2 mb-4 lg:my-0 italic text-indigo-700">
                Buscando ofertas laborales entre más de 25.000 de puestos de trabajo
            </h2>
        </div>

    {{-- /Logo, H1 & H2 --}}
    </div>

    {{-- /Header --}}
</header>
