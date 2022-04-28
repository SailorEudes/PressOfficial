<div x-show="mobileMenuOpen" x-transition:enter="duration-300 ease-out scale-100" x-transition:enter-start="opacity-50 scale-110" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition duration-75 ease-in scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-100" class="absolute inset-x-0 top-0 transition origin-top transform md:hidden">
    <div class="rounded-lg shadow-lg">
        <div class="bg-white divide-y-2 rounded-lg shadow-xs divide-gray-50">
            <div class="px-8 pt-6 pb-8 space-y-6">
                <div class="flex items-center justify-between mt-1">
                    <div class="pl-10">
                        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black drop-shadow-md uppercase text-center">
                            <span class="bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent pr-2">Foxpress</span>
                        </h1>
                    </div>
                    <div class="-mr-2">
                        <button @click="mobileMenuOpen = false" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div>
                    <nav class="grid row-gap-8">
                        <a href="./" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 ml-0.5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                {{ __('messages.Menus.Welcome') }}
                            </div>
                        </a>
                        <a href="./#techs" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 ml-0.5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                {{ __('messages.Menus.Techs') }}
                            </div>
                        </a>
                        <a href="./#features" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 ml-0.5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                {{ __('messages.Menus.Features') }}
                            </div>
                        </a>
                        <a href="./#team" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 ml-0.5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                {{ __('messages.Menus.Team') }}
                            </div>
                        </a>
                        <a href="./#pricing" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 ml-0.5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                {{ __('messages.Menus.Plans') }}
                            </div>
                        </a>
                        @if(app()->getLocale() == "en")
                        <a href="{{ url('locale/fr') }}" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                {{ __('messages.Menus.French') }}
                            </div>
                        </a>
                        @else
                        <a href="{{ url('locale/en') }}" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                {{ __('messages.Menus.English') }}
                            </div>
                        </a>
                        @endif
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>