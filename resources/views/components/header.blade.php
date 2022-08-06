{{-- Header with h1 and h2 --}}
<header x-data="{showBeta: false}">

    <div class="absolute top-0 max-w-md right-0 m-2 py-1 px-2 bg-blue-50 rounded-lg z-200 block" @click.outside="showBeta = false">
        <button
            x-show="showBeta"
            x-cloak class="float-right"
            x-on:click="showBeta = false"
        ><x-heroicon-s-x-circle class="w-5 h-5 text-blue-900  hover:text-red-700"></x-heroicon-s-x-circle></button>
        <button
            x-on:click="showBeta = ! showBeta"
            class="text-base text-blue-900 hover:text-red-700 font-bold"
        >Beta</button>
        <div
            x-show="showBeta"
            x-cloak
            class="my-2 p-2 text-sm text-blue-800 bg-white shadow rounded-lg"
        >
            <p class="mt-2"><strong>El proyecto actualmente se encuentra en fase de pruebas</strong> y seguramente muestre numerosos errores y fallos.</p>
            <p class="mt-2">Obtenemos la información de los más importantes portales de empleo. Este proceso es automático, y cómo sucede siempre en estos casos, estos procesos no son 100% fiables. A veces hay errores.</p>
            <p class="mt-2">Estamos trabajando para minimizar estos fallos y obtener una mejor experiencia de usuario. </p>
            <p class="mt-2">Por favor, si encuentra cualquier error, no dude en contactar. </p>
            <p class="mt-2">Lamentamos las molestias.</p>
            <p class="mt-2 font-bold">empleatis.com</p>
        </div>
    </div>

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
