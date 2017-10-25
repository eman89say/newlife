@extends('layouts.master')


@section('title', ' | Articles of ')



@section('content')

    <div class="col-md-8">
        <article id="main-col">
            <h4> <strong> All Articles </strong> </h4>

            @foreach ($articles as $article )
                <div class="thumbnail">
                    <div class="big-thumb">

                                <div class="caption">
                                    <a href="{{route('articles.article',[$article->category->name,$article->slug])}}"><h4>{{$article->title}}</h4></a>
                                    <h5><span class="bld">By {{$article->user->name}}|</span> {{ date('M j,Y h:ia', strtotime($article->created_at))}}</h5>
                                    <p>{{substr($article->body,0,100)}}{{strlen($article->body)>100 ? "...": " "}}</p>

                                    <p><a href="{{route('articles.article',[$article->category->name,$article->slug])}}" class="btn btn-primary" role="button">Read More</a></p>
                                </div>
                        </div>
                    </div>
            @endforeach
        </article>
    </div>


    </div>

@endsection