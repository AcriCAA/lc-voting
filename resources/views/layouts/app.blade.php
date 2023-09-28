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

            
            <div class="w-70 mr-5">

                <div class="border-2 border-blue rounded-xl mt-16">
                        <div class="text-center px-6 py-2 pt-8">
                        <h3 class="font-semibold text-base">Add an idea</h3>
                        <p class="text-xs mt-4">Let us know what you think</p>

                    </div>

                    <form action="#" method="POST" class="space-y-4 px-4 py-6">
                        

                        <input type="text" class="w-full bg-gray-100 rounded-xl placeholder-gray-900 px-4 py-2 rounded" name="category" placeholder="find an idea">

                        <select name="category_add" id="category_add" class="w-full bg-gray-100">
                            <option>one</option>

                        </select>

                        <textarea name="idea" id="idea" clas="w-full rounded-xl placeholder-gray-900 border-none text-sm px-4 py-2"  rows="3" placeholder="Describe your idea."></textarea>

                        <div class="flex items-center justify-between space-x-3">
                            

                            <button type="button"
 
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                            <svg class="w-4 text-gray-500 transform-rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                                <span class="ml-2">Attach</span>


                            </button>

                            <button type="submit"
 
                            class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 text-white">
                            
                                <span class="ml-2">Submit</span>


                            </button>


</svg>

                        </div>
                    </form>
                </div>

           </div>
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
