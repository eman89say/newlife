@extends('layouts.master')


@section('title', ' | '.$category->name)



@section('content')

    <div class="col-md-8">
        <article id="main-col">
            <h4> <strong> Articles >> </strong>{{$category->name}} </h4>

            @foreach ($articles as $article )
            <div class="thumbnail">
                <div class="big-thumb">
                    <div class="row">
                        <div class="col-sm-5">
                            <img style="height:100%" src="../../storage/cover_images/{{$article->cover_image}}">                        </div>
                        <div class="col-sm-7">
                            <div class="caption">
                                <a href="{{route('articles.article',[$article->category->name,$article->slug])}}"><h3>{{$article->title}}</h3></a>
                                <h5><span class="bld">By {{$article->user->name}}|</span> {{ date('M j,Y h:ia', strtotime($article->created_at))}}</h5>
                                <p>{{substr($article->body,0,100)}}{{strlen($article->body)>100 ? "...": " "}}</p>
                                <p><a href="{{route('articles.article',[$article->category->name,$article->slug])}}" class="btn btn-primary" role="button">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </article>

        <div class="text-center">
            {{$articles->links()}}
        </div>
    </div>

@endsection