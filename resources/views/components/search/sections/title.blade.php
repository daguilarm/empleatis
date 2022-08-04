<div>
    {{-- Title --}}
    <a
        class="font-bold align-middle text-md text-blue-900 hover:text-black"
        href="{{ link_out($id) }}"
        rel="nofollow"
        target="_blank"
    >
        {{ $title }}
    </a>

    {{-- Days offer is listed --}}
    <x-search.sections.days :difference="$difference"></x-search.sections.days>

</div>
