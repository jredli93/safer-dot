<section id="header" class="header">
    @include('utils.menu')
    @if (session('success'))
        <div class="alert success-alert">
            <h3 class="alert-text"> {{ session('success') }}</h3>
            <a class="close">&times;</a>
        </div>
    @endif
    <div class="cta">
        <h1 class="cta-heading">WEST IS THE BEST</h1>
        <h1 class="cta-subheading">Welcome to West Express</h1>
        <div class="btn-wrap">
            <a href="{{ route('services') }}" class="btn btn--gradient btn--xlrg">
                <span class="btn__text">Services</span>
            </a>
            <a href="{{ route('contact') }}" class="btn btn--xlrg btn-transparent">
                <span class="btn__text">Contact us</span>
            </a>
        </div>
    </div>
    <a href="#cta-content" class="scroll">
        <div class="box">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a>    
</section>