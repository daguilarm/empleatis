{{-- Container --}}
<div>
    <div x-data="{ showModal: @entangle('showModal') }">

        {{-- Alert message with the number of offers --}}
        <div id="saved-offers">
            @if ($total > 0)
                <button x-on:click="$wire.update; showModal = true"
                    class="w-auto max-w-xl fixed top-0 right-0 py-2 px-8 block cursor-pointer text-sm bg-red-700 hover:bg-red-900 hover:opacity-100 text-white shadow-lg z-50">
                    <div class="flex justify-end">
                        <x-heroicon-s-bell class="w-5 h-5 my-auto mr-1 fill-yellow-300 animate-pulse"></x-heroicon-s-bell>
                        <div>Mostrar empleos guardados ({{ $total }})</div>
                    </div>
                </button>
            @endif
        </div>

        <div>
            {{-- Modal --}}
            <div class="relative z-40" x-show="showModal && $wire.entangle('total').initialValue > 0" x-cloak>

                {{-- Dialog --}}
                <div class="fixed top-10 right-0 left-0 w-full md:w-1/2 xl:w-2/3 mx-auto max-h-screen-3/4 text-left border-8 bg-white border-red-700 overflow-y-auto scroll-smooth rounded-xl shadow-xl"
                    x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90">

                    {{-- Title --}}
                    <div class="flex justify-between items-center pb-3 bg-red-700 text-white px-4">
                        <div class="flex">
                            <x-heroicon-s-save-as class="w-8 h-8 my-auto mr-2"></x-heroicon-s-save-as>
                            <div class="text-2xl font-bold py-4">Ofertas guardadas</div>
                        </div>
                        <div class="cursor-pointer z-50" @click="showModal = false">
                            <x-heroicon-s-x-circle class="w-8 h-8"></x-heroicon-s-x-circle>
                        </div>
                    </div>

                    {{-- Modal body --}}
                    <div class="mt-4 px-2 py-4">

                        {{-- Loading --}}
                        <x-livewire.loading.saved></x-livewire.loading.saved>

                        {{-- Content --}}
                        <div wire:loading.remove>

                            {{-- Elements --}}
                            @foreach ($offers as $offer)

                                {{-- This is for real time update --}}
                                @if (in_array($offer->id, $list))

                                    {{-- Element --}}
                                    <div class="p-4 bg-gradient-to-b from-white to-gray-100 mb-4">

                                        {{-- Title --}}
                                        <x-search.sections.title :title="$offer?->title" :id="$offer->id" :difference="$offer->diff_days"></x-search.sections.title>

                                        {{-- Company --}}
                                        <x-search.sections.company :company="$offer?->company"></x-search.sections.company>

                                        {{-- Rate --}}
                                        <x-search.sections.rate :ranking="$offer?->jrank"></x-search.sections.rate>

                                        {{-- Description --}}
                                        <x-search.sections.description :description="$offer?->description" :id="$offer->id"></x-search.sections.description>

                                        {{-- Delete item --}}
                                        <button type="button"
                                            class="inline-flex items-center mt-2 px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                            wire:click="delete('{{ $offer->id }}')">
                                            <x-heroicon-s-trash class="w-5 h-5 mr-1"></x-heroicon-s-trash> Eliminar
                                        </button>

                                    {{-- /Element --}}
                                    </div>

                                {{-- /Real time update --}}
                                @endif

                            {{-- /Elements --}}
                            @endforeach

                        {{-- /Content --}}
                        </div>

                    {{-- /Modal body --}}
                    </div>

                {{-- /Dialog --}}
                </div>

            {{-- /Modal --}}
            </div>
        </div>

    {{-- /Container --}}
    </div>

</div>
