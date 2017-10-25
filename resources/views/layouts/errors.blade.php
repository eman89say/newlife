@if(count($errors)>0)
    <div class="col-md-8">

        <div class="alert alert-danger" role="alert">
            <strong> Errors : </strong>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif