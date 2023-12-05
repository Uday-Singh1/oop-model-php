<header class="bg-gray-800 text-white py-2 flex justify-between items-center">
    <div class="logo flex items-center">
    <!-- <img src="/public/images/amsterdam-xxx.svg" alt="Amsterdam-xxx" class="rounded-full w-15 h-15 ml-4"> -->
        <h5 class="ml-4 font-bold">Amsterdam-BMV</h5>
      
    </div>
    <nav>
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
</header>
