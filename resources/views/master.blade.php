@extends('layouts.app')

{{-- Meta tags --}}
@section('metatags')
    @isset($language)
        <link rel="canonical" href="{{ route('home') }}/{{ $section }}/{{ $categoryName }}/{{ $category }}">
    @endisset

    @isset($category)
        <link rel="canonical" href="{{ route('home') }}/{{ $section }}/{{ $categoryName }}/{{ $category }}">
    @endisset
@endsection

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

                {{-- Breadcrumbs -> current filters --}}
                @if($config->get('section') !== 'search')
                    <x-breadcrumbs :config="$config"></x-breadcrumbs>
                @endif

                {{-- Home --}}
                @if($config->get('section') === 'home')
                    {{-- Added technology jobs --}}
                    <div class="md:flex justify-center bg-white pt-8 pb-2">
                        <x-home.technology :languages="$languages"></x-home.technology>

                        {{-- Added salary jobs --}}
                        <x-home.salary :salaries="$salaries"></x-home.salary>
                    </div>
                @endif

                {{-- Add filters and results --}}
                <section class="w-full md:flex bg-white py-8 md:p-5 xl:p-6">

                    {{-- search results --}}
                    <livewire:search :config="$config"></livewire:search>

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
