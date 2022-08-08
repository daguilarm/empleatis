<div id="salary" class="flex flex-col w-1/2 p-4">
    {{-- Image --}}
    <div class="px-2 flex-1">
        <img
        src="{{ asset('/img/home/' . sprintf('money_%s.jpeg', rand(1, 2))) }}"
            alt="Trabajos mejor pagados del momento"
            width="450"
            height="300"
            class="w-full hue-rotate-45 opacity-90 object-cover h-44 shadow rounded-md"
        />
    </div>
    {{-- Container --}}
    <div class="w-full p-4 text-left bg-gradient-to-b from-white to-red-100 flex-1">
        {{-- Title --}}
        <h3 class="text-red-900 font-bold text-2xl">Trabajos mejor pagados</h3>
        {{-- Table --}}
        <table class="w-full divide-y divide-red-300 mt-5 shadow">
            <thead>
                <tr class="bg-red-100">
                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-red-900">Empresa</th>
                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-red-900">Puesto</th>
                    <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-red-900">Sueldo (€/año)</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-red-200 bg-white">
                {{-- Table elements --}}
                @foreach($salaries as $salary)
                    <tr>
                        <td class="px-4 py-3.5 text-left text-sm font-normal text-red-600">
                            {!! get_data($salary?->company) !!}
                        </td>
                        <td class="px-4 py-3.5 text-left text-sm font-normal">
                            <a href="{{ rute_to_category($salary?->categories) }}" class="text-red-700 hover:text-red-900 font-normal border-b border-dotted border-red-600">{{ $salary?->categories?->name }}</a>
                        </td>
                        <td class="px-4 py-3.5 text-left text-sm font-semibold text-red-800">
                            {{ number_format($salary?->salary_year, 0, ',', '.') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        {{-- /Table --}}
        </table>
    {{-- /Container --}}
    </div>
</div>
