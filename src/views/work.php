<?php include 'includes/header.php'; ?>
<div class="container px-6 mt-28 flex-1">
    <div class="w-11/12 mx-auto flex flex-col justify-center min-h-full" x-data="work()">
        <h1 class="flex items-center mb-6 2xl:mb-20 text-sm font-bold text-orange-600 tracking-widest after:flex-1 after:ml-2 after:h-[1px] after:w-44 after:bg-gray-400">awesome things I've built</h1>
        <div class="py-8 flex">
            <ul class="lg:pr-6 w-full lg:w-auto lg:max-h-[410px] overflow-y-scroll">
                <template x-for="project in projects">
                    <li class="mb-10 border-b border-main lg:border-none">
                        <a href="#">
                            <h2 class="text-3xl lg:text-2xl xl:text-3xl font-bold text-main tracking-wider" x-text="project.title"></h2>
                            <div class="flex justify-between items-center">
                                <span class="text-orange-600 text-sm" x-text="project.tag"></span>
                                <span class="text-xs text-slate-400" x-text="project.date"></span>
                            </div>
                        </a>
                    </li>
                </template>
            </ul>
            <div class="flex-1 hidden lg:block">
                <div class="flex flex-col justify-center h-full max-w-[700px] lg:w-11/12 xl:w-10/12 ml-auto xl:mx-auto drop-shadow-2xl">
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
<script>
    console.log(work());
    function work() {
        return {
            'projects': [
                {title: "Younes Portfolio", tag: 'Portfolio', date: 'Sep 2022'},
                {title: "Tic-Tac-Toe", tag: 'Game', date: 'Ap 2018'},
                {title: "Jami3aty", tag: 'Management', date: 'May 2018'},
                {title: "Online Shop", tag: 'E-commerce', date: 'Feb 2023'},
                {title: "Drudz", tag: 'Health', date: 'Jun 2022'}
            ]
        }
    }
</script>
<?php include 'includes/footer.php'; ?>