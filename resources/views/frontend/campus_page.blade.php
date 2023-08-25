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
                        <h2 class="page-title text-white">Kampus UMUKA</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i
                                        class="mdi mdi-google-maps"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Lokasi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->

    <section class="py-50" data-aos="fade-up">
        <div class="container">

            <div class="row fx-element-overlay">
                <div class="col-lg-6">
                    <div class="box">
                        <div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5674.369138148721!2d110.92148446555825!3d-7.590246084113666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a19603e98de13%3A0x6b5f17d8429ed400!2sUNIVERSITAS%20MUHAMMADIYAH%20KARANGANYAR!5e0!3m2!1sen!2sid!4v1692612674571!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="fx-card-content">
                                <h4 class="box-title mb-0">Kampus 1</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="box">
                        <div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.17419566048326!2d110.95734161553573!3d-7.598131241984514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2035ba4f059b%3A0xf08b7714bfa2d94e!2sUMUKA%20kampus%202!5e0!3m2!1sen!2sid!4v1692612725855!5m2!1sen!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="fx-card-content">
                                <h4 class="box-title mb-0">Kampus 2</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
@section('page-script')

    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


        });
    </script>

@stop
