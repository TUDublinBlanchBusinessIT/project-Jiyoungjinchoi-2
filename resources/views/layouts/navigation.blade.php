<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <img src="{{ asset('images/fitflex-logo.png') }}" alt="FitFlex Logo" class="h-10">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ url('/users') }}" class="text-gray-500 hover:text-gray-700">Users</a>
                    <a href="{{ url('/classes') }}" class="text-gray-500 hover:text-gray-700">Classes</a>
                    <a href="{{ url('/bookings') }}" class="text-gray-500 hover:text-gray-700">Bookings</a>
                    <a href="{{ url('/trainers') }}" class="text-gray-500 hover:text-gray-700">Trainers</a>
                    <a href="{{ url('/memberships') }}" class="text-gray-500 hover:text-gray-700">Memberships</a>
                </div>
            </div>

            <!-- Hamburger for Mobile -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': ! open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ url('/users') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-gray-600 hover:text-gray-800">Users</a>
            <a href="{{ url('/classes') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-gray-600 hover:text-gray-800">Classes</a>
            <a href="{{ url('/bookings') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-gray-600 hover:text-gray-800">Bookings</a>
            <a href="{{ url('/trainers') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-gray-600 hover:text-gray-800">Trainers</a>
            <a href="{{ url('/memberships') }}" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium text-gray-600 hover:text-gray-800">Memberships</a>
        </div>
    </div>
</nav>
