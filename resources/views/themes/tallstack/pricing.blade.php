@extends('theme::layouts.app')

@section('content')

<div class="py-20">
    <div class="max-w-4xl px-10 mx-auto text-left md:text-center pb-14 md:px-0">

        <p class="text-gray-800 font-medium uppercase">
            {!! __('messages.Home.Pricing.Subtitle') !!}
        </p>
        <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3 bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
            {!! __('messages.Home.Pricing.Title') !!}
        </h2>
        <p class=" mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">
            {!! __('messages.Home.Pricing.Description') !!}
        </p>
    </div>
    @livewire('wave.settings.plans')
</div>


@endsection