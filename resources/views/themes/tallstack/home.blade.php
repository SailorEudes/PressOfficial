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
            Hi dude, and welcome to
        </p>
        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black drop-shadow-md uppercase text-center mt-10 mb-10">
            <span class="bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent pr-7">Foxpress</span>
        </h1>
        <p class="text-gray-800 text-xl sm:text-1xl lg:text-2xl font-medium max-w-xl text-center mb-10">
            <cite>"The SAAS of tomorrow, which wants to be young, but ambitious at the same time !"</cite> according to :
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
                                Developer
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
                                Consultant
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
                                Lead Developer
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
                                SEO Manager
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
            Unlimited possibilities
        </p>
        <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3 bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
            Do what you want, where you want
        </h2>
        <p class=" mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">
            You are our orchestra leader.<br class="lg:hidden hidden sm:block">
            Find out why 👇
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
                Meet the Team
            </h2>
            <p class="text-xl text-gray-400">
                Meet the awesome team behind the magic 🔮
            </p>
        </div>
        <div class="grid grid-cols-1 gap-10 mt-10 md:grid-cols-2 xl:grid-cols-2">
            <div class="relative rounded-lg p-0.5 overflow-hidden bg-transparent shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                <div class="relative z-10 flex items-center w-full h-full px-6 py-5 bg-gray-900 rounded-lg">
                    <div class="flex-shrink-0 mr-4"><img src="/fox/img/chris.jpg" alt="Chris" class="w-16 h-16 rounded-full"></div>
                    <div class="flex-1 min-w-0"><a class="focus:outline-none">
                            <p class="text-lg font-medium text-gray-100">Christopher Dolbert</p>
                            <p class="text-sm text-gray-400 truncate">Founder / CEO</p>
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
                            <p class="text-sm text-gray-400 truncate">Co-Founder</p>
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
                            <p class="text-sm text-gray-400 truncate">Fullstack Developer</p>
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
                            <p class="text-sm text-gray-400 truncate">Fullstack Developer</p>
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


<!--<div class="relative flex items-center w-full">

    <div class="relative z-20 px-8 mx-auto xl:px-5 max-w-7xl">

        <div class="flex flex-col items-center h-full pt-16 pb-56 lg:flex-row">

            <div class="flex flex-col items-start w-full mb-16 md:items-center lg:pr-12 lg:items-start lg:w-1/2 lg:mb-0">

                <h2 class="invisible text-sm font-semibold tracking-wide text-gray-700 uppercase transition-none duration-700 ease-out transform translate-y-12 opacity-0 sm:text-base lg:text-sm xl:text-base" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }'>Welcome to Wave <span class="px-2 py-1 text-xs text-white bg-blue-500 rounded-full">Pro</span></h2>
                <h1 class="invisible pb-2 mt-3 text-4xl font-extrabold leading-10 tracking-tight text-transparent transition-none duration-700 ease-out delay-150 transform translate-y-12 opacity-0 bg-clip-text bg-gradient-to-r from-blue-600 via-blue-500 to-purple-600 scale-10 md:my-5 sm:leading-none lg:text-5xl xl:text-6xl" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }'>Start crafting your next great idea.</h1>
                <p class="invisible max-w-2xl mt-0 text-base text-left text-gray-600 transition-none duration-700 ease-out delay-300 transform translate-y-12 opacity-0 md:text-center lg:text-left sm:mt-2 md:mt-0 sm:text-base lg:text-lg xl:text-xl" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }'>Wave will help you rapidly build a Software as a Service. Out of the box Authentication, Subscriptions, Invoices, Announcements, User Profiles, API, and so much more!</p>
                <div class="invisible w-full mt-5 transition-none duration-700 ease-out transform translate-y-12 opacity-0 delay-450 sm:mt-8 sm:flex sm:justify-center lg:justify-start sm:w-auto" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }'>
                    <div class="rounded-md">
                        <a href="{{ route('register') }}" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-500 hover:bg-wave-600 focus:outline-none focus:border-wave-600 focus:shadow-outline-indigo md:py-4 md:text-lg md:px-10">
                            Signup
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#" class="flex items-center justify-center w-full px-8 py-3 text-base font-medium leading-6 text-indigo-700 transition duration-150 ease-in-out bg-indigo-100 border-2 border-transparent rounded-md hover:text-indigo-600 hover:bg-indigo-50 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-300 md:py-4 md:text-lg md:px-10">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex w-full mb-16 lg:w-1/2 lg:mb-0">

                <div class="relative invisible transition-none duration-1000 delay-100 transform translate-x-12 opacity-0" data-replace='{ "transition-none": "transition-all", "invisible": "visible", "translate-x-12": "translate-y-0", "opacity-0": "opacity-100" }'>
                    <img src="/storage/themes/February2018/mFajn4fwpGFXzI1UsNH6.png" class="w-full max-w-3xl sm:w-auto">
                </div>

            </div>
        </div>
    </div>



</div>

<div class="relative z-40 -mt-64">

    <svg viewBox="0 0 120 28" class="-mt-64">
        <defs>
            <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z" />
        </defs>
        <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
        <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>
        <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1" />
    </svg>
</div>

{{-- FEATURES SECTION --}}
<section class="relative z-40 w-full pt-10 pb-16 lg:pt-5 xl:-mt-24 bg-gradient-to-b from-wave-500 via-wave-600 to-wave-400">

    <div class="absolute top-0 left-0 z-10 w-full h-full transform -translate-x-1/2 opacity-10">
        <svg class="w-full h-full text-white opacity-25 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 205 205">
            <defs />
            <g fill="#FFF" fill-rule="evenodd">
                <path d="M182.63 37c14.521 18.317 22.413 41.087 22.37 64.545C205 158.68 159.1 205 102.486 205c-39.382-.01-75.277-22.79-92.35-58.605C-6.939 110.58-2.172 68.061 22.398 37a105.958 105.958 0 00-9.15 43.352c0 54.239 39.966 98.206 89.265 98.206 49.3 0 89.265-43.973 89.265-98.206A105.958 105.958 0 00182.629 37z" />
                <path d="M103.11 0A84.144 84.144 0 01150 14.21C117.312-.651 78.806 8.94 56.7 37.45c-22.105 28.51-22.105 68.58 0 97.09 22.106 28.51 60.612 38.101 93.3 23.239-30.384 20.26-70.158 18.753-98.954-3.75-28.797-22.504-40.24-61.021-28.47-95.829C34.346 23.392 66.723.002 103.127.006L103.11 0z" />
                <path d="M116.479 13c36.655-.004 67.014 28.98 69.375 66.234 2.36 37.253-24.089 69.971-60.44 74.766 29.817-8.654 48.753-38.434 44.308-69.685-4.445-31.25-30.9-54.333-61.904-54.014-31.003.32-56.995 23.944-60.818 55.28v-1.777C46.99 44.714 78.096 13.016 116.479 13z" />
            </g>
        </svg>
    </div>

    <div class="relative z-20 flex flex-col items-start justify-start px-8 mx-auto sm:items-center max-w-7xl xl:px-5">
        <h2 class="text-4xl font-medium leading-9 text-white">Awesome Features</h2>
        <p class="mt-4 leading-6 sm:text-center text-wave-200">Wave has some cool features to help you rapidly build your Software as a Service.<br class="hidden md:block"> Here are a few awesome features you're going to love!</p>

        <div class="grid mt-16 gap-y-10 sm:grid-cols-2 sm:gap-x-8 md:gap-x-12 lg:grid-cols-3 xl:grid-cols-4 lg:gap-20">
            @foreach(config('features') as $feature)
            <div>
                <img src="{{ $feature->image }}" class="w-16 rounded sm:mx-auto">
                <h3 class="mt-6 text-sm font-semibold leading-6 sm:text-center text-wave-100">{{ $feature->title }}</h3>
                <p class="mt-2 text-sm leading-5 sm:text-center text-wave-200">{{ $feature->description }}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" class="bg-gray-100" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 156" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
    <style type="text/css">
        .wave-svg {
            fill: #0069ff;
        }

        .wave-svg-lighter {
            fill: #4c95fe
        }
    </style>
    <g fill-rule="nonzero">
        <path class="wave-svg" d="M694,94.437587 C327,161.381336 194,153.298248 0,143.434189 L2.01616501e-13,44.1765618 L1440,27 L1440,121 C1244,94.437587 999.43006,38.7246898 694,94.437587 Z" id="Shape" fill="#0069FF" opacity="0.519587054"></path>
        <path class="wave-svg" d="M686.868924,95.4364002 C416,151.323752 170.73341,134.021565 1.35713663e-12,119.957876 L0,25.1467017 L1440,8 L1440,107.854321 C1252.11022,92.2972893 1034.37894,23.7359827 686.868924,95.4364002 Z" id="Shape" fill="#0069FF" opacity="0.347991071"></path>
        <path class="wave-svg-lighter" d="M685.6,30.8323303 C418.7,-19.0491687 170.2,1.94304528 0,22.035593 L0,118 L1440,118 L1440,22.035593 C1252.7,44.2273621 1010,91.4098622 685.6,30.8323303 Z" transform="translate(720.000000, 59.000000) scale(1, -1) translate(-720.000000, -59.000000) "></path>
    </g>
</svg>

<div id="testimonials">
    <div class="relative flex items-center justify-center pt-32 pb-12 bg-gray-100 md:pb-32 lg:pb-64 min-w-screen">
        <div class="max-w-6xl px-10 pb-20 mx-auto bg-gray-100">
            <div class="flex flex-col items-center lg:flex-row">
                <div class="flex flex-col justify-center w-full h-full mb-10 lg:pr-8 sm:w-4/5 md:items-center lg:mb-0 lg:items-start md:w-3/5 lg:w-1/2">
                    <p class="mb-2 text-base font-medium tracking-tight uppercase text-wave-500">Our customers love our product</p>
                    <h2 class="text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none lg:text-5xl xl:text-6xl">
                        Testimonials</h2>
                    <p class="pr-5 my-6 text-lg text-gray-600 md:text-center lg:text-left">This is an example section of where you will add your testimonials for your Software as a Service.</p>
                    <a href="#_" class="flex items-center justify-center px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out border border-transparent rounded-md shadow bg-wave-600 hover:bg-wave-500 focus:outline-none focus:border-wave-700 focus:shadow-outline-wave md:py-4 md:text-lg md:px-10">View
                        Case Studies</a>
                </div>
                <div class="w-full sm:w-4/5 lg:w-1/2">
                    <blockquote class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow sm:flex-row">
                        <div class="flex flex-col pl-5 sm:pr-8">
                            <div class="relative sm:pl-12">
                                <svg class="absolute left-0 hidden w-10 h-10 fill-current sm:block text-wave-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                    <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                </svg>
                                <p class="mt-2 text-base text-gray-600">Wave allowed me to build the Software as a Service of my dreams!
                                </p>
                            </div>

                            <h3 class="mt-3 text-base font-medium leading-5 text-gray-800 truncate sm:pl-12">Jane Cooper <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span></h3>
                            <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                        </div>
                        <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                    </blockquote>
                    <blockquote class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 my-5 bg-white rounded-lg shadow sm:flex-row">
                        <div class="flex flex-col pl-5 sm:pr-10">
                            <div class="relative sm:pl-12">
                                <svg class="absolute left-0 hidden w-10 h-10 fill-current sm:block text-wave-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                    <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                </svg>
                                <p class="mt-2 text-base text-gray-600">Wave saved us hundreds of development hours. Creating a Software as a Service is now easier than ever with Wave.</p>
                            </div>
                            <h3 class="mt-3 text-base font-medium leading-5 text-gray-800 truncate sm:pl-12">John Doe <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span></h3>
                            <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                        </div>
                        <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&aauto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                    </blockquote>
                    <blockquote class="flex flex-row-reverse items-center justify-between w-full col-span-1 p-6 bg-white rounded-lg shadow sm:flex-row">
                        <div class="flex flex-col pl-5 sm:pr-10">
                            <div class="relative sm:pl-12">
                                <svg class="absolute left-0 hidden w-10 h-10 fill-current sm:block text-wave-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                    <path d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z" />
                                </svg>
                                <p class="mt-2 text-base text-gray-600">This is the best solution available for creating your own Software as a Service!</p>
                            </div>

                            <h3 class="mt-3 text-base font-medium leading-5 text-gray-800 truncate sm:pl-12">John Smith <span class="mt-1 text-sm leading-5 text-gray-500 truncate">- CEO SomeCompany</span></h3>
                            <p class="mt-1 text-sm leading-5 text-gray-500 truncate"></p>
                        </div>
                        <img class="flex-shrink-0 w-24 h-24 bg-gray-300 rounded-full" src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rrb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&aauto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                    </blockquote>
                </div>
            </div>
        </div>

        <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" class="absolute bottom-0 w-full" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
            <style type="text/css">
                .wave-svg-light {
                    fill: #ffffff;
                }
            </style>
            <g id="wave" transform="translate(720.000000, 75.000000) scale(1, -1) translate(-720.000000, -75.000000) " fill-rule="nonzero">
                <path class="wave-svg-light" d="M694,94.437587 C327,161.381336 194,153.298248 0,143.434189 L2.01616501e-13,44.1765618 L1440,27 L1440,121 C1244,94.437587 999.43006,38.7246898 694,94.437587 Z" id="Shape" fill="#0069FF" opacity="0.519587054"></path>
                <path class="wave-svg-light" d="M686.868924,95.4364002 C416,151.323752 170.73341,134.021565 1.35713663e-12,119.957876 L0,25.1467017 L1440,8 L1440,107.854321 C1252.11022,92.2972893 1034.37894,23.7359827 686.868924,95.4364002 Z" id="Shape" fill="#0069FF" opacity="0.347991071"></path>
                <path class="wave-svg-light" d="M685.6,30.8323303 C418.7,-19.0491687 170.2,1.94304528 0,22.035593 L0,118 L1440,118 L1440,22.035593 C1252.7,44.2273621 1010,91.4098622 685.6,30.8323303 Z" id="Shape" fill="url(#linearGradient-1)" transform="translate(720.000000, 59.000000) scale(1, -1) translate(-720.000000, -59.000000) "></path>
            </g>
        </svg>

    </div>-->
</div>
<!-- END OF TESTIMONIALS SECTION -->

<!-- BEGINNING OF PRICING SECTION -->
<div id="pricing" class="relative">

    <div class="relative px-8 pb-8 mx-auto max-w-7xl xl:px-5 py-12 bg-white md:py-20">
        <div class="max-w-4xl px-10 mx-auto text-left md:text-center pb-14 md:px-0">
            <p class="text-gray-800 font-medium uppercase">
                The exorbitant and incomprehensible prices are garbage !
            </p>
            <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3 bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
                Our prices are adapted to your needs.
            </h2>
            <p class=" mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">
                No hidden fees, no VAT, and daily transparency 💸
                </p>
        </div>

        @livewire('wave.settings.plans')

    </div>
</div>
<!-- END OF PRICING SECTION -->


<section id="newsletters" class="box-border relative block py-20 overflow-hidden leading-6 text-center text-white bg-gradient-to-r from-purple-400 via-red-400 to-yellow-500">
    <div class="w-full max-w-2xl px-4 mx-auto leading-6 text-center xl:px-0">
        <div class="box-border flex flex-wrap justify-center -mx-4 text-white">
            <div class="relative w-full px-4 leading-6 text-center xl:flex-grow-0 xl:flex-shrink-0 lg:flex-grow-0 lg:flex-shrink-0">
                <h2 class="box-border px-10 mx-0 mt-0 mb-10 font-sans text-2xl font-bold leading-tight text-white md:px-0 sm:text-3xl md:text-4xl">
                    Sign up for our newsletter to receive weekly tips and strategies
                </h2>
                <form method="post" class="box-border text-center text-indigo-900">
                    <div class="flex flex-wrap justify-center leading-6 text-indigo-900">
                        <div class="box-border relative py-1 pr-1 text-center border-white rounded-md sm:border-2"><input type="email" placeholder="Your email" class="inline-block w-full h-16 px-6 py-0 mb-6 overflow-visible text-xl font-semibold text-white placeholder-white align-top bg-transparent border-2 border-white rounded-full sm:w-auto sm:border-0 sm:mb-0 focus:outline-none md:text-left"> <button class="inline-block w-full h-16 px-4 py-2 overflow-visible text-xl font-semibold text-white normal-case align-middle bg-gray-900 border border-transparent border-solid rounded-md cursor-pointer select-none sm:w-auto focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                                Sign Up
                            </button></div>
                    </div>
                    <div class="mt-8 leading-6 text-white">
                        By signing up, you agree to the Terms of Service.
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection