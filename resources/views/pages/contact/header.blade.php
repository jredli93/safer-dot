<section class="header-contact">
    @include('utils.menu')
    @if (session('success'))
    <div class="alert success-alert">
        <h3 class="alert-text"> {{ session('success') }}</h3>
        <a class="close">&times;</a>
    </div>
    @endif
    <!-- <div class="mx-auto mt-20 sm:mb-10 mb-16">
        <h1 class="mb-4 text-3xl text-center font-extrabold text-red-600 dark:text-slate-700 md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-red-700 from-rose-600">Contact </span>Us</h1>
        <p class="text-lg text-center font-normal text-slate-800 lg:text-xl dark:text-slate-800">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive we focus on markets where technology, innovation, and capital can unlock long-term value and drive we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
    </div> -->
</section>
