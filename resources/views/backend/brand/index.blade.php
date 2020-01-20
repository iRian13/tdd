@extends('backend.layouts.app')

@section('pageName')
    <ol class="breadcrumb float-sm-right pull-right">
        <li class="breadcrumb-item"><a href="{{URL::to('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Brand</li>
    </ol>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-md-6 -->
                <div class="col-lg-8 offset-2">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6 text-left">
                                    <h5 class="m-0">Brand List</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{route('brand.create')}}" class="btn btn-sm btn-info">Add Brand</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr class="table-active">
                                            <th scope="col" class="text-center">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col" class="text-center">Logo</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $sl = 1;
                                        @endphp
                                        @forelse($brands as $brand)
                                        <tr>
                                            <th scope="row" class="text-center">{{$sl++}}</th>
                                            <td>{{$brand->name}}</td>
                                            <td class="text-center">
                                                <img src="{{asset('/').$brand->image}}" height="45" width="45">
                                            </td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="fas fa-edit text-white-50"></i>
                                                </button>
                                                <a class="btn btn-xs btn-danger"><i class="fas fa-trash-alt text-white-50"></i></a>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4"> No Brand to show</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->

            <!-- Edit Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label text-right">Name <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Brand Name" autocomplete="off" value="{{old('name')}}">
                                        <span style="color: red; font-size: 11px; font-style: italic">@error('name'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image" class="col-sm-2 col-form-label text-right">Image <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control-file" id="image" value="{{old('image')}}">
                                        <span style="color: red; font-size: 11px; font-style: italic">@error('image'){{$message}}@enderror</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-1 text-center mt-5">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Add Brand</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 text-right">
                                        <p style="color: red; font-size: 12px; font-style: italic">* Required Field</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
@endsection
