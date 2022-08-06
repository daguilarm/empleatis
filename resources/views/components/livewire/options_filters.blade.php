@php
    $workingDay = filter_workday(config('empleatis.workday_type'));
    $salaryIntervals = config('empleatis.salary_intervals');
@endphp

<div>
    <div
        class="-mt-3 px-2 pb-3 border-b border-gray-200 bg-gray-50"
        x-data="{data: @js($workingDay)}"
        id="working-day"
    >
        <h4 class="font-semibold text-gray-800 mt-4 mb-4 ml-2 block">Tipo de jornada</h4>
        @foreach($workingDay as $key => $value)
            <div class="text-sm ml-6">
                <input
                    wire:model="workday"
                    value="{{ $key }}"
                    type="checkbox"
                    class="focus:ring-gray-500 h-4 w-4 text-gray-600 border-gray-300 rounded"
                >
                <span class="ml-2 text-gray-700">{{ $value }}</span>
            </div>
        @endforeach
    </div>

    <div
        class="-mt-3 mb-1 px-2 pb-3 border-b border-orange-200 bg-orange-50"
        x-data="{data: @js($salaryIntervals)}"
        id="working-day"
    >
        <h4 class="font-semibold text-orange-800 mt-4 mb-4 ml-2 block">Salario (€/año)</h4>
        @foreach($salaryIntervals as $key => $value)
            <div class="text-sm ml-6">
                <input
                    wire:model="salary"
                    value="{{ $key }}"
                    type="radio"
                    class="focus:ring-orange-500 h-4 w-4 text-orange-600 border-gray-300 rounded"
                >
                <span class="ml-2 text-orange-700">{{ $value }}</span>
            </div>
        @endforeach
    </div>
</div>
