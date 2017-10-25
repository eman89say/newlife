@extends('dashboard.db-layouts.main')


@section('title', '  View Article')

@section('content')

    <div class="col-md-9">
        <div class="row">
            <div class="col-sm-8">
                <h2>{{$article->title}}</h2>
                <h5>By : <strong>{{$article->user->name}}</strong></h5>
                        <img style="width:100%" src="/storage/cover_images/{{$article->cover_image}}"><br/><br/>
                <p>{{$article->body}}</p>
                <hr>


                <div class="row">
                <h4><strong>Article Tags : </strong></h4>
                @if(count($article->tags))
                    <ul>
                        @foreach($article->tags as $tag)
                            <span class="label label-default">{{$tag->name}}</span>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="row">
                   <h4><strong>Visitors Comments : </strong>{{count($article->comments)}} comments</h4>
                    <div class="thumbnail">
                        @if(count($article->comments)>0)
                        @foreach($article->comments as $comment)
                            <li class="list-group-item">
                                <strong>
                                    {{$comment->created_at->diffForHumans()}} : &nbsp;
                                </strong>
                                {{$comment->body}}

                                @if(Auth()->user()->id == $article->user_id)
                                <hr>

                                    <form method="POST" action="/dashboard/articles/{{$article->id}}/comments/{{$comment->id}}/approve" >
                                        {{csrf_field()}}
                                        {{method_field('PUT')}}
                                        <div class="form-group">

                                            <button type="submit" class="btn btn-primary">
                                                {{($comment->approved) ? 'unApprove': 'Approve'}}
                                            </button>
                                        </div>
                                    </form>
                                @endif
                            </li>
                        @endforeach
                        @else
                            <h5>No Comments Yet</h5>
                        @endif
                    </div>
                </div>

            </div>


            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <label>URL :</label>

                        @if($article->published == '1' )
                            <p><a href="{{route('articles.article',[$article->category->name,$article->slug])}}">
                                    {{route('articles.article',[$article->category->name,$article->slug])}} </a></p>
                            @if(Auth()->user()->id == $article->user_id)

                                <form method="POST" action="{{route('articles.unPublish',$article->id)}}" >
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">UN PUBLISH NOW </button>
                                    </div>
                                </form>
                            @endif
                       @else
                        <p><strong>Article not published yet</strong><br>  </p>
                            @if(Auth()->user()->id == $article->user_id)

                            <form method="POST" action="{{route('articles.publish',$article->id)}}" >
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">PUBLISH NOW </button>
                            </div>
                        </form>
                               @endif
                            @endif
                    </dl>


                    <dl class="dl-horizontal">
                        <label>Category :</label>
                        <p>{{$article->category->name}}</p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Created at :</label>
                        <p>{{ date('M j,Y h:ia', strtotime($article->created_at))}} </p>
                    </dl>

                    <dl class="dl-horizontal">
                        <label>Last Updated :</label>
                        <p>{{ date('M j,Y h:ia', strtotime($article->updated_at))}} </p>
                    </dl>
                    <hr>

                    @if(Auth()->user()->id == $article->user_id)

                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('articles.edit',$article->id)}}" class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <div class="col-sm-6">
                            <form method="POST" action="/dashboard/articles/{{$article->id}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger btn-block">Delete </button>
                            </form>
                        </div>
                    </div>

                      <hr>


                    @endif

                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{route('articles.index')}}" class="btn btn-default btn-block"><< See All Articles</a>
                        </div>

                </div>
            </div>
        </div>
        </div>

    </div>
@endsection

@section('scripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>

@endsection