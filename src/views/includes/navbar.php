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
    <div id="menu" class="fixed transform -translate-y-full transition duration-500 inset-0 z-40 bg-red-200 pt-8 md:pt-20 pb-4">
        <div class="container mx-auto h-full">
            <div class="flex flex-col justify-between h-full">
                <div class="flex flex-1 flex-col md:flex-row w-full px-6 md:px-20">
                    <ul class="flex flex-col flex-1 justify-evenly md:justify-around text-center md:text-left">
                        <li class="text-6xl font-bold"><a href="#">Home</a></li>
                        <li class="text-6xl font-bold"><a href="#">Profile</a></li>
                        <li class="text-6xl font-bold"><a href="#">About</a></li>
                        <li class="text-6xl font-bold"><a href="#">Contacts</a></li>
                    </ul>
                    <ul class="flex flex-row md:flex-col justify-between items-center md:py-40 ">
                        <li class="">
                            <a class="menuItem" href="#">
                                <img src="/images/icons/twitter.svg" alt="twitter">
                            </a>
                        </li>
                        <li class="">
                            <a class="menuItem" href="#">
                                <img src="/images/icons/instagram.svg" alt="instagram">
                            </a>
                        </li>
                        <li class="">
                            <a class="menuItem" href="#">
                                <img src="/images/icons/github.svg" alt="github">
                            </a>
                        </li>
                        <li class="">
                            <a class="menuItem" href="#">
                                <img src="/images/icons/linkedin.svg" alt="linkedin">
                            </a>
                        </li>
                        <li class="">
                            <a class="menuItem" href="#">
                                <img src="/images/icons/mail.svg" alt="mail">
                            </a>
                        </li>
                    </ul>

                </div>
                <p class="translate-y-0 text-center border-t border-slate-500 py-2 md:py-5 w-11/12 md:w-10/12 mx-auto mt-8">© Ismail Bourbie 2022. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</nav>