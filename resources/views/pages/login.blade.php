@extends('layout.layout')
@section('contant')
    <div class="container">
        <form class="form-horizontal" role="form" method="post" action="{{route('userlogin')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <h2>Login Form</h2>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </div>
        </form> <!-- /form -->
    </div> <!-- ./container -->
@endsection