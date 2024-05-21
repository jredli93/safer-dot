<section class="header-careers">
   @include('utils.menu')
   @if (session('success'))
        <div class="alert success-alert">
            <h3 class="alert-text"> {{ session('success') }}</h3>
            <a class="close">&times;</a>
        </div>
    @endif
    <h1 class="careers-title">careers</h1>
</section>