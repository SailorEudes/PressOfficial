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


    <div class="flex flex-col max-w-4xl mx-auto divide-x-0 divide-gray-800 md:divide-x lg:divide-x-0 md:flex-row lg:space-x-8 pb-20">
        @foreach(Wave\Plan::all() as $plan)
        @php $features = explode(',', $plan->features); @endphp
        <div class="w-full md:w-1/2 br-responsive">
            <div class="relative w-full p-10 overflow-hidden bg-gray-900 shadow-xl lg:rounded-lg">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-br from-yellow-400 via-purple-400 to-pink-500"></div>
                <div class="flex items-center justify-between text-gray-200">
                    <div class="relative justif-self-end">
                        <h2 class="text-2xl bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
                            {{ $plan->name }}
                        </h2>
                        <p class="text-xs font-medium uppercase">
                            {{ $plan->description }}
                        </p>
                    </div>
                    <div class="flex items-center">
                        <h3 class="text-5xl text-white">
                            {{ $plan->price }} €
                        </h3>
                        <div class="flex flex-col ml-3">
                            <p class="font-medium">
                                per month
                            </p>
                            <p class="text-sm">
                                All taxes included
                            </p>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-700 h-0.5 my-10 w-full"></div>
                <ul class="w-full py-2 my-12 space-y-5 text-xl text-gray-300">

                    @foreach($features as $feature)
                    <li class="flex items-center">
                        <div class="flex items-center justify-center w-8 h-8 mr-3 text-white bg-gray-700 rounded-full">
                            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-green-400">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span>{{ $feature }}</span>
                    </li>
                    @endforeach

                    @if($plan->price == 100)

                    <li class="flex items-center">
                        <div class="flex items-center justify-center w-8 h-8 mr-3 text-white bg-gray-700 rounded-full"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-4 h-4 text-red-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg></div> <span>Shared hosting</span>
                    </li>
                    <li class="flex items-center">
                        <div class="flex items-center justify-center w-8 h-8 mr-3 text-white bg-gray-700 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-4 h-4 text-red-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div> <span>Unlimited Customizations</span>
                    </li>
                    @endif
                </ul>

                @subscribed($plan->slug)
                <div class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold transition duration-150 ease-in-out bg-gray-200 border border-transparent cursor-default text-wave-600 focus:outline-none disabled:opacity-25" disabled>
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

                <!--<a href="mailto:contact@foxpress.fr?'We Manage' Plan's&amp;body=Hi, i took a look at your 'We Manage' plan and i'm interested to know more about it, can we get in touch and discuss it?" class="relative block w-full py-4 overflow-hidden text-base font-semibold text-center text-gray-800 bg-white rounded-lg"><span>Let's talk</span></a>-->
            </div>
        </div>
        @endforeach
    </div>

    @include('theme::partials.switch-plans-modal')

    @if(config('wave.paddle.env') == 'sandbox')
    <div class="mx-auto max-w-7xl">
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
                Credit Card Number: <span class="ml-2 font-mono bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">4242 4242 4242 4242</span>
            </div>
            <div class="pt-2 text-sm font-bold text-white">
                Expiration Date: <span class="ml-2 font-mono bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">Any future date</span>
            </div>
            <div class="pt-2 text-sm font-bold text-white">
                Security Code: <span class="ml-2 font-mono bg-clip-text  bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">Any 3 digits</span>
            </div>
        </div>
    </div>
    @endif
</div>