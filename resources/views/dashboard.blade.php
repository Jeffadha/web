@extends('layouts.master_sidebar')

@section('title','Web Admin')

@section('css')
<style type="text/css">

</style>
@stop

@section('content')
<div class="container-full">
    <!-- Content Header (Page header) -->	  
    {{-- <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h3 class="page-title">Blank page</h3>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Sample Page</li>
                            <li class="breadcrumb-item active" aria-current="page">Blank page</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
        </div>
    </div> --}}

    <!-- Main content -->
    <section class="content">
        {{-- <div class="row">
            <div class="col-12">
                <div class="box pull-up">
                    <div class="box-body bg-img bg-primary-light">
                        <div class="d-lg-flex align-items-center justify-content-between">
                            <div class="d-lg-flex align-items-center mb-30 mb-xl-0 w-p100">
                                <img src="{{ url('images/svg-icon/color-svg/custom-14.svg') }}" class="img-fluid max-w-250" alt="" />
                                <div class="ms-30">
                                    <h2 class="mb-10">Welcome to Executive Dashboard</h2>
                                    <p class="mb-0 text-fade fs-18"> To Monitoring Enterprise Resource Planning Report. </p>
                                </div>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="mx-auto col-xl-11 col-12">
                <div class="box pull-up bg-primary-light">
                    <div class="box-body d-flex px-0">
                        <div class="flex-grow-1 p-30 flex-grow-1 bg-img dask-bg bg-none-md" style="background-position: right bottom; background-size: auto 100%; background-image: url({{ URL::asset('images/svg-icon/color-svg/custom-1.svg') }})">
                            <div class="row">
                                <div class="col-12 col-xl-7">
                                    <h2>Welcome to <strong>Wab Admin Dashboard</strong></h2>

                                    <p class="text-dark my-10 fs-16">
                                        To Posting Event in <strong class="text-warning">UMUKA.</strong> 
                                    </p>
                                </div>
                                <div class="col-12 col-xl-5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection