<nav>
    <div class="relative flex justify-between items-center px-6 py-4 z-50">
        <button id="menuButton" class="text-gray-500 w-10 h-10 relative focus:outline-none">
            <span class="sr-only">Open main menu</span>
            <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current -translate-y-1.5 transform transition duration-500 ease-in-out"></span>
                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out"></span>
                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current translate-y-1.5 transform  transition duration-500 ease-in-out"></span>
            </div>
        </button>
        <div class="flex items-center">
            <img src="/images/icons/contact.svg" alt="contact" class="inline mr-1"> <span class="hidden md:inline text-lg tracking-wide">Say Hello</span>
        </div>
    </div>
    <div id="menu" class="fixed transform -translate-y-full transition duration-500 inset-0 z-40 bg-red-200 pt-20 pb-4">
        <div class="flex items-center h-full flex-col">
            <div class="flex flex-col basis-full justify-around">
                <ul class="text-center">
                    <li class="text-6xl my-6 font-bold"><a href="#">Home</a></li>
                    <li class="text-6xl my-6 font-bold"><a href="#">Profile</a></li>
                    <li class="text-6xl my-6 font-bold"><a href="#">About</a></li>
                    <li class="text-6xl my-6 font-bold"><a href="#">Contacts</a></li>
                </ul>
                <ul class="flex flex-row justify-evenly">
                    <li><a class="menuItem" href="#">H</a></li>
                    <li><a class="menuItem" href="#">F</a></li>
                    <li><a class="menuItem" href="#">D</a></li>
                    <li><a class="menuItem" href="#">G</a></li>
                </ul>

            </div>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>

    </div>
</nav>