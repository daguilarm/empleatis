@props([
    'title' => $title,
    'type' => $type,
    'data' => $data,
    'color' => $color,
    'baseClasses' => 'mx-1 md:ml-3 md:mr-2 text-xs',
    'config' => $config,
])

{{-- Generate group of filters --}}
<div {{ $attributes->merge(['class' => 'px-2 pb-3 border-b border-' . $color . '-200 bg-' . $color . '-50 mb-1']) }}>

    {{-- Title --}}
    <h4 class="font-semibold text-{{ $color }}-800 mt-4 mb-2 ml-2 block">{{ $title }}</h4>

    {{-- List of categories --}}
    <ul x-data="{showFullList: false, data: {{ $data }}, province: {{ $config->get('province') ?? 0 }} }" x-cloak>

        {{-- Category --}}
        <template x-for="(field, index) in data; total = data.length">
            <li
                class="{{ $baseClasses }} hover:bg-{{ $color }}-600"
            >
                <a
                    x-show="index < 5 || showFullList === true;"
                    :class="total <= index + 1 ||index === 4 ? '' : 'border-b border-{{ $color }}-200'"
                    class="block p-2 text-{{ $color }}-800  hover:text-white"
                    x-text="field.name"
                    :key="field.id"
                    @if($type === 'province')
                        x-bind:href="to_url(
                            '{{ $config->get('categoryNameSlug') }}',
                            '{{ $config->get('category') }}',
                            '{{ $config->get('languageNameSlug') }}',
                            '{{ $config->get('language') }}',
                            field.name.slugify(),
                            field.id,
                        )"
                    @else
                        x-bind:href="to_url(
                            field.name.slugify(),
                            field.id,
                            null,
                            null,
                            null,
                            null,
                        )"
                    @endif
                ></a>
            </li>

        {{-- /Category --}}
        </template>

        {{-- Show more --}}
        <button
            x-show="showFullList === false && data.length > 5"
            x-on:click="showFullList =! showFullList"
            class="flex justify-end w-full font-extrabold mt-2 px-4 {{ $baseClasses }} text-{{ $color }}-800"
        >
            <div>Mostrar mas</div>
            <x-heroicon-s-chevron-double-down class="h-3 w-3 ml-1 mt-0.5"></x-heroicon-s-chevron-double-down>
        </button>

        {{-- Show less --}}
        <button
            x-show="showFullList === true"
            x-on:click="showFullList =! showFullList"
            class="flex justify-end w-full font-extrabold mt-2 mb-4 px-4 {{ $baseClasses }} text-{{ $color }}-800"
        >
            <div>Mostrar menos</div>
            <x-heroicon-s-chevron-double-up class="h-3 w-3 ml-1 mt-0.5"></x-heroicon-s-chevron-double-up>
        </button>

    {{-- /List of categories --}}
    </ul>

{{-- /Generate group of filters --}}
</div>
