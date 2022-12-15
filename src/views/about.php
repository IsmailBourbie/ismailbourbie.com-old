<?php include 'includes/header.php'; ?>

<div class="container px-6 mt-28 flex justify-center items-center flex-1">
    <div class="flex items-center lg:w-4/5 flex-col-reverse lg:flex-row my-6">
        <div class="my-6 inline-block mx-auto relative after:absolute after:-left-6 after:-bottom-6 after:-z-10 after:w-full after:h-full after:bg-dot-pattern after:bg-[length:10px_10px]">
            <img class="max-w-lg rounded-lg after:border-red-600" src="https://via.placeholder.com/271x380" alt="just a selfie">
        </div>
        <div class="lg:mx-5 xl:mx-8">
            <h1 class="flex items-center mb-4 text-sm font-bold text-orange-600 tracking-widest after:flex-1 after:ml-2 after:h-[1px] after:w-44 after:bg-main">A BIT ABOUT ME</h1>
            <p class="my-2 tracking-wider text-zinc-500">
                Hello! My name is Ismail and I enjoy creating things that live on the internet. My interest in web development started back in 2012 when I decided to try editing custom Tumblr themes — turns out hacking together a custom reblog button taught me a lot about HTML & CSS!
            </p>
            <p class="my-2 tracking-wider text-zinc-500">
                I also recently launched a course that covers everything you need to build a web app with the Spotify API using Node & React.
            </p>
            <p class="my-2 tracking-wider text-zinc-500">
                Here are a few technologies I’ve been working with recently:
            </p>
            <ul class="pt-2 pb-4 md:pb-0 flex flex-row flex-wrap"  x-data="{tags: 6}">
                <template x-for="i in tags">
                    <li class="basis-1/2 md:basis-1/3 relative pl-5 before:content-['\2023'] before:text-4xl before:leading-5 before:text-orange-600 before:absolute before:left-0" x-text="'PHP Language'"></li>
                </template>
            </ul>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>