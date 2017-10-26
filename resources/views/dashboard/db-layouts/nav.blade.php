


<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('NewLife Magazine ', 'NewLife Magazine') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
         @if(Auth::user())
            <ul class="nav navbar-nav">
                    <li class="active"><a href="/dashboard">Dashboard</a></li>
                    <li><a href="{{route('articles.index')}}">Articles</a></li>
                    <li><a href="{{route('categories.index')}}">Categories</a></li>
                <li><a href="/dashboard/contacts">Contacts</a></li>

            </ul>
           @endif
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else

                           <li><a href="#">Welcome {{ Auth::user()->name }}</a>  </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                @endif
            </ul>
        </div>
    </div>
</nav>



<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>@yield('title')</small></h1>
            </div>

            <div class="col-md-2">
                @if(Auth::user())

                <div class="dropdown create">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Create Content
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{route('categories.index')}}">Add Category</a></li>
                        <li><a href="{{route('articles.create')}}">Add Article</a></li>
                        <li><a href="{{route('tags.index')}}">Add Tag</a> </li>
                        <li><a href="">Update Profile </a></li>
                    </ul>
                </div>
                    @endif
            </div>
        </div>
    </div>
</header>
@if(Auth::user())


<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="active">Dashboard : @yield('title')</li>
        </ol>
    </div>
</section>

@endif
