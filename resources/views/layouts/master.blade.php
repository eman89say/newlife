<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
</head>
<body>
    @include('layouts.nav')

    <div class="container">
        <div class="row">
            <div class="subpage">
                @include('layouts.errors')

            @yield('content')

           @include('layouts.sidebar')

            </div> <!-- end subpage --->
        </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layouts.footer')

    @yield('scripts')


</body>
</html>