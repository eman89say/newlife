@extends('layouts.welcome')

@section('title', ' | HomePage')

@section('content')

    @if(Session::has('success'))
        <div class="col-mocol-md-7">

            <div class="alert alert-success" role="alert">
                <strong>Success: </strong> {{Session::get('success')}}
            </div>
        </div>
    @endif

    <!---SHOWCASE -->
<section class="showcase">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div id="carousel-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/1.jpeg" alt="...">
                            <div class="carousel-caption">
                                <h3>Support the photographer!</h3>
                                <p>Do you like this and the other pictures of this photographer? Then support Porapak with a few dollars.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/2.jpeg" alt="...">
                            <div class="carousel-caption">
                                <h3>Support the photographer!</h3>
                                <p>Do you like this and the other pictures of this photographer? Then support Porapak with a few dollars.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/3.jpeg" alt="...">
                            <div class="carousel-caption">
                                <h3>Support the photographer!</h3>
                                <p>Do you like this and the other pictures of this photographer? Then support Porapak with a few dollars.</p>
                            </div>
                        </div>


                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div> <!-- Carousel -->
            </div>


            <!--Left side showcase -->

            <div class="col-md-5">
                <div class="well well-lg report-box">
                    <h2>Live Better for Less, Overseas</h2>
                    <p>Each day we uncover some of the most desirable-and cheapest-retirement havens on earth. Sign up for our free daily Postcard e-letter and we’ll immediately send you a free research report to help you find your perfect place to live better, for less, overseas.</p>
                    <form>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
                            <input type="text" class="form-control" placeholder="Your Email Address">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg">GET My Free REPORT</button>
                    </form>
                </div>

                <div class="well social">
                    <div class="row">
                        <div class="col-sm-4"><h3>Follow Us</h3></div>
                        <div class="col-sm-8">
                            <ul class="navbar-nav nav ">
                                <li><a href="http://twitter.com"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://facebook.com"><i class="fa fa-facebook"> </i></a></li>
                                <li><a href="http://google-plus.com"> <i class="fa fa-google-plus"></i></a></li>
                                <li><a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="http://instagram.com"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- end Left side showcase -->
        </div>         <!---end row -->
    </div>         <!---end contianer -->
</section>        <!---end SHOWCASE -->


<!---section a -->
<section class="section-a">
    <div class="contianer">
        <div class="row">
            <div class="col-md-3">
                <hr>
                <h3><span class="upper">LATEST Articles </span></h3>

            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="big-thumb">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="img/thumb1.jpg" alt="...">
                            </div>
                            <div class="col-sm-7">
                                <div class="caption">
                                    <a href=""><h3>Bull Riding And A Mountain Roast</h3></a>
                                    <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                                    <p>Almost as soon as my wife Suzan and I moved to the little craft village in Ecuador’s northern Andes Mountains that we now call home.</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
                            <img src="img/thumb1.jpg" alt="...">
                            <div class="caption">
                                <a href=""><h3>Discover The Turquoise Gem Of Mexico’s </h3></a>
                                <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                                <p>Almost as soon as my wife Suzan and I moved to the little craft village in Ecuador’s northern Andes Mountains that we now call home, we learned about potatoes.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="thumbnail">
                            <img src="img/thumb1.jpg" alt="...">
                            <div class="caption">
                                <a href=""><h3>Discover The Turquoise Gem Of Mexico’s </h3></a>
                                <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                                <p>Almost as soon as my wife Suzan and I moved to the little craft village in Ecuador’s northern Andes Mountains that we now call home, we learned about potatoes.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 ">
                <div class="thumbnail">
                    <img src="img/thumb1.jpg" alt="...">
                    <div class="caption">
                        <a href=""><h3>Discover The Turquoise Gem Of Mexico’s </h3></a>
                        <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                        <p>How would you like to have a chance to own a 7-acre Scottish island estate? </p>
                        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                    </div>
                </div>

                <div class="thumbnail">
                    <div class="caption">
                        <a href=""><h3>Discover The Turquoise Gem Of Mexico’s </h3></a>
                        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                    </div>
                </div>

                <div class="thumbnail">
                    <div class="caption">
                        <a href=""><h3>Discover The Turquoise Gem Of Mexico’s</h3></a>
                        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                    </div>
                </div>



            </div>

        </div> <!--end row section a-->
    </div> <!---end container section a-->
</section><!---end section a -->

<!---section b -->
<section class="section-b">
    <div class="contianer">
        <div class="row">
            <div class="col-md-3">
                <hr>
                <h3><span class="upper">SAMPLE ARTICLES </span><br/><span class="itlic">from the magazine</span></h3>

            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <div class="big-thumb">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="img/thumb1.jpg" alt="...">
                            </div>
                            <div class="col-sm-7">
                                <div class="caption">
                                    <a href=""><h3>Bull Riding And A Mountain Roast</h3></a>
                                    <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                                    <p>Almost as soon as my wife Suzan and I moved to the little craft village in Ecuador’s northern Andes Mountains that we now call home.</p>
                                    <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="thumbnail">
                            <img src="img/thumb1.jpg" alt="...">
                            <div class="caption">
                                <a href=""><h3>Discover The Turquoise Gem Of Mexico’s </h3></a>
                                <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                                <p>Almost as soon as my wife Suzan and I moved to the little craft village in Ecuador’s northern Andes Mountains that we now call home, we learned about potatoes.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="thumbnail">
                            <img src="img/thumb1.jpg" alt="...">
                            <div class="caption">
                                <a href=""><h3>Discover The Turquoise Gem Of Mexico’s </h3></a>
                                <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                                <p>Almost as soon as my wife Suzan and I moved to the little craft village in Ecuador’s northern Andes Mountains that we now call home, we learned about potatoes.</p>
                                <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="img/thumb1.jpg" alt="...">
                    <div class="caption">
                        <a href=""><h3>Discover The Turquoise Gem Of Mexico’s </h3></a>
                        <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                        <p>How would you like to have a chance to own a 7-acre Scottish island estate? </p>
                        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                    </div>
                </div>

                <div class="thumbnail">
                    <div class="caption">
                        <a href=""><h3>Discover The Turquoise Gem Of Mexico’s </h3></a>
                        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                    </div>
                </div>

                <div class="thumbnail">
                    <div class="caption">
                        <a href=""><h3>Discover The Turquoise Gem Of Mexico’s</h3></a>
                        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                    </div>
                </div>



            </div>

        </div> <!--end row section b-->
    </div> <!---end container section b-->
</section><!---end section b -->


<!---section c -->
<section class="section-c">
    <div class="contianer">
        <div class="row">
            <div class="col-md-12 cat-head">
                <h1>Read In Our Magazine</h1>
                <p>We provide you thousands of articles in different fields, you can read about the world, business, new technology and science, culture, sport and finaly healthcare, hope you enjoy reading. </p>
                <hr/>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 boxes cat-box1">
                <a><i class="fa fa-globe"></i><br/>World</a>
            </div>

            <div class="col-md-2 boxes cat-box2">
                <a><i class="fa fa-building"></i><br/>Business</a>
            </div>

            <div class="col-md-2 boxes cat-box3">
                <a><i class="fa fa-laptop"></i><br/>Technology and Science</a>
            </div>

            <div class="col-md-2 boxes cat-box4">
                <a><i class="fa fa-globe"></i><br/>Culture</a>
            </div>

            <div class="col-md-2 boxes cat-box5">
                <a><i class="fa fa-trophy  "></i><br/>Sport</a>
            </div>

            <div class="col-md-2 boxes cat-box6">
                <a><i class="fa fa-medkit"></i><br/>Health</a>
            </div>

        </div>
    </div>
</section><!---end section c -->


<!---section d -->
<section class="section-d">
    <div class="contianer">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <h3><span class="upper">ASK THE EXPERTS </span></h3>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="thumbnail">
                        <div class="big-thumb">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="img/thumb1.jpg" alt="...">
                                </div>
                                <div class="col-sm-7">
                                    <div class="caption">
                                        <a href=""><h3>Bull Riding And A Mountain Roast</h3></a>
                                        <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                                        <p>Almost as soon as my wife Suzan and I moved to the little craft village in Ecuador’s northern Andes Mountains that we now call home.</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="thumbnail">
                        <div class="big-thumb">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="img/thumb1.jpg" alt="...">
                                </div>
                                <div class="col-sm-7">
                                    <div class="caption">
                                        <a href=""><h3>Bull Riding And A Mountain Roast</h3></a>
                                        <h5><span class="bld">By International Living |</span> January 13, 2017</h5>
                                        <p>Almost as soon as my wife Suzan and I moved to the little craft village in Ecuador’s northern Andes Mountains that we now call home.</p>
                                        <p><a href="#" class="btn btn-primary" role="button">Read More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-6">
                    <div class="adv">
                        <img src="img/ad1.jpg">
                        <a class="link btn btn-default" href="https:facebook.com">Facebook</a>
                    </div>
                    <div class="adv">
                        <img src="img/ad1.jpg">
                        <a class="link btn btn-primary" href="https://google.com">Go to google</a>
                    </div>
                </div>



            </div> <!--end row section d-->
        </div> <!---end container section d-->
</section><!---end section d -->


@endsection

@section('scripts')


    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

@endsection