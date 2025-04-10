    <div class="flex items-center justify-between container mx-auto border-2 rounded-3xl py-4">
        <div class="px-4" id="open">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
              
        </div>
        
        <div class="hidden lg:flex">
            <input type="text" placeholder="Type Here To Search" class=" w-[300px] rounded-xl p-2 text-center bg-gray-300 outline-none">
        </div>
        <div class="space-x-4 md:flex px-4">
            <a href="#" class="right_navbar hidden md:flex">Home</a>
            <a href="#" class="right_navbar hidden md:flex">Create</a>
            <a href="#" class="right_navbar hidden md:flex">Login</a>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
            </svg>
              
        </div>
        
        <div id="overlay" class="bg-black inset-0 opacity-50 fixed hidden"></div>
    </div>
    <div class="fixed top-0 left-0 bg-blue-300 h-full w-72 transform -translate-x-full transition-transform duration-400 ease-in-out" id="sidebar">
        <div id="close" class="flex items-center justify-end p-4"> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="size-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              </svg>
              
        </div>
        <div class="flex flex-col items-center justify-between">
            <div class="flex items-center justify-center flex-col space-y-3 py-16 border-b-2">
                <input type="text" placeholder="Type Here To Search" class=" w-64 rounded-xl p-2 text-center bg-gray-200 outline-none">

                <a href="" class="mobile_navbar">Home</a>
                <a href="" class="mobile_navbar">Create</a>
                <a href="" class="mobile_navbar">Login</a>
            </div>

        </div>

    </div>
    <script>
        const overlay = document.getElementById('overlay');
        const close = document.getElementById('close');
        const open = document.getElementById('open');
        const sidebar = document.getElementById('sidebar');

        function toggleSideBar(){
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }

        open.addEventListener('click', function(){
            toggleSideBar()
        })
        close.addEventListener('click', function(){
            toggleSideBar()
        })
        overlay.addEventListener('click', function(){
            toggleSideBar()
        })

        
       

    </script>