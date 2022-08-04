<div
    class="mt-3 text-sm text-gray-400 italic"
>
    {!! str($description)->limit(500) !!}

    <a
        href="{{ link_out($id) }}"
        target="_blank"
        rel="nofollow"
        class="px-1 py-0.5 text-md text-indigo-700 hover:text-black font-bold not-italic rounded-lg"
    >
        leer mas...
    </a>
</div>
