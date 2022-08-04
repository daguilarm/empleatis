@props([
    'color' => match(true) {
        $difference == 0 => 'bg-green-400 text-white',
        $difference < 5 => 'bg-green-600 text-white',
        $difference >= 5 && $difference < 12 => 'bg-yellow-400 text-white',
        $difference >= 12 && $difference < 21 => 'bg-orange-400 text-white',
        $difference >= 21 => 'bg-red-400 text-white',
    },
    'text' => match(true) {
        $difference == 0 => 'Novedad',
        $difference == 1 => sprintf('%s día', $difference),
        default => sprintf('%s días', $difference),
    },
    'days' => $difference,
])

{{-- New offer or not --}}
<div class="inline-block {{ $color }} ml-2 px-2 py-1 text-xs font-semibold rounded-md whitespace-nowrap">{{ $text }}</div>
