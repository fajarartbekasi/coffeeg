@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="" class="form-control" placeholder="E-mail........" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" name="" class="form-control" placeholder="**********" id="">
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <a href="http://" >Forgot Password ?</a>
                    </div>
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-primary">Log In</button>
                    </div>
                </div>
                <div class="card-header border-0">
                    <div class="d-flex justify-content-center" >
                        <img src="{{asset('logo/twitter_PNG3.png')}}"
                             alt=""
                             class=""
                             width="50"
                             height="50"
                             style="margin-top: -40px;"
                             >
                    </div>
                    <h4 class="text-muted text-center">
                        See what’s happening in the world right now
                    </h4>
                    <div class="pt-3">
                        <a href="http://" >Join Twitter Today.</a>
                    </div>
                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
