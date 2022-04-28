<div x-show="mobileMenuOpen" x-transition:enter="duration-300 ease-out scale-100" x-transition:enter-start="opacity-50 scale-110" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition duration-75 ease-in scale-100" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-100" class="absolute inset-x-0 top-0 transition origin-top transform md:hidden">
    <div class="rounded-lg shadow-lg">
        <div class="bg-white divide-y-2 rounded-lg shadow-xs divide-gray-50">
            <div class="px-8 pt-6 pb-8 space-y-6">
                <div class="flex items-center justify-between mt-1">
                    <div>
                        <svg viewBox="0 0 159 140" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient x1="27.743%" y1="20.907%" x2="82.132%" y2="59.652%" id="a">
                                    <stop stop-color="#0535AB" offset="0%" />
                                    <stop stop-color="#0539AE" stop-opacity=".93" offset="12%" />
                                    <stop stop-color="#0642B5" stop-opacity=".73" offset="35%" />
                                    <stop stop-color="#0752C1" stop-opacity=".42" offset="65%" />
                                    <stop stop-color="#0867D1" stop-opacity="0" offset="100%" />
                                </linearGradient>
                                <linearGradient x1="36.985%" y1="37.014%" x2="61.742%" y2="55.707%" id="b">
                                    <stop stop-color="#0867D1" offset="0%" />
                                    <stop stop-color="#096DD4" stop-opacity=".94" offset="10%" />
                                    <stop stop-color="#0B7CDB" stop-opacity=".78" offset="29%" />
                                    <stop stop-color="#0E96E6" stop-opacity=".52" offset="55%" />
                                    <stop stop-color="#12B8F6" stop-opacity=".17" offset="86%" />
                                    <stop stop-color="#14C9FE" stop-opacity="0" offset="100%" />
                                </linearGradient>
                            </defs>
                            <g fill-rule="nonzero" fill="none">
                                <path d="M86.24 56.02l3.49-3c30.11-25.54 60.59-31.2 66.26-12.82 5.76 30.19-38.94 34.48-69.75 15.82z" fill="#0535AB" />
                                <path d="M155.84 39.34c.06.29.11.59.15.88 4 27.35-36.74 29.53-69.76 15.78C43.53 38.21 46.8-17.51 21.94 6.13c0 0-15.19 15.15-20.3 40.44a74.25 74.25 0 001.15 32.77v.05c.07.29.14.57.22.86v.08c.6 2.31 1.32 4.58 2.13 6.82A79.07 79.07 0 00131.44 120c22.992-19.942 32.483-51.318 24.4-80.66z" fill="#0069FF" />
                                <path d="M157.48 74.06a78.71 78.71 0 01-26 45.94c-23.42 18.4-63.78.23-82.84-33.71C61.4 77.65 74.82 65.81 86.26 56c33.12 13.51 73.77 11.57 69.76-15.78 0-.28-.09-.57-.14-.85a78.62 78.62 0 011.6 34.69z" fill="url(#a)" />
                                <path d="M131.46 120.02A79.07 79.07 0 015.15 87.17c-.81-2.24-1.53-4.51-2.13-6.82v-.08c-.08-.29-.15-.57-.22-.86v-.07c-3.91-17.82 25.19-32.57 44.56 4.6.41.79.84 1.57 1.27 2.35 19.05 33.96 59.4 52.13 82.83 33.73z" fill="#14C9FE" />
                                <path d="M131.46 120.02A79.07 79.07 0 015.15 87.17c7.48 17.59 24.75 11.8 43.46-.86 19.07 33.94 59.43 52.11 82.85 33.71z" fill="url(#b)" opacity=".3" style="mix-blend-mode:multiply" />
                            </g>
                        </svg>
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
                                Welcome
                            </div>
                        </a>
                        <a href="./#techs" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 ml-0.5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                Techs
                            </div>
                        </a>
                        <a href="./#features" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 ml-0.5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                Features
                            </div>
                        </a>
                        <a href="./#team" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 ml-0.5 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                Team
                            </div>
                        </a>
                        <a href="./#pricing" class="flex items-center px-8 py-3 space-x-3 transition duration-150 ease-in-out rounded-md hover:bg-gray-50">
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 h-6 ml-0.5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <div class="text-base font-medium leading-6 text-gray-900">
                                Plans
                            </div>
                        </a>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</div>