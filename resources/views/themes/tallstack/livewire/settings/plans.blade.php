<div>

    {{-- Check whether or not this page is on the settings or the home and pricing page --}}
    @php
    $settingsPage = false;
    if( request()->is('settings/plans') ){
    $settingsPage = true;
    }
    @endphp

    {{-- If we are not on the homepage we show a message at the top of pricing --}}
    @if( $settingsPage )
    @if( auth()->user() && auth()->user()->onTrial() )
    <p class="px-6 py-3 text-sm text-red-500 bg-red-100">You are currently on a trial subscription. Select a plan below to upgrade.</p>
    @elseif(auth()->user() && auth()->user()->subscribed('main'))
    <h5 class="px-6 py-5 text-sm font-bold text-gray-500 bg-gray-100 border-t border-b border-gray-150">Switch Plans</h5>
    @else
    <h5 class="px-6 py-5 text-sm font-bold text-gray-500 bg-gray-100 border-t border-b border-gray-150">Select a Plan</h5>
    @endif
    @endif

    @if(config('wave.paddle.env') == 'sandbox')
    <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 pb-10">
        <div class="w-full p-10 text-white shadow-xl lg:rounded-lg bg-gray-900">
            <div class="flex items-center pb-4">
                <svg class="mr-2 w-14 h-14 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                    <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd"></path>
                </svg>
                <div class="relative">
                    <h2 class="text-base font-bold text-white">Sandbox Mode</h2>
                    <p class="text-sm text-white">Application billing is in sandbox mode, which means you can test the checkout process using the following credentials:</p>
                </div>
            </div>
            <div class="pt-2 text-sm font-bold text-white">
                Credit Card Number: <span class="ml-2 font-mono bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">4242 4242 4242 4242</span>
            </div>
            <div class="pt-2 text-sm font-bold text-white">
                Expiration Date: <span class="ml-2 font-mono bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">Any future date</span>
            </div>
            <div class="pt-2 text-sm font-bold text-white">
                Security Code: <span class="ml-2 font-mono bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">Any 3 digits</span>
            </div>
        </div>
    </div>
    @endif

    @foreach(Wave\Plan::all() as $plan)
    @php $features = explode(',', $plan->features); @endphp
    <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 pb-10">

        <div class="pricing-box max-w-lg mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
            <div class="bg-white dark:bg-gray-800 px-6 py-8 lg:flex-shrink-1 lg:p-12">
                <h3 class="text-2xl leading-8 font-extrabold bg-clip-text bg-gradient-to-r @if($plan->price == 100) from-yellow-400 via-red-400 to-purple-500 @else from-purple-500 via-red-400 to-yellow-400 @endif text-transparent sm:text-3xl sm:leading-9 dark:text-white text-justify">
                    {{ $plan->name }} manage
                </h3>
                <p class="mt-6 text-base leading-6 text-gray-500 dark:text-gray-200">
                    {!! $plan->description !!}
                </p>
                <div class="mt-8">
                    <div class="flex items-center">
                        <h4 class="flex-shrink-0 pr-4 bg-white dark:bg-gray-800 text-sm leading-5 tracking-wider font-semibold uppercase text-indigo-600">
                            What's included
                        </h4>
                        <div class="flex-1 border-t-2 border-gray-200">
                        </div>
                    </div>
                    <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                        @foreach($features as $feature)
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                {{ $feature }}
                            </p>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mt-8">
                    <div class="flex items-center">
                        <h4 class="flex-shrink-0 pr-4 bg-white text-sm dark:bg-gray-800 leading-5 tracking-wider font-semibold uppercase text-indigo-600">
                            &amp; What'not
                        </h4>
                    </div>
                    <ul class="mt-8 lg:grid lg:grid-cols-2 lg:col-gap-8 lg:row-gap-5">
                        @if($plan->price == 100)

                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                                    <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                Promotions on Foxshop throughout the year
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                                    <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                Monthly maintenance
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                                    <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                Up to 2 custom features
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                                    <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                Unlimited access to premium components
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                                    <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                Shared hosting
                            </p>
                        </li>
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" class="h-6 w-6 mr-2" fill="red" viewBox="0 0 1792 1792">
                                    <path d="M1277 1122q0-26-19-45l-181-181 181-181q19-19 19-45 0-27-19-46l-90-90q-19-19-46-19-26 0-45 19l-181 181-181-181q-19-19-45-19-27 0-46 19l-90 90q-19 19-19 46 0 26 19 45l181 181-181 181q-19 19-19 45 0 27 19 46l90 90q19 19 46 19 26 0 45-19l181-181 181 181q19 19 45 19 27 0 46-19l90-90q19-19 19-46zm387-226q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                Dedicated developer
                            </p>
                        </li>
                        @else
                        <li class="flex items-start lg:col-span-1">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                    </path>
                                </svg>
                            </div>
                            <p class="ml-3 text-sm leading-5 text-gray-700 dark:text-gray-200">
                                Don't worry, with this offer, the "what's not" doesn't exist!
                            </p>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="py-8 px-6 text-center bg-gray-50 dark:bg-gray-700 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                <p class="text-lg leading-6 font-bold text-gray-900 dark:text-white">
                    Only
                </p>
                <div class="mt-4 flex items-center justify-center text-5xl leading-none font-extrabold bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
                    <span>
                        {{ $plan->price }}.00€
                    </span>
                </div>
                <p class="mt-4 text-sm leading-5">
                    <span class="inline-block font-medium text-gray-500 dark:text-gray-400">
                        Every month. All taxes included.
                    </span>
                </p>
                <div class="mt-6">
                    <div class="rounded-md shadow">
                        @subscribed($plan->slug)
                        <div class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold transition duration-150 ease-in-out bg-gray-200 border border-transparent cursor-default text-gray-600 focus:outline-none disabled:opacity-25" disabled>
                            You're subscribed to this plan
                        </div>
                        @notsubscribed
                        @subscriber
                        <div onclick="switchPlans('{{ $plan->plan_id }}', '{{ $plan->name }}')" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition duration-150 ease-in-out @if($plan->default){{ ' bg-gradient-to-r from-wave-600 to-indigo-500 hover:from-wave-500 hover:to-indigo-400' }}@else{{ 'bg-gray-800 hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900 focus:shadow-outline-gray' }}@endif border border-transparent cursor-pointer focus:outline-none disabled:opacity-25">
                            Switch Plans
                        </div>
                        @notsubscriber
                        <div data-plan="{{ $plan->plan_id }}" class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition duration-150 ease-in-out @if($plan->default){{ ' bg-gradient-to-r from-wave-600 to-indigo-500 hover:from-wave-500 hover:to-indigo-400' }}@else{{ 'bg-gray-800 hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900 focus:shadow-outline-gray' }}@endif border border-transparent cursor-pointer checkout focus:outline-none disabled:opacity-25">
                            Get Started
                        </div>
                        @endsubscriber
                        @endsubscribed
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endforeach

    @include('theme::partials.switch-plans-modal')
</div>