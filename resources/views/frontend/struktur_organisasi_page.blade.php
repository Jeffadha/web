@extends('layouts.master')

@section('css')
    <style type="text/css">

    </style>
@stop

@section('content')

    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url({{ URL::asset('images/gedungbaru.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Struktural</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i
                                        class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Struktur Organisasi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->
    <section class="py-50" data-aos="fade-up">
        <div class="container">

        </div>
    </section>

@endsection
@section('page-script')

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        });
    </script>

@stop
