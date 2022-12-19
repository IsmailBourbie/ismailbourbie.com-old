<?php include 'includes/header.php'; ?>
<div class="container px-6 mt-28 flex-1">
    <div class="w-11/12 mx-auto flex flex-col justify-center min-h-full" x-data="work()">
        <h1 class="flex items-center mb-6 2xl:mb-20 text-sm font-bold text-orange-600 tracking-widest after:flex-1 after:ml-2 after:h-[1px] after:w-44 after:bg-gray-400">awesome things I've built</h1>
        <div class="py-8 flex">
            <ul class="lg:pr-6 w-full lg:w-auto lg:max-h-[410px] overflow-y-scroll" @mouseleave="hideProject()">
                <template x-for="(project, index) in projects">
                    <li class="mb-10 border-b border-main lg:border-none">
                        <a href="#" @mouseenter="showProject(index)" class="hover:opacity-60">
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
                <div class="flex flex-col justify-center h-full max-w-[620px] lg:w-11/12 xl:w-10/12 ml-auto xl:mx-auto drop-shadow-2xl">
                    <img src="/images/browser.svg" alt="browser-mockup" srcset="">
                    <div class="w-full bg-yellow-100 basis-full max-h-80 border border-black relative">
                        <template x-if="selectedProjectImage == null">
                            <div class="flex flex-col justify-center items-center h-full">
                                <h2 class="text-main text-2xl font-bold">Let's build something better.</h2>
                                <p class="px-8 mt-5 text-center">
                                    I strongly believe that designers and developers have a responsibility to make sure that what we are building does no harm and I try to be as ethical as I can in taking on projects.
                                </p>
                            </div>
                        </template>
                        <template x-for="project in projects">
                            <img :src="baseImageUrl+project.image" :alt="project.title" class="w-full h-full absolute top-0" x-show="selectedProjectImage === project.image" x-transition.opacity.enter.duration.800>
                        </template>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function work() {
        return {
            'projects': [{
                    title: "Younes Portfolio",
                    tag: 'Portfolio',
                    date: 'Sep 2022',
                    image: 'younes-portfolio.png'
                },
                {
                    title: "Drudz",
                    tag: 'Health',
                    date: 'Jun 2022',
                    image: 'drudz.png'
                },
                {
                    title: "Jami3aty",
                    tag: 'Management',
                    date: 'May 2018',
                    image: 'younes-portfolio.png'
                },
                {
                    title: "Online Shop",
                    tag: 'E-commerce',
                    date: 'Feb 2023',
                    image: 'online-shop.png'
                },
                {
                    title: "Tic-Tac-Toe",
                    tag: 'Game',
                    date: 'Ap 2018',
                    image: 'tic-tac-toe.png'
                },
            ],
            selectedProjectImage: null,
            baseImageUrl: '/images/projects/',
            showProject(index) {
                this.selectedProjectImage = this.projects[index].image;
                console.log(this.selectedProjectImage);
            },
            hideProject() {
                this.selectedProjectImage = null;
            }
        }
    }
</script>
<?php include 'includes/footer.php'; ?>