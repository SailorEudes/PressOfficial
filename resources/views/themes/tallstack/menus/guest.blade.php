<nav class="flex items-center justify-end flex-1 hidden w-full h-full space-x-10 md:flex">
    <a href="/#welcome" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        {{ __('messages.Menus.Welcome') }}
    </a>

    <a href="/#techs" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        {{ __('messages.Menus.Techs') }}
    </a>

    <a href="/#features" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        {{ __('messages.Menus.Features') }}
    </a>

    <a href="/#team" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        {{ __('messages.Menus.Team') }}
    </a>

    <a href="/#pricing" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        {{ __('messages.Menus.Plans') }}
    </a>

    <a href="{{ route('wave.blog') }}" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        {{ __('messages.Menus.Blog') }}
    </a>

    <div class="w-1 h-5 mx-10 border-r border-gray-300"></div>
    <span class="inline-flex rounded-md shadow-sm">
        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out border border-transparent rounded-md bg-gray-700 hover:bg-gray-600 focus:outline-none focus:border-gray-700 focus:shadow-outline-wave active:bg-gray-700">
            {{ __('messages.Menus.signUp') }}
        </a>
    </span>

    <div @click.away="open = false" class="relative flex items-center h-full ml-3" x-data="{ open: false }">
        <div>
            <button @click="open = !open" class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300" id="lang-menu" aria-label="Lang menu" aria-haspopup="true" x-bind:aria-expanded="open" aria-expanded="true">
                @if(app()->getLocale() == "fr")
                <img class="w-8 h-8 rounded-full" src="./fox/flags/fr.png" alt="{{ __('messages.Menus.French') }}">
                @else
                <img class="w-8 h-8 rounded-full" src="./fox/flags/en.png" alt="{{ __('messages.Menus.English') }}">
                @endif
            </button>
        </div>

        <div x-show="open" x-transition:enter="duration-100 ease-out scale-95" x-transition:enter-start="opacity-50 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition duration-50 ease-in scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 right-0 w-56 mt-20 origin-top-right transform rounded-xl" x-cloak>

            <div class="bg-white border border-gray-100 shadow-md rounded-xl" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                <div class="block px-4 py-3 text-gray-700 hover:text-gray-800">
                    <span class="text-xs leading-5 text-gray-600">
                        <b>{{ __('messages.Menus.currentLang') }} : <span class="bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent pr-2">@if(app()->getLocale() == "fr") {{ __('messages.Menus.French') }} @else {{ __('messages.Menus.English') }} @endif</span></b>
                    </span>
                </div>
                <div class="border-t border-gray-100"></div>
                <div class="py-1">
                    @if(app()->getLocale() == "en")
                    <a href="{{ url('locale/fr') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.French') }}</a>
                    @else
                    <a href="{{ url('locale/en') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.English') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>