@if($config->get('section') !== 'home')

    {{-- Breadcrumbs --}}
    <div dusk="breadcrumbs" class="relative w-full text-center md:text-left md:h-28 md:px-8 py-4 bg-white my-0.5 shadow">

        {{-- Seach form --}}
        <h3 class="w-full mb-1 text-xl lg:text-3xl font-normal text-gray-600 italic">
            @if($config->get('category'))
                Ofertas de empleo <strong>{{ $config->get('categoryName') }}</strong>
            @endif

            @if($config->get('province'))
                en <strong>{{ $config->get('provinceName') }}</strong>
            @endif

            @if($config->get('language'))
                con <strong>{{ $config->get('languageName') }}</strong>
            @endif
        </h3>

        {{-- Category --}}
        <x-filters.active field="category" color="blue" :config="$config"></x-filters.active>

        {{-- Province --}}
        <x-filters.active field="province" color="green" :config="$config"></x-filters.active>

        {{-- Language --}}
        <x-filters.active field="language" color="red" :config="$config"></x-filters.active>

    {{-- /Breadcrumbs --}}
    </div>

@endif
