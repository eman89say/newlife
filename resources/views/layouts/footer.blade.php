
<!-- magazine detail -->
<section class="magazine">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <hr>
                <h3>Magazine Info</h3>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                    <li><a href="contact.html">Privacy Policy </a></li>

                </ul>
            </div>

            <div class="col-md-4">
                <hr>
                <h3> Categories</h3>
                <ul>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{route('articles.cat',$category)}}">
                                {{$category}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">

                <div class="row">
                    <div class="col-sm-12">
                        <h4>SIGN UP FOR OUR FREE DAILY REPORT </h4>
                        <form>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                                <input type="text" class="form-control" placeholder="Your Email Address">
                            </div>
                            <button type="Submit" name="button" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div></div>

                <div class="row">
                    <div class="col-sm-12">
                        <ul class="navbar-nav nav social-down ">
                            <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://facebook.com"><i class="fa fa-facebook"> </i></a></li>
                            <li><a href="http://google-plus.com"> <i class="fa fa-google-plus"></i></a></li>
                            <li><a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="http://instagram.com"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div></div>

            </div>


        </div>
    </div>
</section>



<section class="tags">
    <div class="container">
    <div class="row">
        <div class="col-md-2">
            <hr>
            <h3>Tags</h3>
        </div>
        <div class="col-md-10">
            <br>

            <ul class="navbar-nav nav">
            @foreach($tags as $tag)
                <li>
                    <a href="/articles/tags/{{$tag}}">
                        {{$tag}}
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
    </div>

        <div class="row">
            <div class="col-md-2">
                <hr>
                <h3>Archives</h3>
            </div>
            <div class="col-md-10">
                <br>

                <ul class="navbar-nav nav">
                @foreach($archives as $stats)
                    <li>
                        <a href="{{route('articles.all',"month=$stats[month]&year=$stats[year]")}}">
                            {{$stats['month']. ' '. $stats['year']}}
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
        </div>
    </div>
</section>


<!--         FOOTER
 -->    <footer class="main-footer">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <p>Copyright &copy; 2017 | Eman Sayma</p>
            </div>
        </div>
    </div>
</footer>
