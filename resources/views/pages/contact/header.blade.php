<section class="header-contact">
    @include('utils.menu')
    @if (session('success'))
    <div class="alert success-alert">
        <h3 class="alert-text"> {{ session('success') }}</h3>
        <a class="close">&times;</a>
    </div>
    @endif
</section>
