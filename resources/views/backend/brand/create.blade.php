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
                            <h5 class="m-0">Add Brand</h5>
                        </div>
                        <div class="card-body">
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
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
