
<!---Header -->
<header>
    <div class="page-header">
        <h1>NewLife<span class="orange"> Magazine</span></h1>
    </div>
</header>

<!---navbar -->

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed"
                    type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav nav">
                <li class="active"><a  href="{{route('home')}}"><i class="fa fa-home"></i></a></li>

                @foreach($categories as $category)
                    <li>
                        <a href="{{route('articles.cat',$category)}}">
                            {{$category}}
                        </a>
                    </li>
                @endforeach
            </ul>


        </div>
    </div>
</nav>