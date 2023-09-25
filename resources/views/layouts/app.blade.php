<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Voting') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Open+Sans:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-background">
        <header>
            
            <a href="#"><img class="p-3"    src="{{asset('img/logo.svg')}}"/></a>
            <div class="flex items-center"> 
             @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                       
                        
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif</div>

        </header>

        <main class="container mx-auto max-w-custom flex" style="max-width:1000px;">

            
            <div class="w-70 mr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Finis, perspiciatis perspiciatis numen defatigatio, deleniti dissentiunt. Cernimus mollis liquidae animumque eademque sed oderit incorruptis bonum statuat. Inmensae tempore sint approbantibus suam illam defuturum fautrices quantumcumque, arte aperiri optari, unum deduceret aliqua nondum pendet contemnit noris libido, theophrasti putanda consiliisque sequitur consiliisque habet iis minuit duce affert, prorsus familias sequamur consuetudinum avocent prorsus mucius distinctio contineri tuentur. Politus, definitiones ullus poterimus senectutem cotidie desiderat expectata ille, movere utroque numquam controversia quoddam causam.</div>
            <div class="w-175"><nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li class="border-b-4 pb-3 border-blue"><a href="#">All ideas</a></li>
                    <li class=""><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering</a></li>
                    <li class=""><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In Progress</a></li>
                    <li class=""><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering</a></li>
                    <li class=""><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering</a></li>

                </ul>


            </nav>
                <div class="mt-8">
                    
                    {{$slot}}
                </div>

        </div>
        </main>
    </body>
</html>
