@php
    $css = 'inline-flex items-center mx-1 px-4 py-2 xl:px-2 xl:py-1 border border-transparent text-md xl:text-xs font-medium rounded-lg shadow-sm focus:outline-none focus:ring-0 focus:ring-offset-0';
@endphp

{{-- Buttons --}}
<div x-data class="w-full flex justify-center mt-3">
    {{-- Info button --}}
    <button
        type="button"
        class="inline-flex items-center mx-1 px-2 py-1 border border-transparent text-md xl:text-xs font-medium rounded-lg shadow-sm text-white bg-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400"
        x-on:click="link_out('{{ $uuid }}')"
    >
        <x-heroicon-s-cursor-click class="inline-block w-4 h-4 mr-1 opacity-70"></x-heroicon-s-cursor-click> Info
    </button>

    {{-- Important not to move this continer or will not work --}}
    {{-- Buttons --}}
    <div wire:loading.remove>
        {{-- Save button --}}
        @if ($uuid !== $cookie)

            <button
                type="button"
                class="{{ $css }} text-white bg-orange-400 hover:bg-orange-700"
                wire:click="storeCookie('{{ $uuid }}')"
            >
                <x-heroicon-s-save class="inline-block w-4 h-4 mr-1 opacity-70"></x-heroicon-s-save> Guardar
            </button>

        {{-- Saved button --}}
        @else
            <button
                type="button"
                class="text-white bg-gray-400 cursor-default {{ $css }}"
            >
                <x-heroicon-s-bookmark class="hidden xl:inline-block w-4 h-4 mr-1 opacity-70"></x-heroicon-s-bookmark> Guardado
            </button>
        @endif

    {{-- /Buttons --}}
    </div>


    {{-- Loading --}}
    <x-livewire.loading.button></x-livewire.loading.button>

{{-- /Buttons --}}
</div>
