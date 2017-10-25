@extends('dashboard.db-layouts.main')

@section('stylesheets')
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <link href="../../../css/style.css" rel="stylesheet">

@endsection

@section('title', '  All Articles of : '. $category->name)

@section('content')
    <div class="col-md-9">
        <!-- Website Overview -->
        <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">Articles</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('articles.create')}}" class="btn btn-default">New Article</a>
                    </div>

                </div>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text" placeholder="Filter Articles...">
                    </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>Title</th>
                        <th>Published</th>
                        <th>Created At</th>
                        <th></th>
                    </tr>

                    @foreach($articles as $article)
                        <tr>
                            <td>{{substr($article->title,0,70)}}{{strlen($article->title)>70 ? "...": " "}}</td>
                            <td>
                                @if($article->published =='1')
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                @else
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                @endif

                            </td>
                            <td>{{ date('M j,Y', strtotime($article->created_at))}}</td>
                            <td><a class="btn btn-default" href="{{route('articles.show',$article)}}">View</a>
                                @if(Auth()->user()->id == $article->user_id)
                                    <a class="btn btn-primary" href="{{route('articles.edit',$article->id)}}">Edit</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                </table>

                <div class="text-center">
                    {{$articles->links()}}
                </div>
            </div>
        </div>

    </div>

@endsection