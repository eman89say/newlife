@extends('dashboard.db-layouts.main')



@section('title', '  All Advertizements')

@section('content')
    <div class="col-md-9">
        <!-- Website Overview -->
        <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">Advertizements</h3>
                        <h3>New Adv.</h3>

                        <form method="POST" action="/dashboard/adv" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input type="text" class="form-control" placeholder=" Title" name="title" value="{{ old('title') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="link"> link</label>
                                <input type="text" class="form-control" placeholder=" link" name="link" value="{{ old('link') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="adv_image"> Image</label>
                                <input type="file" name="adv_image">
                            </div>

                            <div class="form-group">
                                <label for="choosed"> Selected : </label>
                                <input type="checkbox" name="choosed" >
                            </div>

                            <button type="submit" class="btn btn-primary">Save changes</button>

                        </form>
                    </div>


                </div>
            </div>
            <div class="panel-body">

                <table class="table table-striped table-hover">
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>link</th>
                        <th>Selected</th>
                        <th></th>

                    @foreach($advs as $adv)
                        <tr>
                            <td>{{substr($adv->title,0,70)}}{{strlen($adv->title)>70 ? "...": " "}}</td>
                            <td>
                                <img style="width:50%" src="/storage/advImages/{{$adv->adv_image}}"><br/>
                            </td>
                            <td><a href=" {{$adv->link}}"> {{$adv->link}}</a></td>
                            <td>
                                @if($adv->choosed =='1')
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                @else
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                @endif
                            </td>
                            <td>
                                <form method="POST" action="/dashboard/adv/{{$adv->id}}/choose" >
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <div class="form-group">

                                        <button type="submit" class="btn btn-primary">
                                            {{($adv->choosed) ? 'unChoose': 'Choose'}}
                                        </button>
                                    </div>
                                </form>


                                <form method="POST" action="/dashboard/adv/{{$adv->id}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger btn-block">Delete </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach

                </table>

                <div class="text-center">
                    {{$advs->links()}}
                </div>
            </div>
        </div>

    </div>

@endsection