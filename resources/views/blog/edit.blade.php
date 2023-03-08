@extends('master')
@section('title')
    Edit Blog
@endsection
@section('body')
    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card bg-secondary-subtle p-4 border-0 shadow shadow-lg rounded-2">
                        <h3 class="text-center">Edit Blog</h3>
                        <div class="card-body">
                            <form action="{{route('blog.create-blog')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <input type="text" class="form-control" name="title" placeholder="Enter Blog Title" id="">
                                </div>
                                <div class="row mb-3">
                                    <textarea name="description" id="" placeholder="Enter Description" rows="7"></textarea>
                                </div>
                                <div class="row mb-3">
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <div class="row mb-3">
                                    <input type="submit" class="btn btn-primary text-white fw-bolder" value="Register">
                                </div>
                            </form>
                        </div>
                        <span class="text-center text-success fw-bold">{{session("message")}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



