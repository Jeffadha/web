@extends('layouts.master')

@section('css')
<style type="text/css">

</style>
@stop

@section('content')

	<!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">{{ $pengumuman->judul }}</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">{{ $pengumuman->judul }}</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-md-7 col-12">
						<div class="box">
							<img class="box-img-top btrr-5 btlr-5" src="{{ URL::asset('/uploadfile_announcement/' . $pengumuman->gambar) }}" alt="Card image cap">
							<div class="box-body">
							<h3 class="box-title">{{ $pengumuman->judul }}</h3>
							<div class="cour-stac d-lg-flex align-items-center text-fade">
									<div class="d-flex align-items-center">
										<p>Posted on {{ $pengumuman->tanggal}}</p>
									</div>
							</div>
							<div class="d-lg-flex align-items-center mt-15">
								<div class="d-flex align-items-center"> 
									<span>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star text-warning"></i>
										<i class="fa fa-star-half text-warning"></i>
										<span class="text-muted ms-2">458 reviews</span>
									</span> 
									<div class="d-flex align-items-center ms-35">  
										<i class="fa fa-heart text-danger me-5"></i> 781 
									</div>
								</div> 
							</div>						
							</div>
						</div>
						<div class="box">
							<div class="box-body">
							<hr>
							<p class="fs-16 mb-30"><iframe id="fred" style="border:1px solid #666CCC" title="PDF in an i-Frame" src="{{ URL::to('/uploadfile_announcement_pdf/' . $pengumuman->content) }}" frameborder="1" scrolling="auto" height="1000" width="800" ></iframe></p>		
							</div>
							<div class="box-body">
							<hr>
							<p class="fs-16 mb-30"><a href="{{ URL::asset('/uploadfile_announcement_pdf/'. $pengumuman->content) }}" class="btn btn-primary mx-auto"> Unduh <i class="fa fa-arrow-circle-o-down"
								aria-hidden="true"></i></a></p>		
							</div>
						</div>
					</div>
								
				</div>
			</div>
		</section>
@endsection
@section('page-script')

<script>

	var id_pengumuman = '{{ $pengumuman->id_pengumuman }}';
  $(document).ready(function() {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });




  });
</script>

@stop