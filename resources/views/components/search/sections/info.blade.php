@php
    $empty = [default_data(), 'Sin datos'];
    $value = isset($text) && $text ? sprintf("%s %s", $text, strtolower($value)) : $value;
@endphp

@if(isset($value) && $value)
    <div class="flex justify-start mb-2 {{ isset($highlight) && !in_array($value, $empty) ? 'text-gray-600' : 'text-gray-400' }} font-semibold text-xs">
        {{-- Location marker icon --}}
        <x-dynamic-component :component="'heroicon-s-' . $icon" class="h-4 w-4 mr-1 fill-current align-top opacity-60"></x-dynamic-component>

        @if(isset($href) && $href)
            <a href="{{ $href }}" class="inline-block">{!! $value !!}</a>
        @else
            <div class="inline-block">{!! $value !!}</div>
        @endif
    </div>
@endif
