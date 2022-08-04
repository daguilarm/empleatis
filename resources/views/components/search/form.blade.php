@php
    $secure_uuid = str()->uuid();
    $secure_str = str()->random(rand(50, 120));
    $secure_tmp = sprintf('%s-%s-%s', str()->random(10), rand(10, 100000), str()->random(2));
@endphp

{{-- Form --}}
<form
    x-data id="search_form"
    class="z-30 relative w-full m-0 md:mx-auto px-8 py-8 md:flex md:justify-center bg-blue-700 2xl:rounded-tl-lg"
    method="GET"
    action="{{ route('search') }}"
>
    {{-- Background triangles effect --}}
    <svg class="hidden md:block absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
        <path class="text-blue-400 text-opacity-20" fill="currentColor" d="M-82.673 72l1761.849 472.086-134.327 501.315-1761.85-472.086z" />
        <path class="text-black text-opacity-10" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
    </svg>

    {{-- Search: category --}}
    <div class="w-full md:max-w-sm md:mr-6 z-40">
        <label class="text-blue-100">Busco ofertas de...</label>
        <input
            class="w-full rounded-md mb-2 mt-2 md:mb-0 placeholder:italic placeholder:text-blue-300 placeholder:text-sm"
            wire:model.defer="search"
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Puesto, empresa o palabra clave"
        >
        <input type="hidden" wire:model="category">
    </div>

    {{-- Search: location --}}
    <div class="w-full md:max-w-sm z-40">
        <label class="text-blue-100">En la provincia...</label>
        <input
            class="w-full rounded-md placeholder:italic mt-2 placeholder:text-blue-300 placeholder:text-sm"
            type="text"
            name="locations"
            value="{{ request('locations') }}"
            placeholder="Provincia: madrid, murcia,..."
        >
    </div>

    {{-- Secure --}}
    <input type="hidden" name="ogp" value="{{ md5($secure_str) }}">
    <input type="hidden" name="ctp" value="{{ $secure_uuid }}">
    <input type="hidden" name="tmp" value="{{ $secure_tmp }}">
    <input type="hidden" name="mts" value="{{ $secure_str }}">

    {{-- Submit --}}
    <div class="mt-8 ml-3 z-50">
        <button
            type="submit"
            class="inline-flex items-center px-3 py-3 border border-orange-700 shadow-md text-md leading-4 font-medium rounded-md text-white bg-orange-400 hover:bg-orange-500 focus:ring-orange-300 focus:outline-none focus:ring-2 focus:ring-offset-2 "
        >
            {{-- Search icon --}}
            <x-heroicon-s-search class="h-4 w-4 mr-2"></x-heroicon-s-search> Buscar
        </button>
    </div>

{{-- /Form --}}
</form>
