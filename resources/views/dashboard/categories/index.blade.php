@extends('dashboard.db-layouts.main')

@section('title', '  Articles Categories')

@section('content')
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Categories</h2>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Number of Articles</th>
                                <th></th>
                            </tr>

                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        {{count($category->articles)}}
                                    </td>
                                    <td>
                                        <a class="btn btn-default" href="{{route('category.articles',$category->id)}}">View Articles</a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div>

                    <div class="col-md-4">
                        <div class="well">
                        <form method="POST" action="/dashboard/categories">
                            {{ csrf_field() }}
                             <h2>New Category</h2>
                                <div class="form-group">
                                    <label for="name"> Name</label>
                                    <input type="text" class="form-control" placeholder=" Category name" name="name" required>
                                </div>

                            <button type="submit" class="btn btn-primary btn-block btn-h1-spacing">Create New Category</button>



                    </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection