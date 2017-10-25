@extends('dashboard.db-layouts.main')



@section('title', '  Contacts')

@section('content')
    <div class="col-md-9">
        <!-- Website Overview -->
        <div class="panel panel-default">
            <div class="panel-heading main-color-bg">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">Contacts</h3>
                    </div>

                </div>
            </div>
            <div class="panel-body">

                <table class="table table-striped table-hover">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Sent At</th>
                        <th></th>
                    </tr>

                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{substr($contact->message,0,70)}}{{strlen($contact->message)>70 ? "...": " "}}</td>
                            <td>{{ date('M j,Y', strtotime($contact->created_at))}}</td>
                            <td><a class="btn btn-default" href="{{route('dash.singelContact',$contact->id)}}">View Message</a></td>
                        </tr>
                    @endforeach

                </table>

                <div class="text-center">
                    {{$contacts->links()}}
                </div>
            </div>
        </div>

    </div>

@endsection