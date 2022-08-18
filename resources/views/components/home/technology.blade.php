<div id="technology" class="flex flex-col w-1/2 p-4">
    {{-- Image --}}
    <div class="px-2">
        <img
            src="{{ asset('/img/home/' . sprintf('programming_%s.jpeg', rand(1, 2))) }}"
            alt="Empleos de programador en el sector tecnológico"
            width="450"
            height="253"
            class="w-full object-cover h-44 sepia-50 opacity-90 shadow rounded-md"
        />
    </div>
    {{-- Container --}}
    <div class="p-4 text-left bg-gradient-to-b from-white to-blue-100 flex-1">
        {{-- Title --}}
        <h3 class="text-blue-900 font-bold text-2xl">Trabaja de programador</h3>
        {{-- Description --}}
        <h4 class="my-4 p-2 text-md text-gray-700 leading-relaxed border-l-8 italic border-blue-200 pl-4">
            Los empleos tecnológicos se han convertido en una de las principales demandas laborales del momento. Estos son los lenguajes de programación más demandados:
        </h4>
        {{-- Languages --}}
        <div class="flex p-2 text-sm">
            <ul class="w-full xl:w-1/3">
                {{-- Get the languages --}}
                @foreach($languages as $language)
                    <li class="w-full text-left inline-block my-1.5">
                        <a href="{{ url('categorias/programador/18/' . to_slug($language->name) . '/' . $language->id) }}" class="border-b border-dotted border-blue-500 text-blue-800 hover:text-orange-700 font-bold">{{ $language->name }}</a>
                    </li>
                    {{-- Generate the columns --}}
                    @if(($loop->iteration%5) === 0 && $loop->iteration < 15)
                        </ul>
                        <ul class="w-full xl:w-1/3">
                    @endif
                @endforeach
            </ul>
        {{-- /Languages --}}
        </div>
    </div>
</div>
