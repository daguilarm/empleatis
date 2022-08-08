@php
    $request = request();
@endphp

<div id="search-response" class="p-2 md:p-0 flex w-full">
        {{-- Filters --}}
    <x-filters :config="$config" :categories="$results_categories" :provinces="$results_provinces"></x-filters>

    {{-- Results --}}
    <section id="search-results" class="w-full md:w-2/3 xl:w-full m-0 md:ml-8">

        {{-- Loading --}}
        <x-livewire.loading.results></x-livewire.loading.results>

        {{-- Current results --}}
        <div wire:loading.remove>
            {{-- Results --}}
            @if($results->count() > 0)

            {{-- Search title --}}
            @if($config->get('section') === 'search')
                <h3 class="mx-4 p-2 text-2xl mb-6 italic bg-gray-100 text-gray-600 font-semibold">{!! from_search() !!}</h3>
            @endif

            {{-- Elements --}}
            @foreach($results as $result)

                {{-- Element --}}
                <div class="xl:flex mb-4 p-4">

                    {{-- Left column --}}
                    <div class="w-full xl:w-3/4 pr-4">

                        {{-- Title --}}
                        <x-search.sections.title :title="$result?->title" :id="$result->id" :difference="$result->diff_days"></x-search.sections.title>

                        {{-- Company --}}
                        <x-search.sections.company :company="$result?->company"></x-search.sections.company>

                        {{-- Rate --}}
                        <x-search.sections.rate :ranking="$result?->jrank"></x-search.sections.rate>

                        {{-- Description --}}
                        <x-search.sections.description :description="$result?->description" :id="$result->id"></x-search.sections.description>

                    {{-- /Left column --}}
                    </div>

                    {{-- Right column --}}
                    <div class="w-full xl:w-1/4 xl:flex xl:flex-col px-3 py-4 bg-blue-50">

                        {{-- Locations --}}
                        <x-search.sections.info :value="$result?->locations" icon="location-marker"></x-search.sections.info>

                        {{-- Salary --}}
                        <x-search.sections.info :value="get_data($result?->salary, 'Sin datos')" icon="currency-euro" highlight="true"></x-search.sections.info>

                        {{-- Category --}}
                        <x-search.sections.info :value="$result?->categories->name" :href="rute_to_category($result?->categories)" icon="collection"></x-search.sections.info>

                        {{-- Language --}}
                        @if($result?->languages)
                            <x-search.sections.info :value="$result?->languages?->name" :href="rute_to_language($result?->languages)" icon="tag"></x-search.sections.info>
                        @endif

                        {{-- Workday --}}
                        <x-search.sections.info :value="to_workday($result?->workday_type)" icon="clock"></x-search.sections.info>

                        {{-- Source --}}
                        <x-search.sections.info :value="$result?->source" icon="cursor-click"></x-search.sections.info>

                        {{-- Buttons: see offer and save --}}
                        <livewire:buttons :uuid="$result->id" wire:key="{{ $result->id }}"></livewire:buttons>

                    {{-- /Right column --}}
                    </div>

                {{-- /Element --}}
                </div>

                {{-- Botton line, except in the last item --}}
                @if(!$loop->last)
                    <div class="w-full h-1 px-4 mb-3"><hr class="border border-gray-100"></div>
                @endif

            {{-- /Elements --}}
            @endforeach

            {{-- Pagination --}}
            <div class="w-full">
                {{-- Pagination --}}
                @if($config->get('section') !== 'home')
                    <section id="pagination" class="bg-white p-4 flex-none">
                        {!! $results->onEachSide(1)->appends([
                            'search' => $request->get('search') ?? '',
                            'locations' => $request->get('locations') ?? '',
                            'ogp' => $request->get('ogp'),
                            'ctp' => $request->get('ctp'),
                            'tmp' => $request->get('tmp'),
                            'mts' => $request->get('mts'),
                        ])->links() !!}
                    </section>
                @endif
            </div>

        {{-- No results --}}
        @else
            <div class="w-full rounded-md bg-red-50 p-4 mr-2">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/x-circle -->
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">No se han encontrado resultados para su búsqueda</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul role="list" class="list-disc pl-5 space-y-1">
                                <li>Inténtelo de nuevo, con nuevos criterios de búsqueda.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </div>



    {{-- /Results --}}
    </section>
</div>


