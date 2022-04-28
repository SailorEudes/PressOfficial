<nav class="flex items-center justify-end flex-1 hidden w-full h-full space-x-10 md:flex">
    <a href="/#welcome" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        Welcome
    </a>

    <a href="/#techs" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        Techs
    </a>

    <a href="/#features" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        Features
    </a>

    <a href="/#team" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        Team
    </a>

    <a href="/#pricing" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        Plans
    </a>

    <a href="{{ route('wave.blog') }}" class="text-base font-medium leading-6 text-gray-800 transition duration-150 ease-in-out hover:text-gray-600 focus:outline-none focus:text-gray-600">
        Blog
    </a>

    <div class="w-1 h-5 mx-10 border-r border-gray-300"></div>
    <a href="{{ route('login') }}" class="text-base font-medium leading-6 text-gray-800 whitespace-no-wrap hover:text-gray-600 focus:outline-none focus:text-gray-900">
        Sign in
    </a>
    <span class="inline-flex rounded-md shadow-sm">
        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out border border-transparent rounded-md bg-gray-700 hover:bg-gray-600 focus:outline-none focus:border-gray-700 focus:shadow-outline-wave active:bg-gray-700">
            Sign up
        </a>
    </span>
</nav>