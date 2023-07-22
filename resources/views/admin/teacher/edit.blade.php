@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Teacher Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Teacher</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Teacher</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Teacher Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted"></p>
                    <p class="text-center text-danger">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('teacher.update',$teacher->id)}}" method="POST" enctype="multipart/form-data">
                       @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Department Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id" required>
                                    <option value="" disabled selected>--select Teacher Department--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$teacher->category_id==$category->id ?'selected':''}} >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Full Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$teacher->name}}" id="name" placeholder="Full Name" type="text" name="name" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Email Address</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" value="{{$teacher->email}}" placeholder="Teacher Email" type="text" name="email" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Password</label>
                            <div class="col-md-9">
                                <input class="form-control" id="password" placeholder="Password" type="text" name="password" >
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Mobile Number</label>
                            <div class="col-md-9">
                                <input class="form-control" id="mobile" value="{{$teacher->mobile}}" placeholder="Mobile Number" type="number" name="mobile" />
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="image" placeholder="Image" type="file" name="image" />
                                <img src="{{asset($teacher->image)}}" alt="" height="100" width="120">
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Update Teacher</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
@endsection
