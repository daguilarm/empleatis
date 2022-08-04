<!DOCTYPE html>
<html lang="{{ $config->get('locale') }}">
    <head>
        {{-- App metatags --}}
        @include('components.metatags')

        {{-- Livewire styles --}}
        @livewireStyles

        {{-- Scripts --}}
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        {{-- Saved offers by the user --}}
        <livewire:saved></livewire:saved>

        {{-- App components --}}
        @yield('body')

        {{-- Livewire javascripts --}}
        @livewireScripts

        {{-- Custom scripts @pushOnce('javascript') --}}
        @stack('javascript')
    </body>
</html>
