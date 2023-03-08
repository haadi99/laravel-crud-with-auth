@extends('master')
@section('title')
    Log In
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card p-4 border-0 shadow shadow-lg rounded-2">
                        <h3 class="text-center">Log In Form</h3>
                        <span class="text-center text-danger fw-bolder">{{session("message")}}</span>
                        <div class="card-body">
                            <form action="{{route("log")}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" id="">
                                </div>
                                <div class="row mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" id="">
                                </div>
                                <div class="row mb-3">
                                    <input type="submit" class="btn btn-primary text-white fw-bolder" value="Log In">
                                </div>
                                <div class="row mb-3 text-center">
                                    <a href="">Forget Password?</a>
                                </div>
                                <hr class="w-75 mx-auto">
                                <div class="row mb-3">
                                    <a class="btn btn-success col-md-6 mx-auto" href="{{route('register')}}">Create Account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
