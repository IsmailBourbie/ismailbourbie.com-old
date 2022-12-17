<?php include 'includes/header.php'; ?>
<div class="container px-6 mt-28 flex-1">
    <div class="w-11/12 mx-auto flex flex-col justify-center min-h-full">
        <h1 class="flex items-center mb-4 text-sm font-bold text-orange-600 tracking-widest after:flex-1 after:ml-2 after:h-[1px] after:w-44 after:bg-gray-400">awesome things I've built</h1>
        <div class="py-8 flex">
            <ul x-data="{projects: 9}" class="lg:mr-6 w-full lg:w-auto max-h-[440px] overflow-y-scroll" dir="rtl">
                <template x-for="i in projects">
                    <li class="py-6 border-b border-main lg:border-none" dir="ltr">
                        <h2 class="text-3xl lg:text-2xl font-bold text-main tracking-wider">Younes Website</h2>
                        <div class="flex justify-between items-center">
                            <span class="text-orange-600 text-sm">Portfolio</span>
                            <span class="text-xs text-slate-400">Sep 2022</span>
                        </div>
                    </li>
                </template>
            </ul>
            <div class="flex-1 hidden lg:block">
                <div class="flex flex-col justify-center h-full lg:w-11/12 xl:w-10/12 py-9 ml-auto xl:mx-auto drop-shadow-2xl">
                    <img src="/images/browser.svg" alt="browser-mockup" srcset="">
                    <div class="w-full bg-yellow-100 basis-full max-h-96 border border-black">
                        <div class="flex flex-col justify-center items-center h-full">
                            <h2 class="text-main text-2xl font-bold">Let's build something better.</h2>
                            <p class="px-8 mt-5 text-center">
                                I strongly believe that designers and developers have a responsibility to make sure that what we are building does no harm and I try to be as ethical as I can in taking on projects.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>