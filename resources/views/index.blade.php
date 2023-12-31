<x-app-layout>
    <div class="filters flex space-x-6">

        <div class="w-1/3">

            <select name="category" id="category" class="w-full rounded-xl px-4 py-2 border-none">

                <option name="category" value="category 1">Cat 1</option>
            </select>
        </div>

        <div class="w-1/3">

            <select name="other-filters" id="other-filters" class="w-full rounded-xl px-4 py-2 border-none">

                <option name="other-filters" value="other-filters 1">Other Filters</option>
            </select>
        </div>

        <div class="w-2/3 relative">



            <input type="search" placeholder="find an idea" class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none placeholder-gray-700" name="">



            <div class="absolute top-0 flex items-center h-full ml-2">

                <svg class="w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
             </svg>
         </div>


     </div>

 </div>

 <div class="ideas-container space-y-6 my-6">

    <div class="idea-container bg-white rounded-xl flex hover:shadow-card transition duration-150 ease-in cursor-pointer">

        <div class="border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl text-center">12</div>
                <div class="text-center text-gray-500">Votes</div>    
            </div>
            
            <div class="mt-8">

                <button class="width-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xs uppercase rounded-xl transition duration-150 ease-in px-4 py-3 text-xxs">vote</button>
            </div>
        </div>
        {{-- <div class="text-gray-500"></div> --}}

        <div class="flex flex-1 px-2 py-6"> 
            <div class="flex-none">
                <a href="#">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v-1" class="w-14 h-14 rounded-xl"/>
            </a>

            </div>
            

            <div class="w-full mx-4"> 

                <h4 class="text-xl font-semibold"> 
                    <a href="#" class="hover:underline"> Lorem ipsum dolor sit amet, consectetur</a>
                </h4>

                <div class="text-gray-600 mt-3 line-clamp-3">

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Versatur dicere sensu praesertim ferae litteras civitas discidia nascuntur, splendore. Eosque sanos placet praeceptrice consequuntur, nominata de.

                </div>

                <div class="flex items-center justify-between mt-6">

                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">

                        <div>10 hours agos</div>
                        <div>&bull;</div>
                        <div>Categories</div>
                        <div>&bull;</div>
                        <div>Comment</div>
                        <div>&bull;</div>

                    </div>

                    <div class="flex items-center space-x-2">

                        <div class="bg-gray-200 text-xxs font-bold text-center uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 py-2 px-2 rounded-full">Open</div>
                        <button class="relative text-center bg-gray-100 hover:bg-gray-200 border rounded-full h-7 py-2 px-3 transition duration-150 ease-in">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM18.75 12a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                      </svg>
                      <ul class="absolute w-44 text-left font-semibold shadow-dialog rounded-xl py-3 ml-8 hover:shadown-dialog transition duration-150 ease-in">

                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">item 1</a> </li>
                        <li><a href="#" class="hover:bg-gray-100 px-5 py-3 block transition duration-150 ease-in">item 1</a> </li>
                    </ul>
                </button>

            </div>


        </div>
    </div>
</div>



</div>                



</div>

</div> 
{{-- //end ideas container --}}
</x-app-layout>
