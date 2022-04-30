<div x-data="{ open: false }" class="flex h-full md:flex-1">
    <div class="flex-1 hidden h-full space-x-8 md:flex">

        @if(Route::is('wave.home') )
        <a href="#welcome" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none border-b-2 border-transparent">{{ __('messages.Menus.Welcome') }}</a>
        <a href="#techs" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none border-b-2 border-transparent">{{ __('messages.Menus.Techs') }}</a>
        <a href="#features" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none border-b-2 border-transparent">{{ __('messages.Menus.Features') }}</a>
        <a href="#team" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none border-b-2 border-transparent">{{ __('messages.Menus.Team') }}</a>
        <a href="#pricing" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none border-b-2 border-transparent">{{ __('messages.Menus.Plans') }}</a>
        @else
        <a href="{{ route('wave.home') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none border-b-2 border-transparent">{{ __('messages.Menus.Welcome') }}</a>
        <a href="{{ route('wave.dashboard') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none border-b-2 border-transparent">{{ __('messages.Menus.Dashboard') }}</a>
        <a href="{{ route('wave.profile', auth()->user()->username) }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none border-b-2 border-transparent">{{ __('messages.Menus.Profile') }}</a>
        @endif
        <a href="{{ route('wave.blog') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none border-b-2 border-transparent">{{ __('messages.Menus.Blog') }}</a>

    </div>


    <div class="flex sm:ml-6 sm:items-center">

        @include('theme::partials.notifications')

        <!-- Profile dropdown -->
        <div @click.away="open = false" class="relative flex items-center h-full ml-3" x-data="{ open: false }">
            <div>
                <button @click="open = !open" class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300" id="user-menu" aria-label="User menu" aria-haspopup="true" x-bind:aria-expanded="open" aria-expanded="true">
                    <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->avatar() . '?' . time() }}" alt="{{ auth()->user()->name }}">
                </button>
            </div>

            <div x-show="open" x-transition:enter="duration-100 ease-out scale-95" x-transition:enter-start="opacity-50 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition duration-50 ease-in scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 right-0 w-56 mt-20 origin-top-right transform rounded-xl" x-cloak>

                <div class="bg-white border border-gray-100 shadow-md rounded-xl" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                    <a href="{{ route('wave.profile', auth()->user()->username) }}" class="block px-4 py-3 text-gray-700 hover:text-gray-800">

                        <span class="block text-sm font-medium leading-tight truncate">
                            {{ auth()->user()->name }}
                        </span>
                        <span class="text-xs leading-5 text-gray-600">
                            {{ __('messages.Menus.viewProfile') }}
                        </span>
                    </a>
                    @impersonating
                    <a href="{{ route('impersonate.leave') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 text-blue-900 border-t border-gray-100 bg-blue-50 hover:bg-blue-100 focus:outline-none focus:bg-blue-200">{{ __('messages.Menus.leaveImpersonation') }}</a>
                    @endImpersonating
                    <div class="border-t border-gray-100"></div>
                    <div class="py-1">

                        <div class="block px-4 py-1">
                            <span class="inline-block px-2 my-1 -ml-1 text-xs font-medium leading-5 text-gray-600 bg-gray-200 rounded">{{ auth()->user()->role->display_name }}</span>
                        </div>
                        @trial
                        <a href="{{ route('wave.settings', 'plans') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.upgradeAccount') }}</a>
                        @endtrial
                        @if( !auth()->guest() && auth()->user()->can('browse_admin') )
                        <a href="{{ route('voyager.dashboard') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900"><i class="fa fa-bolt"></i> {{ __('messages.Menus.admin') }}</a>
                        @endif
                        <a href="{{ route('wave.profile', auth()->user()->username) }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.myProfile') }}</a>
                        <a href="{{ route('wave.settings') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.settings') }}</a>

                    </div>
                    <div class="border-t border-gray-100"></div>
                    <div class="py-1">
                        <a href="{{ route('logout') }}" class="block w-full px-4 py-2 text-sm leading-5 text-left text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900" role="menuitem">
                            {{ __('messages.Menus.signOut') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Langs dropdown -->
        <div @click.away="open = false" class="relative flex items-center h-full ml-3" x-data="{ open: false }">
            <div>
                <button @click="open = !open" class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300" id="lang-menu" aria-label="Lang menu" aria-haspopup="true" x-bind:aria-expanded="open" aria-expanded="true">
                    @if(app()->getLocale() == "fr")
                    <img class="w-8 h-8 rounded-full" src="{{ env('APP_URL') }}/fox/flags/fr.png" alt="{{ __('messages.Menus.French') }}">
                    @elseif(app()->getLocale() == "it")
                    <img class="w-8 h-8 rounded-full" src="{{ env('APP_URL') }}/fox/flags/it.png" alt="{{ __('messages.Menus.Italian') }}">
                    @else 
                    <img class="w-8 h-8 rounded-full" src="{{ env('APP_URL') }}/fox/flags/en.png" alt="{{ __('messages.Menus.English') }}">
                    @endif
                </button>
            </div>

            <div x-show="open" x-transition:enter="duration-100 ease-out scale-95" x-transition:enter-start="opacity-50 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition duration-50 ease-in scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute top-0 right-0 w-56 mt-20 origin-top-right transform rounded-xl" x-cloak>

                <div class="bg-white border border-gray-100 shadow-md rounded-xl" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                    <div class="block px-4 py-3 text-gray-700 hover:text-gray-800">
                        <span class="text-xs leading-5 text-gray-600">
                            <b>{{ __('messages.Menus.currentLang') }} : <span class="bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent pr-2">@if(app()->getLocale() == "fr") {{ __('messages.Menus.French') }} @elseif(app()->getLocale() == "it") {{ __('messages.Menus.Italian') }} @else {{ __('messages.Menus.English') }} @endif</span></b>
                        </span>
                    </div>
                    <div class="border-t border-gray-100"></div>
                    <div class="py-1">
                        @if(app()->getLocale() == "en")
                        <a href="{{ url('locale/fr') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.French') }}</a>
                        <a href="{{ url('locale/it') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.Italian') }}</a>
                        @elseif(app()->getLocale() == "it")
                        <a href="{{ url('locale/fr') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.French') }}</a>
                        <a href="{{ url('locale/en') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.English') }}</a>
                        @else
                        <a href="{{ url('locale/it') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.Italian') }}</a>
                        <a href="{{ url('locale/en') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900">{{ __('messages.Menus.English') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>




    </div>

</div>