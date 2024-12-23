<ul class="navigation-list">
    <li class="navigation-item"><a href="{{ URL::route('home') }}"><img class="navigation-item-logo" src="{{asset('/assets/images/safer-logo.png')}}" alt="logo" /></a></li>
    <li class="navigation-item"><a href="{{ URL::route('home') }}">Home</a></li>
    <!-- <li class="navigation-item"><a href="{{ URL::route('about-us') }}">Partners</a></li> -->
    <li class="navigation-item"><a href="{{ URL::route('services') }}">Services</a></li>
    <li class="navigation-item"><a href="{{ URL::route('recruiting') }}">Recruiting</a></li>
    <li class="navigation-item"><a href="{{ URL::route('about-us') }}">About Us</a></li>
    <li class="navigation-item"><a href="{{ URL::route('contact') }}">Contact</a></li>
</ul>
<div class="navigation-mobile" id="navigation-mobile">
    <a href="{{ URL::route('home') }}"><img class="navigation-mobile-logo" src="{{asset('/assets/images/safer-logo.png')}}" alt="logo" /></a>
    <span class="navigation-hamburger z-50"><i class="fas fa-bars text-slate-800 nav-white" id="navigation-bars" area-hidden=" true"></i></span>
</div>
