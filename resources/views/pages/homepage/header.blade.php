<section id="header" class="header">
    @include('utils.menu')
    @if (session('success'))
    <div class="alert success-alert">
        <h3 class="alert-text"> {{ session('success') }}</h3>
        <a class="close">&times;</a>
    </div>
    @endif
    <div class="cta">
        <h1 class="cta-heading">Truck Permit Licensing & Consulting Services</h1>
        <h1 class="cta-subheading text-9xl">Navigate the Complex Freight Industry with a Partner Who Handles Your Registrations, Fuel Taxes, Permits, and Safety With Ease</h1>
        <div class="btn-wrap">
            <a href="{{ route('recruiting') }}" class="transition-colors duration-300 ease-in-ou hover:no-underline hover:bg-white font-semibold hover:text-slate-900 py-4 px-6 border-2 border-white rounded-lg">
                Start your trucking company now
            </a>
        </div>
    </div>
    <div class="container">
        <div class="field">
            <!-- <div class="mouse"></div>
            <div class="scroll"></div> -->
            <a href="#cta-content">
                <div class="arrow"></div>
            </a>
        </div>
    </div>
    <!-- <a href="#cta-content" class="scroll">
        <div class="box">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </a> -->
</section>
