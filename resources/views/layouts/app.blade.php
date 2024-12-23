<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,  maximum-scale=1, minimum-scale=1, initial-scale=1 upgrade-insecure-requests">
    <meta name="description" content="SaferDOT Solution: Your trusted partner in safe and reliable trucking services. We prioritize safety, efficiency, and customer satisfaction, ensuring your cargo reaches its destination securely and on time. Discover our comprehensive logistics solutions today!">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Safer dot solutions</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/popular/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/business/flaticon.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vegas.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lity.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/vegas.min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/lity.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="shortcut icon" type="image/jpg" href="/assets/images/safer-logo.png" />
</head>

<body>

    @yield('header')
    @yield('work')
    @yield('partners')
    @yield('services')
    @yield('testimonials')
    @yield('cta-careers')
    @yield('footer')

    @if(session()->has('success'))
    <p>
        {{ session()->get('success') }}
    </p>
    @endif

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif


    <div id="popup" class="mx-auto">
        <i class="fas fa-times fa-xl close-button absolute z-20 top-5 right-5" id="popup-close"></i>
        <div class="relative isolate overflow-hidden bg-gray-900 shadow-2xl py-5">

            <h2 class="mx-auto max-w-2xl text-center text-3xl font-bold tracking-tight text-white sm:text-4xl">SaferDOT Solutions Newsletter
            </h2>

            <p class="mx-auto mt-2 max-w-xl text-center text-lg leading-8 text-gray-300">
                Join our mailing list today to get important industry updates and valuable information.
            </p>

            <form id="myForm" class="mx-auto mt-10 flex max-w-md gap-x-4" action="{{ route('email.store') }}" method="post">
                @csrf

                <label for="email-address" class="sr-only">Company</label>
                <input id="company" name="company" type="text" autocomplete="email" required="" class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6" placeholder="Name/ Company">

                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required="" class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-white sm:text-sm sm:leading-6" placeholder="Your Email">

                <button type="submit" class="flex-none rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Subscribe</button>
            </form>

            <svg viewBox="0 0 1024 1024" class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-x-1/2" aria-hidden="true">
                <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7">
                </circle>
                <defs>
                    <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(512 512) rotate(90) scale(512)">
                        <stop stop-color="#7775D6"></stop>
                        <stop offset="1" stop-color="#7ED321" stop-opacity="0"></stop>
                    </radialGradient>
                </defs>
            </svg>
            <p class="mx-auto mt-2 max-w-3xl text-center text-xs leading-4 text-gray-300">
                By submitting this form, you and your company give consent to receive marketing emails from SaferDOT Solutions,
                www.saferdotsolutions.com. This consent to receive these emails may be revoked at any time by unsubscribe link found at the
                bottom of every email. Emails are sent and managed by SaferDOT Solutions, LLC.
            </p>
        </div>
    </div>

    <div class="overlay overlay-slidedown">
        <i class="fas fa-times close-button"></i>
        <nav>
            <ul>
                <li><a href="{{ URL::route('home') }}">Home</a></li>
                <!-- <li><a href="{{ URL::route('about-us') }}">Partners</a></li> -->
                <li><a href="{{ URL::route('services') }}">Services</a></li>
                <li><a href="{{ URL::route('recruiting') }}">Recruiting</a></li>
                <li><a href="{{ URL::route('about-us') }}">About us</a></li>
                <li><a href="{{ URL::route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <script src="{{ asset('js/vegas.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/lity.js') }}" defer></script>
    <script src="{{ asset('js/carousel.js') }}" defer></script>
    <script src="{{ secure_asset('js/aos.js') }}" defer></script>
    <script src="{{ secure_asset('js/vegas.min.js') }}" defer></script>
    <script src="{{ secure_asset('js/main.js') }}" defer></script>
    <script src="{{ secure_asset('js/lity.js') }}" defer></script>
    <script src="{{ secure_asset('js/carousel.js') }}" defer></script>
    <script src="{{ secure_asset('js/mobile-menu.js') }}" defer></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://kit.fontawesome.com/5abe40685b.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/mobile-menu.js') }}" defer></script>
    <!-- <script src="{{ secure_asset('js/mobile-menu.js') }}" defer></script> -->
</body>

</html>
