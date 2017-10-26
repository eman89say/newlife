@extends('layouts.master')


@section('title',  '| '.$article->title)



@section('content')

<!-- Article Section -->

<div class="col-md-8" xmlns="http://www.w3.org/1999/html">
                <article id="main-col">
                    <h4> <strong> Articles >> </strong><a href="{{route('articles.cat',$article->category->name)}}">{{$article->category->name}}</a> </h4>
                    <h1 class="page-title">{{$article->title}}</h1>
                    <h5><strong>By {{$article->user->name}} |</strong> {{ date('M j,Y h:ia', strtotime($article->created_at))}} </h5>


                    <img style="width:90%" src="/storage/cover_images/{{$article->cover_image}}"><br><br>
                    <p>{{$article->body}}</p>


                     <br>
                    <h4><strong>Article Tags : </strong></h4>
                    @if(count($article->tags))
                        <ul>
                            @foreach($article->tags as $tag)
                                <a href="/articles/tags/{{$tag->name}}" class="label label-default">{{$tag->name}}</a>
                            @endforeach
                        </ul>
                    @endif
                </article>

                <hr>
                   <h3>Comments :  </h3>
                   <ul class="list-group">
                    @foreach($article->comments as $comment)
                        @if($comment->approved=='1')
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}} : &nbsp;
                        </strong>
                        {{$comment->body}}
                    </li>
                           @endif
                    @endforeach
                   </ul>

                <hr>
                {{--!Add a comment--}}

                <div class="card">

                            <div class="card-block">
                                <form method="POST" action="/articles/{{$article->id}}/comments">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <textarea name="body" class="form-group" style="width:100%" placeholder="Leave comment here" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Add Comment</button>
                                    </div>
                                </form>

                            </div>

                </div>
            </div>



@endsection