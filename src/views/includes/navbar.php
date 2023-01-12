<nav x-data="{ open: false }" class="absolute w-full">
    <div class="relative flex justify-between items-center px-6 py-4 z-50">
        <button class="text-gray-500 w-10 h-10 relative focus:outline-none" @click="open = !open">
            <span class="sr-only">Open main menu</span>
            <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-black transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-black   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-black transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
            </div>
        </button>
        <a href="mailto:bourbieismail@gmail.com?subject=Hi Ismail, I'd like to hire you" class="flex items-center">
            <img src="/images/icons/contact.svg" alt="contact" class="inline mr-1">
            <span class="hidden lg:inline text-lg text-black tracking-wide">Say Hello</span>
        </a>
    </div>
    <div class="fixed transform transition duration-500 inset-0 z-40 -translate-y-full bg-yellow-100 border-8 border-white pt-8 lg:pt-20 pb-4" :class="{'translate-y-0': open}">
        <div class="container mx-auto h-full">
            <div class="flex flex-col justify-between h-full">
                <div class="flex flex-1 flex-col lg:flex-row w-full px-6 lg:px-20">
                    <ul class="flex flex-col flex-1 justify-evenly text-center lg:text-left">
                        <li class="text-6xl font-bold text-orange-600" x-show="open" x-transition:enter.delay.300ms.duration.800ms><a href="/home">Home</a></li>
                        <li class="text-6xl font-bold text-orange-600" x-show="open" x-transition:enter.delay.300ms.duration.1100ms><a href="/about">About</a></li>
                        <li class="text-6xl font-bold text-orange-600" x-show="open" x-transition:enter.delay.300ms.duration.1300ms><a href="/work">Work</a></li>
                        <li class="text-6xl font-bold text-orange-600" x-show="open" x-transition:enter.delay.300ms.duration.1600ms><a href="/contact">Contact</a></li>
                    </ul>
                    <ul class="flex flex-row lg:flex-col justify-between lg:justify-center items-center ">
                        <li class="lg:my-5" x-show="open" x-transition:enter.delay.300ms.duration.800ms>
                            <a href="https://twitter.com/ismailbourbie">
                                <img src="/images/icons/twitter.svg" alt="twitter">
                            </a>
                        </li>
                        <li class="lg:my-5" x-show="open" x-transition:enter.delay.300ms.duration.1100ms>
                            <a href="https://www.instagram.com/_ismailbourbie/">
                                <img src="/images/icons/instagram.svg" alt="instagram">
                            </a>
                        </li>
                        <li class="lg:my-5" x-show="open" x-transition:enter.delay.300ms.duration.1300ms>
                            <a href="https://github.com/ismailBourbie/">
                                <img src="/images/icons/github.svg" alt="github">
                            </a>
                        </li>
                        <li class="lg:my-5" x-show="open" x-transition:enter.delay.300ms.duration.1600ms>
                            <a href="https://www.linkedin.com/in/ismailbourbie/">
                                <img src="/images/icons/linkedin.svg" alt="linkedin">
                            </a>
                        </li>                        
                    </ul>

                </div>
                <p class="text-center text-sm border-t border-main text-main py-2 lg:py-5 w-11/12 lg:w-10/12 mx-auto mt-8" x-show="open" x-transition:enter.delay.300ms>© Ismail Bourbie <span x-text="new Date().getFullYear()"></span>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</nav>