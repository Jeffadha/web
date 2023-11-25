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
						<h2 class="page-title text-white">Daftar Pengumuman</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Daftar Pengumuman</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Page content -->
	
	<section class="py-50">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9 col-12" id="list_pengumuman">
					{{-- <div class="box">
					  <div class="row g-0">
						<div class="col-md-4 col-12 bg-img h-md-auto h-250" style="background-image: url(../images/front-end-img/courses/12f.jpg)"></div>
						<div class="col-md-8 col-12">
						  <div class="box-body">
							<h4><a href="#">Aenean venenatis arcu quis ante porttitor bibendum.</a></h4>
							<div class="d-flex mb-10">
							  	<div class="me-10">
									<i class="fa fa-user me-5"></i> Johen Doe
								</div>
							  	<div>
									<i class="fa fa-calendar me-5"></i> October 19, 2020
								</div>
							</div>

							<p>Vestibulum volutpat, ante sit amet dignissim imperdiet, diam diam sodales orci, in gravida lorem erat eu diam. Nulla lorem nunc, ultrices ac dignissim et, dignissim nec lacus. Praesent euismod lorem eget justo lacinia rutrum sed at mi.</p>

							<div class="flexbox align-items-center mt-3">
							  <a class="btn btn-sm btn-primary" href="#">Read more</a>

							  <div class="gap-items-4">
								<a class="text-muted" href="#">
								  <i class="fa fa-heart me-1"></i> 25
								</a>
								<a class="text-muted" href="#">
								  <i class="fa fa-comment me-1"></i> 23
								</a>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div> --}}
					<div aria-label="Page navigation example">
					  <ul class="pagination mb-0">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					  </ul>
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

	//   function detail_post() {
    //         $.ajax({
    //             type: 'POST',
    //             url: "{{ route('detail.data') }}",
	// 			data:{id:id_berita},
    //             success: function (result) {
	// 				console.log(result);
	// 				//$("#entry_content").html(result.content);
    //             }
    //         })
    //     }

    //     detail_post();

        function list_pengumuman() {
                $.ajax({
                    type: 'GET',
                    url: "{{ route('pengumuman.list') }}",
                    success: function(result) {
                        var jml = result.length;
                        var s = '';

                        for (i = 0; i < jml; i++) {
							url_detail =
                                '{{ route('detail.announ', ['id' => ':id']) }}';
                            img = result[i].gambar;
                            titlesubtr = subStr(result[i].judul, 25);
                            judul = result[i].judul;
                            id_pengumuman = result[i].id_pengumuman;
                            //judul = judul.replace(/ /g, "+");

                            url_detail = url_detail.replace(':id', id_pengumuman);

                            s = s + '<div class="box">'+
					  '<div class="row g-0">'+
						'<div class="col-md-4 col-12 bg-img h-md-auto h-250" style="background-image: url({{ URL::asset('uploadfile_announcement') }}/'+ img + ')">'+'</div>'+
						'<div class="col-md-8 col-12">'+
						  '<div class="box-body">'+
							'<h4><a href="' + url_detail +'">'+ titlesubtr +'</a>'+'</h4>'+
							'<div class="d-flex mb-10">' +
							  	'<div>' +
									'<i class="fa fa-calendar me-5">' +'</i>' + result[i].created_at + 
								'</div>'+
							'</div>'+

							'<div class="flexbox align-items-center mt-3">'+
							  '<a class="btn btn-sm btn-primary" href="'+ url_detail +'">Read more</a>' +
							'</div>' +
						 '</div>' +
						'</div>' +
					  '</div>' +
					'</div>';
                        }
                        // console.log(result);
                        $('#list_pengumuman').html(s);

                    }
                })
            }

            list_pengumuman();

            function subStr(text, count) {
            return text.slice(0, count) + (text.length > count ? "..." : "");
        }

  });
</script>

@stop