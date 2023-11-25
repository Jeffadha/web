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
                        <h2 class="page-title text-white">PRODI</h2>
                        <ol class="breadcrumb bg-transparent justify-content-center">
                            <li class="breadcrumb-item"><a href="#" class="text-white-50"><i
                                        class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">prodi</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->
    <section class="py-50" data-aos="fade-up">
        <div class="container ">
            <div class="row">
				<div class="col-12">
					<h2>Program Studi</h2>
					<hr>
				</div>
			</div>
			<div class="row fx-element-overlay d-flex justify-content-center align-items-center">	
				@foreach($prodi as $pro)			
				<div class="col-lg-3 col-md-6 col-12">
					<div class="box">
						<div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1"> 
                                @if ($pro->gambar)
                                <img src="/uploadfile_prodi/{{  $pro->gambar }}" alt="prodi">
                                @else
                                <img src="/images/no-image.png" alt="prodi"> 
                                @endif
								<div class="fx-overlay">
									<ul class="fx-info">
										<li><a class="btn btn-danger no-border" href="{{ route('detail_prodi_show',$pro->id_prodi) }}">View More</a></li>
									</ul>
								</div>
							</div>
							<div class="fx-card-content">
								<h4 class="box-title mb-0">{{ $pro->nama_prodi }}</h4>
                                <h3 class="box-body mb-0">{{ $pro->degree }}</h3>
							</div>
						</div>
					</div>
				</div>
				@endforeach
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
