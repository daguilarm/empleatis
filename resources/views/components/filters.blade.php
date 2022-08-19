<section id="filter" class="w-full hidden md:flex md:flex-col md:w-1/4">

    {{-- Title --}}
    <h4 class="relative flex text-base font-bold bg-gradient-to-r from-indigo-800 to-indigo-400 text-white px-4 py-3">
        {{-- Background triangle effect --}}
        <svg class="hidden md:block absolute inset-0 h-full w-full" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 1463 360">
            <path class="text-black text-opacity-10" fill="currentColor" d="M-217.088 544.086L1544.761 72l134.327 501.316-1761.849 472.086z" />
        </svg>
        {{-- Filter icon --}}
        <x-heroicon-o-adjustments class="h-5 w-5 mt-0.5 mr-1 opacity-70"></x-heroicon-o-adjustments>
        <div>Filtros</div>
    </h4>

    @if($config->get('section') !== 'home')
        <livewire:filters :search="request('search')" :locations="request('locations')"></livewire:filters>
    @endif

    {{-- Provinces --}}
    @if($config->get('category'))
        <x-filters.group
            title="Por provincia"
            type="province"
            color="green"
            :config="$config"
            :data="filter_values($provinces)"
        ></x-filters.group>
    @endif

    {{-- Technology --}}
    <x-filters.group
        title="Tecnología"
        type="category"
        color="blue"
        :config="$config"
        :data="filter_values($categories, 1)"
    ></x-filters.group>

    {{-- Sanitary --}}
    <x-filters.group
        title="Sanitario"
        type="category"
        color="blue"
        :config="$config"
        :data="filter_values($categories, 3)"
    ></x-filters.group>

    {{-- Education --}}
    <x-filters.group
        title="Educación"
        type="category"
        color="blue"
        :config="$config"
        :data="filter_values($categories, 2)"
    ></x-filters.group>

    {{-- Education --}}
    <x-filters.group
        title="Hostelería"
        type="category"
        color="blue"
        :config="$config"
        :data="filter_values($categories, 4)"
    ></x-filters.group>

    {{-- Sales --}}
    <x-filters.group
        title="Comercial"
        type="category"
        color="blue"
        :config="$config"
        :data="filter_values($categories, 6)"
    ></x-filters.group>

    {{-- Management --}}
    <x-filters.group
        title="Gestión"
        type="category"
        color="blue"
        :config="$config"
        :data="filter_values($categories, 5)"
    ></x-filters.group>

    {{-- Profesionals --}}
    <x-filters.group
        title="Profesiones"
        type="category"
        color="blue"
        :config="$config"
        :data="filter_values($categories, 0)"
    ></x-filters.group>

    {{-- Profesionals --}}
    <x-filters.group
        title="Otros"
        type="category"
        color="blue"
        :config="$config"
        :data="filter_values($categories, 7)"
    ></x-filters.group>
</section>
