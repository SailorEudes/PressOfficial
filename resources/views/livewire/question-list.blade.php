<div>

    <section id="faq" class="py-16 bg-white dark:bg-slate-900 md:py-20 lg:py-24">
        <div class="max-w-5xl px-12 mx-auto xl:px-0">

            <div class="max-w-4xl px-10 mx-auto text-left md:text-center pb-14 md:px-0">
                <p class="text-gray-800 font-medium uppercase">
                    All the information above did not allow you to understand the usefulness of Foxpress?
                </p>
                <h2 style="line-height:65px" class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3 bg-clip-text bg-gradient-to-r from-yellow-400 via-red-400 to-purple-500 text-transparent">
                    Consult our frequently asked questions
                </h2>
                <p class="mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">
                    We tried to gather all the questions we could and we answered them briefly!
                </p>
            </div>

            <div class="relative mt-12 space-y-3">

                <!-- Question 1 -->
                @foreach ($showquestions as $showquestion)
                <div x-data="{ show: false }" class="relative overflow-hidden border-b border-gray-100 select-none">
                    <h4 @click="show=!show" class="flex items-center justify-between px-2 text-base sm:text-xl lg:text-2xl text-gray-700 cursor-pointer py-7 hover:text-gray-900">
                        <span>{{$showquestion->question}}</span>
                        <svg class="w-6 h-6 mr-2 transition-all duration-200 ease-out transform rotate-0" :class="{ '-rotate-180' : show }" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </h4>
                    <p class="px-2 pt-0 -mt-2 text-gray-400 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-in duration-300" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">
                        {!! $showquestion->response !!}
                    </p>
                </div>
                @endforeach
            </div>

        </div>
    </section>


</div>