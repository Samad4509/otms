@extends('admin.master')


@section('body')
    @extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Form Layouts</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Teacher Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted"></p>
                    <p class="text-center text-danger">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('add-teacher')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Category Id</label>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Teacer Category" type="text" name="teacher_category" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Name</label>
                            <div class="col-md-9">
                                <input class="form-control"  placeholder="Teacher Name" type="text" name="teacher_name" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Email" type="text" name="teacher_email" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Password</label>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Password" type="text" name="teacher_password" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Mobile</label>
                            <div class="col-md-9">
                                <input class="form-control" placeholder="Mobile" type="text" name="teacher_mobile" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="" class="col-md-3 form-label">Address</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  placeholder="category Description" type="text" name="description"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Create New Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
@endsection

@endsection
