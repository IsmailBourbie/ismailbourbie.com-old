<?php include 'includes/header.php'; ?>

<div class="container px-6 mt-28 flex justify-center items-center flex-1">
    <div class="flex items-center lg:w-4/5 flex-col-reverse lg:flex-row my-6">
        <div class="my-6 inline-block mx-auto relative
                    after:absolute after:-right-2 after:-top-2 after:-z-10 after:w-20 after:h-20 after:border-t-2 after:border-r-2 after:border-orange-600
                    before:absolute before:-left-5 before:-bottom-5 before:-z-10 before:w-52 before:h-64 before:bg-main">
            <img class="max-w-lg after:border-red-600" src="https://via.placeholder.com/271x380" alt="just a selfie">
        </div>
        <div class="lg:mx-6 xl:mx-9 xl:mr-36">
            <h1 class="flex items-center mb-4 text-sm font-bold text-orange-600 tracking-widest after:flex-1 after:ml-2 after:h-[1px] after:w-44 after:bg-gray-300">A BIT ABOUT ME</h1>
            <p class="my-4 tracking-wider text-slate-500">
                Hello! My name is Ismail, I'm a software engineer post-graduate, with 5+ years of experience in a wide range of Web Development.
            </p>
            <p class="my-4 tracking-wider text-slate-500">
                I am passionate about coding and solving problems through code, and I am excited to work alongside other amazing programmers and learn so much more!
            </p>
            <p class="my-4 tracking-wider text-slate-500">
            recently i started working with some awesome tools:
            </p>
            <ul class="pt-2 pb-4 md:pb-0 flex flex-row flex-wrap" x-data="{technologies: ['PHP', 'Javascript', 'Tailwindcss', 'Laravel', 'Vue.js', 'Alpine.js']}">
                <template x-for="tech in technologies">
                    <li class="basis-1/2 md:basis-1/3 text-slate-400 relative pl-5 before:content-['\2023'] before:text-4xl before:leading-5 before:text-orange-600 before:absolute before:left-0" x-text="tech"></li>
                </template>
            </ul>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>