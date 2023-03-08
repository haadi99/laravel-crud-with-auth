@extends('master')
@section('title')
    Log In
@endsection
@section('body')
    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card bg-secondary-subtle p-4 border-0 shadow shadow-lg rounded-2">
                        <h3 class="text-center">Register Form</h3>
                        <div class="card-body">
                            <form action="{{route("create-user")}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" id="">
                                </div>
                                <div class="row mb-3">
                                    <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" id="">
                                </div>
                                <div class="row mb-3">
                                    <input type="email" class="form-control" name="email" placeholder="Enter Email" id="">
                                </div>
                                <div class="row mb-3">
                                    <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth" id="">
                                </div>
                                <div class="row mb-3">
                                    <input type="number" class="form-control" name="phone" placeholder="Phone  " id="">
                                </div>
                                <div class="row mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" id="">
                                </div>
                                <div class="row mb-3">
                                    <input type="submit" class="btn btn-primary text-white fw-bolder" value="Register">
                                </div>
                            </form>
                        </div>
                        <span class="text-center text-success fw-bold">{{session('message')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

