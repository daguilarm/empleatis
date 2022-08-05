@php
    $workingDay = config('empleatis.workday_type');
@endphp

<div>
    <div
        class="px-2 pb-3 border-b border-yellow-200 bg-yellow-50 mb-1"
        x-data="{data: @js($workingDay)}"
        id="working-day"
    >
        <h4 class="font-semibold text-yellow-800 mt-4 mb-4 ml-2 block">Tipo de jornada</h4>
        @foreach($workingDay as $key => $value)
            <div class="text-sm ml-6">
                <input
                    wire:model="workday"
                    value="{{ $key }}"
                    type="checkbox"
                    class="focus:ring-yellow-500 h-4 w-4 text-yellow-600 border-gray-300 rounded"
                >
                <span class="ml-2 text-yellow-700">{{ $value }}</span>
            </div>
        @endforeach
    </div>
</div>

