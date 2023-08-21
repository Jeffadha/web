@extends('layouts.master')

@section('css')
    <style type="text/css">

    </style>
@stop

@section('content')

    <!---page Title --->
    <section class="bg-img pt-150 pb-20" data-overlay="7"
        style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 class="page-title text-white">Sejarah UMUKA</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i
                                        class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Blog Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->

    <section class="py-50 cust-accordion">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tab-wrapper v1">
                        <div class="list">
                            <div class="item selected">
                                <div class="tab-btn">
                                    <a href="#">Sejarah<em class="mdi mdi-plus"></em></a>
                                </div>
                                <div class="tab-content">
                                    <p>Literally it does not mean anything. It is a sequence of words without a sense of
                                        Latin derivation that make up a text also known as filler text, fictitious, blind or
                                        placeholder</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tab-btn"><a href="#">Visi, Misi, Tujuan dan Sasaran<em
                                            class="mdi mdi-plus"></em></a> </div>
                                <div class="tab-content">
                                    <p>The Lorem Ipsum text is used to fill spaces designated to host texts that have not
                                        yet been published. They use programmers, graphic designers, typographers to get a
                                        real impression of the digital / advertising / editorial product they are working
                                        on.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tab-btn"><a href="#"> Struktur Organisasi <em
                                            class="mdi mdi-plus"></em></a></div>
                                <div class="tab-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem
                                        ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis
                                        aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tab-btn"><a href="#"> Akreditasi Prodi <em class="mdi mdi-plus"></em></a>
                                </div>
                                <div class="tab-content">
                                    <p>Its origins date back to 45 BC. In fact, his words were randomly extracted from the
                                        De finibus bonorum et malorum , a classic of Latin literature written by Cicero over
                                        2000 years ago.</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tab-btn"><a href="#"> Lokasi Kampus <em class="mdi mdi-plus"></em></a>
                                </div>
                                <div class="tab-content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Kampus 1</p>
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5674.369138148721!2d110.92148446555825!3d-7.590246084113666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a19603e98de13%3A0x6b5f17d8429ed400!2sUNIVERSITAS%20MUHAMMADIYAH%20KARANGANYAR!5e0!3m2!1sen!2sid!4v1692612674571!5m2!1sen!2sid"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
												<p>Kampus 2</p>
                                                <iframe
                                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.17419566048326!2d110.95734161553573!3d-7.598131241984514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2035ba4f059b%3A0xf08b7714bfa2d94e!2sUMUKA%20kampus%202!5e0!3m2!1sen!2sid!4v1692612725855!5m2!1sen!2sid"
                                                    width="600" height="450" style="border:0;" allowfullscreen=""
                                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
