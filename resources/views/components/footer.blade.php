{{-- Footer --}}
<footer class="bg-indigo-900" aria-labelledby="footer-heading">

    {{-- Sections --}}
    <div class="w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div id="footer-columns" class="flex justify-center">
            <x-footer.about class="mx-8"></x-footer.about>
            <x-footer.top class="mx-8"></x-footer.top>
            <x-footer.demanded class="mx-8"></x-footer.demanded>
        </div>
    </div>

    {{-- Copywrite --}}
    <div id="footer-contact" class="pb-8">
        <x-footer.copyright></x-footer.copyright>
    </div>

{{-- /Footer --}}
</footer>
