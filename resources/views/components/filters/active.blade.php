@props([
    'field' => $field,
    'config' => $config,
    'color' => $color,
])

@if($config->get($field))
    <div class="hidden md:inline-flex bg-{{ $color }}-100 items-center text-sm font-medium rounded mt-1 mr-2 overflow-hidden border border-{{ $color }}-200">

        {{-- Filter --}}
        <span class="ml-2 mr-1 leading-relaxed truncate max-w-xs px-1 text-{{ $color }}-800">
            {{ $config->get($field . 'Name') }}
        </span>

        {{-- Close --}}
        <a
            {{-- Province--}}
            @if($field === 'province')
                href="{{ active_url($config, 'province') }}"

            {{-- Category --}}
            @elseif($field === 'category')
                href="{{ route('home') }}"

            {{-- Programador --}}
            @else
                href="{{ url('categorias/programador/18') }}"
            @endif

            class="w-6 h-6 inline-block align-middle text-white bg-{{ $color }}-400 hover:bg-{{ $color }}-600 focus:outline-none"
        >
            <x-heroicon-s-x class="w-4 h-4 fill-current my-1 mx-auto"></x-heroicon-s-x>
        </a>
    </div>
@endif
