@extends('dashboard.db-layouts.main')


@section('title', '  View Contact')

@section('content')
    <div class="col-md-9">
        <div class="row">
                <h4><strong>From : </strong> {{$contact->name}}</h4>
                <h4><strong>Email : </strong>{{$contact->email}}</h4>
                <p><strong>Message : </strong> {{$contact->message}}</p>
                <hr>



                            <a href="{{route('dash.contact')}}" class="btn btn-default"><< See All Contacts</a>

        </div>

    </div>
@endsection

