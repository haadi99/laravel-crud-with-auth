@extends('master')
@section('title')
    Mange Blog
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Manage Blog</h3>
                    <table class="table table-striped table-bordered border-primary table-hover">
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$blog['id']}}</td>
                                <td>{{$blog['title']}}</td>
                                <td>{{$blog['description']}}</td>
                                <td>{{$blog['image']}}</td>
                                <td class="text-center">
                                    <a href="" class="fw-bolder btn btn-success me-2">Edit</a>
                                    <a href="" class="fw-bolder btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
