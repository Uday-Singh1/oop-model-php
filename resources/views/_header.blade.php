<header class="bg-gray-800 text-white py-4 flex justify-between items-center">
    <div class="logo flex items-center">
        <!-- <img src="/public/images/amsterdam-xxx.svg" alt="Amsterdam-xxx" class="rounded-full w-15 h-15 ml-4"> -->
        <h5 class="ml-4 font-bold">Amsterdam-BMV</h5>
    </div>
    <nav class="hidden md:flex"> 
        <ul class="flex list-none">
            <li class="mr-4">
                <a href="{{ route('homepage') }}" class="no-underline font-bold {{ (Route::currentRouteName() == 'homepage') ? 'text-red-500' : 'text-white' }}">Home</a>
            </li>
            <li class="mr-4">
                <a href="{{ route('projects.projecten') }}" class="no-underline font-bold {{ (Route::currentRouteName() == 'projects.projecten') ? 'text-red-500' : 'text-white' }}">Projecten</a>
            </li>
            <li class="mr-4">
                <a href="{{ route('about.me') }}" class="no-underline font-bold {{ (Route::currentRouteName() == 'about.me') ? 'text-red-500' : 'text-white' }}">Over-ons</a>
            </li>
            <li class="mr-4">
                <a href="{{ route('contact.form') }}" class="no-underline font-bold {{ (Route::currentRouteName() == 'contact.form') ? 'text-red-500' : 'text-white' }}">Contact</a>
            </li>
        </ul>
    </nav>


    
    <!-- Burger menu for small screens -->
    <div class="md:hidden">
        <button id="burger-menu" class="text-white focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
</header>


<div id="responsive-menu" class="md:hidden hidden">
    <ul class="bg-gray-800 text-white p-4">
        <li class="mb-2">
            <a href="{{ route('homepage') }}" class="no-underline font-bold {{ (Route::currentRouteName() == 'homepage') ? 'text-red-500' : 'text-white' }}">Home</a>
        </li>
        <li class="mb-2">
            <a href="{{ route('projects.projecten') }}" class="no-underline font-bold {{ (Route::currentRouteName() == 'projects.projecten') ? 'text-red-500' : 'text-white' }}">Projecten</a>
        </li>
        <li class="mb-2">
            <a href="{{ route('about.me') }}" class="no-underline font-bold {{ (Route::currentRouteName() == 'about.me') ? 'text-red-500' : 'text-white' }}">Over-ons</a>
        </li>
        <li class="mb-2">
            <a href="{{ route('contact.form') }}" class="no-underline font-bold {{ (Route::currentRouteName() == 'contact.form') ? 'text-red-500' : 'text-white' }}">Contact</a>
        </li>
    </ul>
</div>

<script>

    document.getElementById('burger-menu').addEventListener('click', function () {
        document.getElementById('responsive-menu').classList.toggle('hidden');
    });
</script>
