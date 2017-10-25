@extends('dashboard.db-layouts.main')

@section('stylesheets')
    <link href="/css/select2.min.css" rel="stylesheet" />

@endsection
@section('title', '  Update Article')

@section('content')
    <div class="col-md-9">


        <form method="post" action="/dashboard/articles/{{$article->id}}" enctype="multipart/form-data">
           {{csrf_field()}}
            {{method_field('put')}}

            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Update Article</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="title"> Title</label>
                    <input type="text" class="form-control" placeholder=" Title" name="title" value="{{$article->title}}" required>
                </div>

                <div class="form-group">
                    <label for="slug"> Slug</label>
                    <input type="text" class="form-control" placeholder=" Slug" name="slug" value="{{$article->slug}}" required>
                </div>

                <div class="form-group">
                    <label for="category_id"> Category</label>
                    <select class="form-control" name="category_id" value="{{$article->category->name}}">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$article->category_id==$category->id ? 'selected': null}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags"> Tags </label>
                    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                                <option value="{{$tag->id}}" >{{$tag->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="body"> Body</label>
                    <textarea name="body" class="form-control" placeholder="Body" required>{{$article->body}}</textarea>
                </div>

                <div class="form-group">
                    <label for="cover_image">Cover Image</label>
                    <input type="file" name="cover_image">
                </div>




            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>

@endsection
@section('scripts')
    <script src="/js/select2.min.js"></script>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'body' );

        $('.select2-multi').select2();



    </script>

@endsection