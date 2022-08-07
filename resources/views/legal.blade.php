@extends('layouts.app')

@section('body')
    {{-- Background blue --}}
    <div class="bg-blue-200">
        {{-- Background white --}}
        <div class="z-10 w-full absolute top-0 h-52 bg-white"></div>
        {{-- Components --}}
        <div class="relative w-full 2xl:w-2/3 2xl:max-w-6xl mx-auto z-30">
            {{-- Header component --}}
            <x-header></x-header>
            {{-- Main component --}}
            <main>
                {{-- Add search form --}}
                <x-search.form></x-search.form>
                {{-- Add filters and results --}}
                <section class="w-full md:flex bg-white py-8 md:p-5 xl:p-6">
                    @yield('section')
                </section>
            {{-- /Main component --}}
            </main>
            {{-- Footer --}}
            <x-footer></x-footer>
        {{-- /Components --}}
        </div>
    {{-- /Background blue --}}
    </div>
@endsection
