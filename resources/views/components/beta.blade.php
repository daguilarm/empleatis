<div
    class="absolute top-0 max-w-md right-0 m-2 py-1 px-2 bg-blue-50 rounded-lg z-200 block"
    @click.outside="showBeta = false"
    x-transition
>
    <button
        class="float-right"
        x-show="showBeta"
        x-cloak
        x-on:click="showBeta = false"
    ><x-heroicon-s-x-circle class="w-5 h-5 text-blue-900  hover:text-red-700"></x-heroicon-s-x-circle></button>
    <button
        x-on:click="showBeta = ! showBeta"
        class="text-base text-blue-900 hover:text-red-700 font-bold"
    >Beta <span class="text-xs">v{{ config('empleatis.version') }}</span></button>
    <div
        x-show="showBeta"
        x-cloak
        x-transition
        class="my-2 p-2 text-sm text-blue-800 bg-white shadow rounded-lg"
    >
        <p class="mt-2"><strong>El proyecto actualmente se encuentra en fase de pruebas</strong> y seguramente muestre numerosos errores y fallos.</p>
        <p class="mt-2">Obtenemos la información de los más importantes portales de empleo. Este proceso es automático, y cómo sucede siempre en estos casos, estos procesos no son 100% fiables. A veces hay errores.</p>
        <p class="mt-2">Estamos trabajando para minimizar estos fallos y obtener una mejor experiencia de usuario. </p>
        <p class="mt-2">Por favor, si encuentra cualquier error, no dude en contactar. </p>
        <p class="mt-2">Lamentamos las molestias.</p>
        <p class="mt-2 font-bold"><a href="{{ route('home') }}">El equipo de {{ env('APP_URL') }}</a></p>
    </div>
</div>
