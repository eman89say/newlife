@extends('layouts.master')


@section('title', ' | Contact Us ')



@section('content')
    <div class="col-md-8">
        <article id="main-col">
            <h4> <strong> Contact Us  </strong> </h4>


                    <h2><span class="primary-text">Get</span> In Touch</h2>
                    <p>Please use this form to contact us</p>
                    <form method="post" action="/contact">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label><br>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label><br>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label><br>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="button" class="btn btn-success btn-block btn-lg">Submit</button>
                    </form>

        </article>
    </div>



@endsection