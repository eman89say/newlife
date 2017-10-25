@extends('dashboard.db-layouts.main')

@section('title', '  Articles Tags')

@section('content')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Tags</h2>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Number of Articles</th>
                            </tr>

                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>
                                        {{count($tag->articles)}}
                                    </td>

                                </tr>
                            @endforeach

                        </table>
                    </div>

                    <div class="col-md-4">
                        <div class="well">
                            <form method="POST" action="/dashboard/tags">
                                {{ csrf_field() }}
                                <h2>New Tag</h2>
                                <div class="form-group">
                                    <label for="name"> Name</label>
                                    <input type="text" class="form-control" placeholder=" Tag name" name="name" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block btn-h1-spacing">Create New Tag</button>



                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection