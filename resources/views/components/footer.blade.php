@php
    $linkCss = 'block py-1 px-2 text-sm text-indigo-100 hover:bg-indigo-800 hover:text-white';
@endphp

{{-- Footer --}}
<footer class="bg-indigo-900" aria-labelledby="footer-heading">

    {{-- Sections --}}
    <div class="w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div id="footer-columns" class="flex justify-center">
            <x-footer.about class="w-full md:w-auto mx-8" :link="$linkCss"></x-footer.about>
            <x-footer.top class="hidden md:block mx-8" :link="$linkCss"></x-footer.top>
            <x-footer.demanded class="hidden md:block mx-8" :link="$linkCss"></x-footer.demanded>
        </div>
    </div>

    {{-- Copywrite --}}
    <div id="footer-contact" class="pb-8">
        <x-footer.copyright></x-footer.copyright>
    </div>

{{-- /Footer --}}
</footer>
