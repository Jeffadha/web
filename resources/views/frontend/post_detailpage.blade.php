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
						<h2 class="page-title text-white">Blog Details with Sidebar (Image)</h2>
						<ol class="breadcrumb bg-transparent justify-content-center">
							<li class="breadcrumb-item"><a href="#" class="text-white-50"><i class="mdi mdi-home-outline"></i></a></li>
							<li class="breadcrumb-item text-white active" aria-current="page">Blog Details</li>
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
				<div class="col-lg-9 col-md-8 col-12">
					<div class="blog-post mb-30">
						<div class="entry-image clearfix">
							<img class="img-fluid" src="../images/front-end-img/courses/1f.jpg" alt="">
						</div>
						<div class="blog-detail">
							<div class="entry-meta mb-10">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-folder-open-o"></i> Design</a></li>
									<li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
									<li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2020</a></li>
								</ul>
							</div>
							<hr>
							<div class="entry-title mb-10">
								<a href="#" class="fs-24">Blogpost With Image</a>
							</div>
							<div class="entry-content" id="entry_content">

							</div>	
							  <blockquote class="blockquote mt-20 pb-0 mb-0">
								  <footer class="blockquote-footer">John Watson <cite title="Source Title">Miami</cite></footer>
							  </blockquote>	
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-12">
					<div class="side-block px-20 py-10 bg-white">
						<div class="widget courses-search-bx placeholdertx mb-10">
							<div class="form-group">
								<div class="input-group">
									<label class="form-label">Search...</label>
									<input name="name" type="text" required="" class="form-control">
								</div>
							</div>
						</div>	
						<div class="widget clearfix">
							<h4 class="pb-15 mb-15 bb-1">Categories</h4>
							<div class="media-list media-list-divided">
								<a class="px-0 media media-single" href="#">
								  <span class="title ms-0">Biology Course </span>
								  <span class="mx-0 badge badge-secondary-light">125</span>
								</a>

								<a class="px-0 media media-single" href="#">
								  <span class="title ms-0">Contemporary Art</span>
								  <span class="mx-0 badge badge-primary-light">124</span>
								</a>

								<a class="px-0 media media-single" href="#">
								  <span class="title ms-0">Elizabethan Theater</span>
								  <span class="mx-0 badge badge-info-light">425</span>
								</a>

								<a class="px-0 media media-single" href="#">
								  <span class="title ms-0">Geometry Course</span>
								  <span class="mx-0 badge badge-success-light">321</span>
								</a>

								<a class="px-0 media media-single" href="#">
								  <span class="title ms-0">Informatic Course</span>
								  <span class="mx-0 badge badge-danger-light">159</span>
								</a>

								<a class="px-0 media media-single" href="#">
								  <span class="title ms-0">Live Drawing</span>
								  <span class="mx-0 badge badge-warning-light">452</span>
								</a>
							  </div>
						</div>
						{{-- <div class="widget clearfix">
							<h4 class="pb-15 mb-25 bb-1">Archives</h4>
							<ul class="list list-unstyled">
								<li><a href="#"><i class="fa fa-angle-double-right"></i> November 2020</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> October 2020</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> September 2020</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> August 2020</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> July 2020</a></li>
							</ul>
						</div> --}}
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Tags</h4>
							<div class="widget-tags">
								<ul class="list-unstyled">
									<li><a href="#">Bootstrap</a></li>
									<li><a href="#">HTML5</a></li>
									<li><a href="#">Wordpress</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Creative</a></li>
									<li><a href="#">Multipurpose</a></li>
									<li><a href="#">Bootstrap</a></li>
									<li><a href="#">HTML5</a></li>
									<li><a href="#">Wordpress</a></li>
								</ul>
							</div>
						</div>
						{{-- <div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Meta</h4>
							<ul class="list list-unstyled">
								<li><a href="#"><i class="fa fa-angle-double-right"></i> Log in</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> Entries RSS</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> Comments RSS </a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> Online</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> WordPress.org</a></li>
							</ul>
						</div> --}}
						<div class="widget">
							<h4 class="pb-15 mb-25 bb-1">Recent Posts </h4>
							<div class="recent-post clearfix">
								<div class="recent-post-image">
									<img class="img-fluid bg-primary-light" src="../images/front-end-img/courses/cor-logo-1.png" alt="">
								</div>
								<div class="recent-post-info">
									<a href="#">Curabitur id scelerisque diam. Pellentesque ut lectus arcu.</a>
									<span><i class="fa fa-calendar-o"></i> September 30, 2020</span>
								</div>
							</div>
							<div class="recent-post clearfix">
								<div class="recent-post-image">
									<img class="img-fluid bg-primary-light" src="../images/front-end-img/courses/cor-logo-5.png" alt="">
								</div>
								<div class="recent-post-info">
									<a href="#">Curabitur id scelerisque diam. Pellentesque ut lectus arcu.</a>
									<span><i class="fa fa-calendar-o"></i> September 30, 2020</span>
								</div>
							</div>
							<div class="recent-post clearfix">
								<div class="recent-post-image">
									<img class="img-fluid bg-primary-light" src="../images/front-end-img/courses/cor-logo-4.png" alt="">
								</div>
								<div class="recent-post-info">
									<a href="#">Curabitur id scelerisque diam. Pellentesque ut lectus arcu.</a>
									<span><i class="fa fa-calendar-o"></i> September 30, 2020</span>
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

	var id_berita = '{{ $id_berita }}';
  $(document).ready(function() {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

	  function detail_post() {
            $.ajax({
                type: 'POST',
                url: "{{ route('detail.data') }}",
				data:{id:id_berita},
                success: function (result) {
					console.log(result);
					//$("#entry_content").html(result.content);
                }
            })
        }

        detail_post();



  });
</script>

@stop