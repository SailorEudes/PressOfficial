@extends('theme::layouts.app')

@section('content')

<style>
    @media (max-width: 1250px) {
        .text-responsive {
            text-align: center !important;
        }
    }

    .text-responsive {
        padding: 0 20px !important;
    }
</style>

<section id="welcome" class="w-full h-auto overflow-hidden relative bg-white">
    <div class="max-w-7xl mx-auto pt-10 md:pt-20 flex items-center lg:px-0 px-10 justify-center flex-col">
        <p class="text-gray-800 uppercase text-xl sm:text-1xl lg:text-2xl font-medium max-w-xl text-center">
            {!! __('messages.Home.Welcome.Title') !!}
        </p>
        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black drop-shadow-md uppercase text-center mt-10 mb-10">
            <span class="bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent pr-7">Foxpress</span>
        </h1>
        <p class="text-gray-800 text-xl sm:text-1xl lg:text-2xl font-medium max-w-xl text-center mb-10">
            {!! __('messages.Home.Welcome.Subtitle') !!}
        </p>
    </div>
    <div class="h-auto mx-auto w-full max-w-3xl xl:max-w-4xl border-2 border-b-0 border-gray-900 md:rounded-lg md:rounded-b-none">
        <div class="h-10 flex items-center pl-3.5 justify-start border-b bg-gray-900 border-gray-300 w-full">
            <div class="flex space-x-1.5">
                <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                <div class="w-3 h-3 bg-green-400 rounded-full"></div>
            </div>
        </div>


        <div class="flex items-start space-x-5 w-full p-5">
            <div class="rounded-lg border-2 border-gray-900 w-1/2 md:w-1/3 xl:w-1/4 overflow-hidden"><img src="fox/img/1.jpg" class="w-full">
                <div class="px-4 py-3 flex">
                    <div class="relative w-10 h-10 mr-3 flex overflow-hidden items-center justify-center text-white fill-current"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGNsYXNzPSJpb25pY29uIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiI+PHRpdGxlPkRlc2t0b3A8L3RpdGxlPjxyZWN0IHg9IjMyIiB5PSI2NCIgd2lkdGg9IjQ0OCIgaGVpZ2h0PSIzMjAiIHJ4PSIzMiIgcnk9IjMyIiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLXdpZHRoPSIzMiIvPjxwYXRoIHN0cm9rZT0iY3VycmVudENvbG9yIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS13aWR0aD0iMzIiIGQ9Ik0zMDQgNDQ4bC04LTY0aC04MGwtOCA2NGg5NnoiLz48cGF0aCBmaWxsPSIjMTExODI3IiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2Utd2lkdGg9IjMyIiBkPSJNMzY4IDQ0OEgxNDQiLz48cGF0aCBkPSJNMzIgMzA0djQ4YTMyLjA5IDMyLjA5IDAgMDAzMiAzMmgzODRhMzIuMDkgMzIuMDkgMCAwMDMyLTMydi00OHptMjI0IDY0YTE2IDE2IDAgMTExNi0xNiAxNiAxNiAwIDAxLTE2IDE2eiIvPjwvc3ZnPg==" class="w-full"></div>
                    <div class="relative">
                        <div class="leading-tightg-clip-text font-black drop-shadow-md">
                            <h4 class="font-semibold leading-tight bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
                                Paul
                            </h4>
                            <p class="text-sm bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent font-medium">
                                {!! __('messages.Home.Positions.Developer') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="rounded-lg border-2 border-gray-900 w-1/2 md:w-1/3 xl:w-1/4 overflow-hidden"><img src="/fox/img/2.jpg" class="w-full">
                <div class="px-4 py-3 flex">
                    <div class="relative w-10 h-10 mr-3 hidden md:flex overflow-hidden items-center justify-center">
                        <div class="absolute"></div> <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGNsYXNzPSJpb25pY29uIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiI+PHRpdGxlPkZvb3RzdGVwczwvdGl0bGU+PHBhdGggZD0iTTIwMCAyNDYuODRjOC44MSA1OC42Mi03LjMzIDkwLjY3LTUyLjkxIDk3LjQxLTUwLjY1IDcuNDktNzEuNTItMjYuNDQtODAuMzMtODUuMDYtMTEuODUtNzguODggMTYtMTI3Ljk0IDU1LjcxLTEzMS4xIDM2LjE0LTIuODcgNjguNzEgNjAuMTQgNzcuNTMgMTE4Ljc1ek0yMjMuNjUgNDA5LjUzYzMuMTMgMzMuMjgtMTQuODYgNjQuMzQtNDIgNjkuNjYtMjcuNCA1LjM2LTU4LjcxLTE2LjM3LTY1LjA5LTQ5LjE5czE3Ljc1LTM0LjU2IDQ3LjMyLTQwLjIxIDU1Ljk5LTIwLjQgNTkuNzcgMTkuNzR6TTMxMiAxNTAuODNjLTguODEgNTguNjIgNy4zMyA5MC42NyA1Mi45IDk3LjQxIDUwLjY2IDcuNDkgNzEuNTItMjYuNDQgODAuMzMtODUuMDYgMTEuODYtNzguODktMTYtMTI4LjIyLTU1LjctMTMxLjEtMzYuNC0yLjY0LTY4LjcxIDYwLjEzLTc3LjUzIDExOC43NXpNMjg4LjM1IDMxMy41M2MtMy4xMyAzMy4yNyAxNC44NiA2NC4zNCA0MiA2OS42NiAyNy40IDUuMzYgNTguNzEtMTYuMzcgNjUuMDktNDkuMTlzLTE3Ljc1LTM0LjU2LTQ3LjMyLTQwLjIyLTU1Ljk5LTIwLjQtNTkuNzcgMTkuNzV6IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjMyIi8+PC9zdmc+" class="w-full">
                    </div>
                    <div class="relative">
                        <div class="leading-tightg-clip-text font-black drop-shadow-md">
                            <h4 class="font-semibold leading-tight bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
                                Caroline
                            </h4>
                            <p class="text-sm bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent font-medium">
                                {!! __('messages.Home.Positions.Consultant') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rounded-lg border-2 border-gray-900 md:block hidden w-1/3 xl:w-1/4 overflow-hidden"><img src="fox/img/3.jpg" class="w-full">
                <div class="px-4 py-3 flex">
                    <div class="relative w-10 h-10 mr-3 flex overflow-hidden items-center justify-center">
                        <div class="absolute"></div> <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGNsYXNzPSJpb25pY29uIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiI+PHRpdGxlPlRlcm1pbmFsPC90aXRsZT48cmVjdCB4PSIzMiIgeT0iNDgiIHdpZHRoPSI0NDgiIGhlaWdodD0iNDE2IiByeD0iNDgiIHJ5PSI0OCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJjdXJyZW50Q29sb3IiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS13aWR0aD0iMzIiLz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBzdHJva2Utd2lkdGg9IjMyIiBkPSJNOTYgMTEybDgwIDY0LTgwIDY0TTE5MiAyNDBoNjQiLz48L3N2Zz4=" class="w-full">
                    </div>
                    <div class="relative">
                        <div class="leading-tightg-clip-text font-black drop-shadow-md">
                            <h4 class="font-semibold leading-tight bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
                                Anthony
                            </h4>
                            <p class="text-sm bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent font-medium">
                                {!! __('messages.Home.Positions.Lead') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-lg border-2 border-gray-900 xl:block hidden w-1/4 overflow-hidden"><img src="fox/img/4.jpg" class="w-full">
                <div class="px-4 py-3 flex">
                    <div class="relative w-10 h-10 mr-3 flex overflow-hidden items-center justify-center"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGNsYXNzPSJpb25pY29uIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiI+PHRpdGxlPlJvY2tldDwvdGl0bGU+PHBhdGggZD0iTTQ2MS44MSA1My44MWE0LjQgNC40IDAgMDAtMy4zLTMuMzljLTU0LjM4LTEzLjMtMTgwIDM0LjA5LTI0OC4xMyAxMDIuMTdhMjk0LjkgMjk0LjkgMCAwMC0zMy4wOSAzOS4wOGMtMjEtMS45LTQyLS4zLTU5Ljg4IDcuNS01MC40OSAyMi4yLTY1LjE4IDgwLjE4LTY5LjI4IDEwNS4wN2E5IDkgMCAwMDkuOCAxMC40bDgxLjA3LTguOWExODAuMjkgMTgwLjI5IDAgMDAxLjEgMTguMyAxOC4xNSAxOC4xNSAwIDAwNS4zIDExLjA5bDMxLjM5IDMxLjM5YTE4LjE1IDE4LjE1IDAgMDAxMS4xIDUuMyAxNzkuOTEgMTc5LjkxIDAgMDAxOC4xOSAxLjFsLTguODkgODFhOSA5IDAgMDAxMC4zOSA5Ljc5YzI0LjktNCA4My0xOC42OSAxMDUuMDctNjkuMTcgNy44LTE3LjkgOS40LTM4Ljc5IDcuNi01OS42OWEyOTMuOTEgMjkzLjkxIDAgMDAzOS4xOS0zMy4wOWM2OC4zOC02OCAxMTUuNDctMTkwLjg2IDEwMi4zNy0yNDcuOTV6TTI5OC42NiAyMTMuNjdhNDIuNyA0Mi43IDAgMTE2MC4zOCAwIDQyLjY1IDQyLjY1IDAgMDEtNjAuMzggMHoiIGZpbGw9Im5vbmUiIHN0cm9rZT0iY3VycmVudENvbG9yIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS13aWR0aD0iMzIiLz48cGF0aCBkPSJNMTA5LjY0IDM1MmE0NS4wNiA0NS4wNiAwIDAwLTI2LjM1IDEyLjg0QzY1LjY3IDM4Mi41MiA2NCA0NDggNjQgNDQ4czY1LjUyLTEuNjcgODMuMTUtMTkuMzFBNDQuNzMgNDQuNzMgMCAwMDE2MCA0MDIuMzIiIGZpbGw9Im5vbmUiIHN0cm9rZT0iY3VycmVudENvbG9yIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS13aWR0aD0iMzIiLz48L3N2Zz4=" class="w-full"></div>
                    <div class="relative">
                        <div class="leading-tightg-clip-text font-black drop-shadow-md">
                            <h4 class="font-semibold leading-tight bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
                                Sandrine
                            </h4>
                            <p class="text-sm bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent font-medium">
                                {!! __('messages.Home.Positions.SEO') !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <img src="fox/img/hero-right.png" class="w-64 lg:block hidden 2xl:max-w-sm bottom-0 transform translate-x-24 absolute right-0"> <img src="fox/img/hero-left.png" class="w-64 lg:block hidden 2xl:max-w-sm bottom-0 transform -translate-x-24 absolute left-0">
</section>


<section id="techs" class="relative overflow-x-hidden bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500">
    <div class="max-w-screen-xl px-4 py-1 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-screen-xl px-4 py-12 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1 text-white h-10 fill-current"><a href="https://laravel.com/" target="_blank"><img src="/fox/img/laravel.svg" class="h-10 text-white fill-current"></a></div>
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1"><a href="https://tailwindcss.com/" target="_blank"><img src="/fox/img/tailwind.svg" class="h-10 text-white fill-current"></a></div>
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1"><a href="https://laravel-livewire.com/" target="_blank"><img src="/fox/img/livewire.svg" class="h-10 text-white fill-current"></a></div>
                <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1"><a href="https://voyager.devdojo.com/" target="_blank"><img src="/fox/img/voyager.svg" class="h-10 text-white fill-current"></a></div>
                <div class="flex items-center justify-center col-span-2 md:col-span-3 lg:col-span-1"><img src="/fox/img/fox.svg" class="h-10 text-white fill-current"></div>
            </div>
        </div>
    </div>
</section>

<section id="features" class="py-12 sm:py-16 bg-white">
    <div class="max-w-7xl px-10 mx-auto sm:text-center">
        <p class="text-gray-800 font-medium uppercase">
            {!! __('messages.Home.Features.Subtitle') !!}
        </p>
        <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3 bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
            {!! __('messages.Home.Features.Title') !!}
        </h2>
        <p class=" mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">
            {!! __('messages.Home.Features.Description') !!}
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">

            @foreach(config('features') as $feature)
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                <img src="{{ $feature->image }}" class="w-16 h-auto">
                <p class="font-bold mt-4">
                    {{ $feature->title }}
                </p>
                <p class="mt-2 text-sm text-gray-500 text-responsive">
                    {{ $feature->description }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>


<section id="team" class="py-20 pb-32 bg-gray-900">
    <div class="relative max-w-6xl px-10 mx-auto">
        <div class="flex flex-col items-start justify-start mb-12">
            <h2 class="inline-block mb-2 mr-5 text-4xl font-extrabold tracking-tight text-white">
                {!! __('messages.Home.Team.Subtitle') !!}
            </h2>
            <p class="text-xl text-gray-400">
                {!! __('messages.Home.Team.Title') !!}
            </p>
        </div>
        <div class="grid grid-cols-1 gap-10 mt-10 md:grid-cols-2 xl:grid-cols-2">
            <div class="relative rounded-lg p-0.5 overflow-hidden bg-transparent shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <div class="relative z-10 flex items-center w-full h-full px-6 py-5 bg-gray-900 rounded-lg">
                    <div class="flex-shrink-0 mr-4"><img src="/fox/img/chris.jpg" alt="Chris" class="w-16 h-16 rounded-full"></div>
                    <div class="flex-1 min-w-0"><a class="focus:outline-none">
                            <p class="text-lg font-medium text-gray-100">Christopher Dolbert</p>
                            <p class="text-sm text-gray-400 truncate">{!! __('messages.Home.Positions.CEO') !!}</p>
                        </a></div>
                    <div class="flex-1 flex-grow-0 pr-2 text-gray-200">
                        <div class="relative flex items-center justify-end space-x-3"><a target="_blank" href="https://github.com/SailorEudes" class="text-gray-300 hover:text-gray-200"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
                                </svg></a></div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-yellow-400 via-purple-400 to-pink-500"></div>
            </div>
            <div class="relative rounded-lg p-0.5 overflow-hidden bg-transparent shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <div class="relative z-10 flex items-center w-full h-full px-6 py-5 bg-gray-900 rounded-lg">
                    <div class="flex-shrink-0 mr-4"><img src="/fox/img/max.jpg" alt="Max" class="w-16 h-16 rounded-full"></div>
                    <div class="flex-1 min-w-0"><a class="focus:outline-none">
                            <p class="text-lg font-medium text-gray-100">Maxime Hery</p>
                            <p class="text-sm text-gray-400 truncate">{!! __('messages.Home.Positions.assistantCEO') !!}</p>
                        </a></div>
                    <div class="flex-1 flex-grow-0 pr-2 text-gray-200">
                        <div class="relative flex items-center justify-end space-x-3"><a target="_blank" href="https://github.com/maximehery" class="text-gray-300 hover:text-gray-200"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
                                </svg></a></div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-purple-400 via-pink-500 to-yellow-400"></div>
            </div>
            <div class="relative rounded-lg p-0.5 overflow-hidden bg-transparent shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <div class="relative z-10 flex items-center w-full h-full px-6 py-5 bg-gray-900 rounded-lg">
                    <div class="flex-shrink-0 mr-4"><img src="/fox/img/amine.jpg" alt="Amine" class="w-16 h-16 rounded-full"></div>
                    <div class="flex-1 min-w-0"><a class="focus:outline-none">
                            <p class="text-lg font-medium text-gray-100">Amine Ouhani</p>
                            <p class="text-sm text-gray-400 truncate">{!! __('messages.Home.Positions.fullstackDev') !!}</p>
                        </a></div>
                    <div class="flex-1 flex-grow-0 pr-2 text-gray-200">
                        <div class="relative flex items-center justify-end space-x-3"><a target="_blank" href="https://github.com/amineohn" class="text-gray-300 hover:text-gray-200"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
                                </svg></a></div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-pink-500 via-purple-500 to-yellow-400"></div>
            </div>
            <div class="relative rounded-lg p-0.5 overflow-hidden bg-transparent shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <div class="relative z-10 flex items-center w-full h-full px-6 py-5 bg-gray-900 rounded-lg">
                    <div class="flex-shrink-0 mr-4"><img src="/fox/img/noham.jpg" alt="Noham Hirep" class="w-16 h-16 rounded-full"></div>
                    <div class="flex-1 min-w-0"><a class="focus:outline-none">
                            <p class="text-lg font-medium text-gray-100">Noham Hirep</p>
                            <p class="text-sm text-gray-400 truncate">{!! __('messages.Home.Positions.fullstackDev') !!}</p>
                        </a></div>
                    <div class="flex-1 flex-grow-0 pr-2 text-gray-200">
                        <div class="relative flex items-center justify-end space-x-3"><a href="#_" class="text-gray-300 hover:text-gray-200"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-current">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path>
                                </svg></a></div>
                    </div>
                </div>
                <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-yellow-400 via-purple-400 to-pink-500"></div>
            </div>
        </div>
    </div>
</section>

<!-- BEGINNING OF PRICING SECTION -->
<div id="pricing" class="relative">
    <img class="absolute top-0 left-0 hidden mt-12 lg:block" src="{{ env('APP_URL') }}/fox/img/pricing-bg-left.png">
    <img class="absolute top-0 right-0 hidden mt-10 lg:block" src="{{ env('APP_URL') }}/fox/img/pricing-bg-right.png">
    <div class="relative px-8 pb-8 mx-auto max-w-7xl xl:px-5 py-12 bg-white md:py-20">
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
</div>
<!-- END OF PRICING SECTION -->


<!-- Testimonials -->
<section id="testimonials" class="box-border relative block w-full py-32 overflow-hidden leading-6 text-left text-white bg-gray-900">
    <div class="max-w-6xl px-4 px-12 mx-auto leading-6 text-left">
        <div class="box-border flex flex-wrap justify-center text-center text-white lg:justify-start lg:text-left">
            <div class="flex flex-col items-start justify-start mb-12">
                <h2 class="inline-block mb-2 mr-5 text-4xl font-extrabold tracking-tight text-white">
                    {!! __('messages.Home.Testimonials.Subtitle') !!}
                </h2>
                <p class="text-xl text-gray-400">
                    {!! __('messages.Home.Testimonials.Title') !!}
                </p>
            </div>
            <div class="relative flex w-full pb-20 border-b border-purple-200 md:w-1/2 md:pb-0 md:pr-8 md:border-b-0 md:border-r">
                <img src="{{ env('APP_URL') }}/fox/img/lionel.jpg" class="box-border w-12 h-12 text-white align-middle border-none rounded-full">
                <div class="relative w-full px-4 leading-6 text-justify">
                    <cite class="box-border text-xl text-white">
                        "{{ __('messages.Home.Testimonials.Lionel') }}"
                    </cite>
                    <div class="box-border mt-4 text-sm font-semibold bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent uppercase">
                        Lionel M.
                    </div>
                </div>
            </div>

            <div class="relative flex w-full pt-20 md:w-1/2 md:pt-0 md:pl-8">
                <img src="{{ env('APP_URL') }}/fox/img/elena.jpg" class="box-border w-12 h-12 text-white align-middle border-none rounded-full">
                <div class="relative w-full px-4 leading-6 text-justify">
                    <cite class="box-border text-xl text-white">
                        "{{ __('messages.Home.Testimonials.Elena') }}"
                    </cite>
                    <div class="box-border mt-4 text-sm font-semibold bg-clip-text bg-gradient-to-r from-purple-500 via-red-400 to-yellow-400 text-transparent uppercase">
                        Elena D.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection