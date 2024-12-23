<section id="header" class="header">
    @include('utils.menu')
    @if (session('success'))
    <div class="alert success-alert">
        <h3 class="alert-text"> {{ session('success') }}</h3>
        <a class="close">&times;</a>
    </div>
    @endif
    <div class="cta">
        <h1 class="cta-heading">TRUCKING PERMIT, RECRUITING, AND CONSULTING SERVICES</h1>
        <h1 class="cta-subheading text-9xl">Your Ally in Managing Safety Compliance, Recruiting Efforts, and Handling All Operational
            Management Tasks within Your Trucking Business. Your Partner in the Transportation Industry&#39;s
            Complex Permit and License System.</h1>
        <div class="btn-wrap hp-buttons">
            <a href="#test" data-lity class="transition-colors duration-300 ease-in-ou hover:no-underline hover:bg-white font-semibold hover:text-slate-900 py-4 px-6 border-2 border-white rounded-lg">
                GET YOUR FMCSA OPERATING AUTHORITY NOW
            </a>
            <a href="#inline" data-lity class="transition-colors duration-300 w-full sm:w-auto md md:ml-2 ease-in-ou hover:no-underline hover:bg-white font-semibold hover:text-slate-900 py-4 px-6 border-2 border-white rounded-lg">
                REQUEST CONSULTATION
            </a>
        </div>
    </div>

    <div id="test" style="background:#fff" class="lity-hide">
        <form class="grid grid-cols-1 gap-6 p-4 mt-8">
            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">First Name</label>
                <input type="text" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Last name</label>
                <input type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Phone number</label>
                <input type="text" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Email address</label>
                <input type="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Company Name</label>
                <input type="company_name" placeholder="Enter company name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <!--
            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Company Name</label>
                <input type="company_name" placeholder="Enter company name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm password</label>
                <input type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div> -->

            <button class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-700 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                <span>GET YOUR FMCSA OPERATING AUTHORITY</span>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </form>
    </div>

    <div id="inline" style="background:#fff" class="lity-hide">
        <form class="grid grid-cols-1 gap-6 p-4 mt-8">
            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">First Name</label>
                <input type="text" placeholder="John" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Last name</label>
                <input type="text" placeholder="Snow" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Phone number</label>
                <input type="text" placeholder="XXX-XX-XXXX-XXX" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Email address</label>
                <input type="email" placeholder="johnsnow@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Company Name</label>
                <input type="company_name" placeholder="Enter company name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>
            <!--
            <div>
                <label class="block mb-2 text-sm text-gray-900 dark:text-gray-900">Company Name</label>
                <input type="company_name" placeholder="Enter company name" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div>

            <div>
                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Confirm password</label>
                <input type="password" placeholder="Enter your password" class="block w-full px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40">
            </div> -->

            <button class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-700 rounded-md hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                <span>Request free consultation </span>

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </form>
    </div>
    <!-- <div class="container">
        <div class="field h-[50px]">
            <div class="mouse"></div>
            <div class="scroll"></div> -->
            <!-- <a href="#cta-content">
                <div class="arrow"></div>
            </a> -->
        <!-- </div>
    </div> -->
    <!-- <a href="#cta-content" class="scroll">
        <div class="box">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a> -->
</section>
