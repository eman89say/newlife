<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('dashboard.db-layouts.header')
</head>
<body>

@include('dashboard.db-layouts.nav')

<section id="main">
    <div class="container">
        <div class="row">


            @include('dashboard.db-layouts.messages')

            @yield('content')



        </div>
    </div>
</section>
@include('dashboard.db-layouts.footer')
@include('dashboard.db-layouts.javascripts')

@yield('scripts')

</body>
</html>
