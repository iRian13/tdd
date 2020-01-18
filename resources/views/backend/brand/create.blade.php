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
                            <form action="" method="post" m>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" placeholder="Brand Name" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="file" class="col-sm-2 col-form-label">Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control-file" id="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-1 text-center">
                                        <button type="submit" class="btn btn-primary">Add Brand</button>
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
