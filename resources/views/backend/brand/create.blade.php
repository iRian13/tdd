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
                            <h6 class="card-title">Special title treatment</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
