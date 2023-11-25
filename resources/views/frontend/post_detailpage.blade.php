@extends('layouts.master')

@section('css')
<style type="text/css">

</style>
@stop

@section('content')

<section class="bg-img pt-200 pb-200" data-overlay="1"
        style="background-image: url({{ URL::asset('/uploadfile_news/' . $post->gambar) }}); background-position: inherit center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        {{-- <h2 class="page-title text-white">{{ $post->judul }}</h2> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page content -->
    <section class="py-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box box-transparent no-shadow">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- Nav tabs -->
                            <div class="vtabs customvtab">
                                <ul class="nav nav-tabs tabs-vertical" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tabsatu"
                                            role="tab" aria-expanded="true"><span class="hidden-sm-up"><i
                                                    class="ion-home"></i></span> <span class="hidden-xs-down">{{ $post->created_at }}</span>
                                        </a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tabdua"
                                            role="tab" aria-expanded="false"><span class="hidden-sm-up"><i
                                                    class="ion-person"></i></span> <span class="hidden-xs-down">Visi, Misi
                                                dan Tujuan</span></a> </li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabsatu" role="tabpanel" aria-expanded="true">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7 col-12 text-center">
                                                <h1 class="mb-15">{{ $post->judul }}</h1>
                                                <hr class="w-100 bg-primary">
                                            </div>
                                        </div>
                                        <div class="p-0">
                                            <p style="text-align: justify;">{!! html_entity_decode($post->content) !!} </p>
											<p><b>Penulis : </b> {{ $post->author }}</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tabdua" role="tabpanel" aria-expanded="false">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7 col-12 text-center">
                                                <h1 class="mb-15">Visi</h1>
                                                <hr class="w-100 bg-primary">
                                            </div>
                                        </div>
                                        <div class="p-15">
                                            <p style="text-align: justify;">
                                                Menjadi perguruan tinggi yang unggul dan terkemuka sebagai kekuatan
                                                penggerak peradaban islami yang berkemajuan.
                                            </p>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7 col-12 text-center">
                                                <h1 class="mb-15">Misi</h1>
                                                <hr class="w-100 bg-primary">
                                            </div>
                                        </div>
                                        <div class="p-15">
                                            <p style="text-align: justify;">
                                            <ol>
                                                <li>Menyelenggarakan pendidikan, dalam bidang ilmu pengetahuan, teknologi,
                                                    dan seni sebagai bagian pengabdian kepada Allah Swt. secara integral
                                                    yang
                                                    mendorong terwujudnya masyarakat yang berkemajuan dan berkeadaban.</li>
                                                <li>Menyelenggarakan penelitian untuk mendorong pengembangan ilmu
                                                    pengetahuan, teknologi, dan seni sebagai bagian pengabdian kepada Allah
                                                    Swt.
                                                    secara integral yang mendorong terwujudnya masyarakat yang berkemajuan
                                                    dan
                                                    berkeadaban.</li>
                                                <li>Menyelenggarakan pengabdian kepada masyarakat untuk menerapkan ilmu
                                                    pengetahuan, teknologi, dan seni sebagai bagian pengabdian kepada Allah
                                                    Swt.
                                                    secara integral yang mendorong terwujudnya masyarakat yang berkemajuan
                                                    dan
                                                    berkeadaban.</li>
                                                <li>Menumbuhkembangkan sumber daya insani yang berjiwa entrepreneur
                                                    berlandaskan nilai-nilai Keislaman, Kemuhammadiyahan, dan Keindonesiaan,
                                                    dalam rangka mewujudkan masyarakat yang sejahtera lahir dan batin,
                                                    disiplin,
                                                    berkemajuan dan berkeadaban.</li>
                                                <li>Mengembangkan tata kelola kelembagaan yang unggul dan good governance
                                                    university.</li>
                                                <li>Mengembangkan jejaring kerja sama dan kemitraan di tingkat lokal,
                                                    nasional, dan internasional.</li>
                                            </ol>

                                            </p>
                                        </div>

                                        <div class="row justify-content-center">
                                            <div class="col-lg-7 col-12 text-center">
                                                <h1 class="mb-15">Tujuan</h1>
                                                <hr class="w-100 bg-primary">
                                            </div>
                                        </div>
                                        <div class="p-15">
                                            <p style="text-align: justify;">
                                            <ol>
                                                <li>Menghasilkan lulusan yang kompeten di bidangnya dan mempunyai daya
                                                    saing tinggi di bidang sains dan teknologi dalam pengembangan dan
                                                    kemaslahatan umat.</li>
                                                <li>Menghasilkan pemikiran dan temuan penelitian yang inovatif berskala
                                                    nasional dan internasional.</li>
                                                <li>Menghasilkan karya-karya pengabdian masyarakat yang dapat
                                                    meningkatkan kesejahteraan masyarakat yang berkemajuan.</li>
                                                <li>Mewujudkan universitas yang memiliki daya saing tinggi dalam bidang
                                                    pendidikan, teknologi, dan seni yang berwawasan keislaman dan
                                                    keindonesiaan.</li>
                                                <li>Mewujudkan tata kelola kelembagaan yang unggul dan good governance
                                                    university.</li>
                                                <li>Membangun jejaring kerja sama dan kemitraan di tingkat lokal, nasional,
                                                    dan internasional.</li>

                                            </ol>

                                            </p>
                                        </div>
                                    </div>
                                    {{-- <div class="tab-pane" id="tabtiga" role="tabpanel" aria-expanded="false">
                                        <div class="box">
                                            <div class="box-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Program Studi</th>
                                                                <th>Akreditasi</th>
                                                                <th>No SK.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>S1 Teknik Komputer</td>
                                                                <td>Baik</td>
                                                                <td>10558/SK/BAN-PT/Ak.P/S/XII/2022</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1 Informatika</td>
                                                                <td>Baik</td>
                                                                <td>10488/SK/BAN-PT/Ak.P/S/XII/2022</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1 Bisnis Digital</td>
                                                                <td>Baik</td>
                                                                <td>10480/SK/BAN-PT/Ak.P/S/XII/2022</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1 Ilmu Komunikasi</td>
                                                                <td>Baik</td>
                                                                <td>10486/SK/BAN-PT/Ak.P/S/XII/2022</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1 Akuntansi</td>
                                                                <td>Baik</td>
                                                                <td>4615/SK/BAN-PT/Ak-PNB/D3/VII/2022</td>
                                                            </tr>
                                                            <tr>
                                                                <td>S1 Fisioterapi</td>
                                                                <td>Baik</td>
                                                                <td>00 59/LAM-PTKes/Akr .PB / Sar /IV /2O23</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Perhotelan</td>
                                                                <td>Baik</td>
                                                                <td>762/SK/BAN-PT/Ak.PEPS/D3/III/2023</td>
                                                            </tr>
                                                            <tr>
                                                                <td>D3 Produksi Ternak</td>
                                                                <td>Baik Sekali</td>
                                                                <td>4615/SK/BAN-PT/Ak-PNB/D3/VII/2022</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div> --}}

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </section>


	{{-- <!---page Title --->
	<section class="bg-img pt-150 pb-20" data-overlay="7" style="background-image: url(../images/front-end-img/background/bg-8.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="text-center">						
						<h2 class="page-title text-white">{{ $post->judul }}</h2>
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
	
	<section class="py-50"> --}}
			{{-- <div class="container">
				<div class="row">
					<div class="col-xl-8 col-md-7 col-12">
						<div class="box">
							<img class="box-img-top btrr-5 btlr-5" src="{{ URL::asset('/uploadfile_news/' . $post->gambar) }}" alt="Card image cap">
							<div class="box-body">
							<h3 class="box-title">{{ $post->judul }}</h3>
							<div class="cour-stac d-lg-flex align-items-center text-fade">
									<div class="d-flex align-items-center">
										<p>Posted on {{ $post->tanggal}}</p>
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
							<h4 class="box-title mb-0 fw-500">Description</h4>	
							<hr>
							<p class="fs-16 mb-30">{!! html_entity_decode($post->content) !!}</p>	
								
							<div class="row">
								<div class="col-md-12 col-lg-6">
									<h4 class="box-title mb-0 fw-500">Course Curriculum</h4>
									<hr>
									<ul class="list list-mark">
										<li> Sed rutrum eros et metus imperdiet faucibus.</li>
										<li> Pellentesque id est sed lacus tempor consectetur sed iaculis ex.</li>
										<li> Phasellus venenatis ex id cursus blandit.</li>
										<li> Sed iaculis neque quis enim gravida, in mollis est maximus.</li>
										<li> Ut tempus nibh eu ligula fringilla, nec consequat sem fermentum.</li>
										<li> Aliquam malesuada lectus non ante pharetra mollis.</li>
										<li> Nullam eu nibh vel turpis mattis maximus at id massa.</li>
									</ul>
									<hr>
									<h4 class="box-title mb-0 fw-500">Certification</h4>
									<p class="fs-16 mb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s.</p>
								</div>
								<div class="col-md-12 col-lg-6">
									<ul class="course-overview list-unstyled b-1 bg-gray-100">
										<li><i class="ti-calendar"></i> <span class="tag">Start Date </span> <span class="value">4-Nov-2020</span></li>
										<li><i class="fa fa-language"></i> <span class="tag">Language </span> <span class="value">English, Spanish</span></li>
										<li><i class="ti-book"></i> <span class="tag">Sessions </span> <span class="value">10</span></li>
										<li><i class="ti-help-alt"></i> <span class="tag">Exam</span> <span class="value">2</span></li>
										<li><i class="ti-time"></i> <span class="tag">Duration</span> <span class="value">60 hours</span></li>
										<li><i class="ti-stats-up"></i> <span class="tag">Level</span> <span class="value">Beginner</span></li>
										<li><i class="ti-smallcap"></i> <span class="tag">Language</span> <span class="value">English</span></li>
										<li><i class="ti-user"></i> <span class="tag">Students</span> <span class="value">15</span></li>
										<li><i class="ti-check-box"></i> <span class="tag">Assessments</span> <span class="value">Yes</span></li>
									</ul>
								</div>
							</div>  
							</div>
						</div>
						<div class="box">
							<div class="box-body">
							<h4 class="box-title mb-0 fw-500">Curriculum Details</h4>	
							<hr>
							<ul class="course-curriculum">
								<li>
									<h5 class="text-primary fw-500">Module 1: Think</h5>
									<ul class="list-unstyled">
										<li>
											<div class="list-bx">
												<span>Lesson 1.</span> Quisque sit amet nisi non lacus tempor lacinia.
											</div>
											<span>120 minutes</span>
										</li>
										<li>
											<div class="list-bx">
												<span>Lesson 2.</span> Sed eget arcu a nibh malesuada vulputate at non tortor.
											</div>
											<span>90 minutes</span>
										</li>
										<li>
											<div class="list-bx">
												<span>Lesson 3.</span> Phasellus in nulla non mi eleifend interdum.
											</div>
											<span>90 minutes</span>
										</li>
									</ul>
								</li>
								<li>
									<h5 class="text-primary fw-500">Module 2 : Feel</h5>
									<ul class="list-unstyled">
										<li>
											<div class="list-bx">
												<span>Lesson 1.</span> Nunc placerat nunc et justo ullamcorper molestie.
											</div>
											<span>120 minutes</span>
										</li>
										<li>
											<div class="list-bx">
												<span>Lesson 2.</span> Sed et dolor varius, scelerisque felis sed, faucibus ipsum.
											</div>
											<span>80 minutes</span>
										</li>
										<li>
											<div class="list-bx">
												<span>Lesson 3.</span> Maecenas id est vitae sapien pretium interdum quis nec ex.
											</div>
											<span>80 minutes</span>
										</li>
									</ul>
								</li>
								<li>
									<h5 class="text-primary fw-500">Module 3 : Do</h5>
									<ul class="list-unstyled">
										<li>
											<div class="clist-bx">
												<span>Part 1.</span> Final Test
											</div>
											<span>180 minutes</span>
										</li>
										<li>
											<div class="list-bx">
												<span>Part 2.</span> Online Test
											</div>
											<span>180 minutes</span>
										</li>
									</ul>
								</li>
							</ul>
							</div>
						</div>
						<h4 class="page-title mb-25 fw-500">Faculty</h4>	
						<div class="box">
							<div class="box-body">
								<div class="staff-bx">
									<div class="d-flex align-items-center">
										<div class="staff-pic">
											<img src="../images/front-end-img/avatar/1.jpg" class="bg-primary-light rounded w-50" alt="" >
										</div>
										<div class="staff-dis ms-15">
											<h5 class="mb-5">Johen Doe</h5>
											<p class="mb-0">Faculty</p>
										</div>
									</div>
									<p class="mb-15 mt-20">
										It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
									</p>
									<div class="d-flex gap-items-1">
									<button class="waves-effect waves-circle btn btn-social-icon btn-xs btn-circle btn-facebook"><i class="fa fa-facebook"></i></button>
									<button class="waves-effect waves-circle btn btn-social-icon btn-xs btn-circle btn-twitter"><i class="fa fa-twitter"></i></button>
									<button class="waves-effect waves-circle btn btn-social-icon btn-xs btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></button>
									</div>
								</div>
							</div>
						</div>
						<div class="box">
							<div class="box-body">
								<div class="staff-bx">
									<div class="d-flex align-items-center">
										<div class="staff-pic">
											<img src="../images/front-end-img/avatar/2.jpg" class="bg-primary-light rounded w-50" alt="" >
										</div>
										<div class="staff-dis ms-15">
											<h5 class="mb-5">Maical Doe</h5>
											<p class="mb-0">Co-Faculty</p>
										</div>
									</div>
									<p class="mb-15 mt-20">
										It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.
									</p>
									<div class="d-flex gap-items-1">
									<button class="waves-effect waves-circle btn btn-social-icon btn-xs btn-circle btn-facebook"><i class="fa fa-facebook"></i></button>
									<button class="waves-effect waves-circle btn btn-social-icon btn-xs btn-circle btn-twitter"><i class="fa fa-twitter"></i></button>
									<button class="waves-effect waves-circle btn btn-social-icon btn-xs btn-circle btn-linkedin"><i class="fa fa-linkedin"></i></button>
									</div>
								</div>						  
							</div>
						</div>
						
						<h4 class="page-title mb-25 fw-500">Reviews</h4>	
						<div class="box">
							<div class="box-body">
								<div class="d-lg-flex justify-content-start align-items-center">
									<div class="ratingbar w-p100 px-0 pe-lg-30">
										<div class="d-flex align-items-center justify-content-between">
											<div class="w-100">											
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="w-p70">
												<div class="progress mb-0">
													<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
													</div>
													</div>
											</div>
											<div>
												<div>350</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="w-100">											
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="w-p70">
												<div class="progress mb-0">
													<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
													</div>
													</div>
											</div>
											<div>
												<div>250</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="w-100">											
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="w-p70">
												<div class="progress mb-0">
													<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
													</div>
													</div>
											</div>
											<div>
												<div>100</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="w-100">											
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="w-p70">
												<div class="progress mb-0">
													<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
													</div>
													</div>
											</div>
											<div>
												<div>070</div>
											</div>
										</div>
										<div class="d-flex align-items-center justify-content-between">
											<div class="w-100">											
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
													<li><i class="fa fa-star"></i></li>
												</ul>
											</div>
											<div class="w-p70">
												<div class="progress mb-0">
													<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
													</div>
													</div>
											</div>
											<div>
												<div>050</div>
											</div>
										</div>
									</div>
									<div class="text-center bg-gray-100 p-30 min-w-190 mb-lg-0 mb-30">
										<h2 class="fw-500 mt-0">4.5</h2>
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star-half-empty"></i></li>
										</ul>
										<span>748 Rating</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-5 col-sm-12">					
						<div class="course-detail-bx">
							<div class="box box-body">
								<div class="course-price">
									<div class="mb-5">
										<div class="text-dark mb-2 text-center">
											<span class="text-dark fw-600 h1">$199</span> 
											<span class="text-muted h3 fw-normal ms-2">
												<del>$250</del>
											</span> 
										</div> 
										<p class="text-primary text-center">
											<i class="fa fa-clock-o me-1"></i>
											Limited Time Offer
										</p>
									</div>
								</div>	
								<div class="text-center">
									<button type="button" class="waves-effect waves-light btn w-p100 btn-success mb-10">Enroll Now</button>
									<button type="button" class="waves-effect waves-light btn w-p100 btn-dark">Free Trail</button>
								</div>
							</div>
							<div class="box box-body">
								<div class="row">
									<div class="col-6">
										<span>4.5 Review</span>
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star-half-empty"></i></li>
										</ul>
									</div>
									<div class="col-6">
										<span>Categories</span>
										<h5 class="text-primary">It & Software</h5>
									</div>
								</div>
							</div>
							<div class="box box-body">
								<div class="staff-bx">
									<div class="staff-info d-flex align-items-center">
										<div class="staff-thumb me-10">
											<img src="../images/avatar/avatar-1.png" alt="" class="bg-secondary-light rounded-circle max-w-60">
										</div>
										<div class="staff-name">
											<h5 class="mb-0">Johen Doe</h5>
											<span>Faculty Director</span>
										</div>
									</div>
								</div>
								<hr class="w-p100">
								<div>
									<div>								
										<div class="d-flex align-items-center mb-5">
											<div class="bg-primary rounded h-30 w-30 l-h-30 text-center me-10">
												<i class="fa fa-envelope"></i>
											</div>
											<a href="#"> info@dummy.com</a>
										</div>							
										<div class="d-flex align-items-center mb-5">
											<div class="bg-primary rounded h-30 w-30 l-h-30 text-center me-10">
												<i class="fa fa-phone"></i>
											</div>
											<a href="#"> +1 123 456 7890</a>
										</div>						
										<div class="d-flex align-items-center mb-5">
											<div class="bg-primary rounded h-30 w-30 l-h-30 text-center me-10">
												<i class="fa fa-link"></i>
											</div>
											<a href="#"> www.dummy.com</a>
										</div>
									</div>
									<ul class="list-inline mt-20 mb-0">
										<li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" data-original-title="Facebook"><i class="fa fa-facebook-square fs-20"></i></a></li>
										<li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" data-original-title="Twitter"><i class="fa fa-twitter-square fs-20"></i></a></li>
										<li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" data-original-title="Instagram"><i class="fa fa-instagram fs-20"></i></a></li>
										<li><a href="javascript:void(0)" data-bs-toggle="tooltip" title="" data-original-title="Linkedin"><i class="fa fa-linkedin-square fs-20"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="box box-body">
								<div class="widget mb-0">
									<h4 class="mb-20">Testimonials</h4>
									<div class="owl-carousel" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
										<div class="item">
											<div class="testimonial-widget">
												<div class="testimonial-content">
													<p>In odio metus, porta vitae neque vitae, faucibus viverra orci.</p>
												</div>
												<div class="testimonial-info mt-20">
													<div class="testimonial-avtar">
														<img class="img-fluid" src="../images/avatar/1.jpg" alt="">
													</div>
													<div class="testimonial-name">
														<strong>Johen Doe</strong>
														<span>Project Manager</span>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="testimonial-widget">
												<div class="testimonial-content">
													<p>Morbi condimentum leo eu lacinia accumsan. Phasellus cursus rhoncus elit. </p>
												</div>
												<div class="testimonial-info mt-20">
													<div class="testimonial-avtar">
														<img class="img-fluid" src="../images/avatar/2.jpg" alt="">
													</div>
													<div class="testimonial-name">
														<strong>Johen Doe</strong>
														<span>Design</span>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="testimonial-widget">
												<div class="testimonial-content">
													<p>In odio metus, porta vitae neque vitae, faucibus viverra orci.</p>
												</div>
												<div class="testimonial-info mt-20">
													<div class="testimonial-avtar">
														<img class="img-fluid" src="../images/avatar/3.jpg" alt="">
													</div>
													<div class="testimonial-name">
														<strong>Johen Doe</strong>
														<span>Project Manager</span>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="testimonial-widget">
												<div class="testimonial-content">
													<p>Morbi condimentum leo eu lacinia accumsan. Phasellus cursus rhoncus elit. </p>
												</div>
												<div class="testimonial-info mt-20">
													<div class="testimonial-avtar">
														<img class="img-fluid" src="../images/avatar/4.jpg" alt="">
													</div>
													<div class="testimonial-name">
														<strong>Johen Doe</strong>
														<span>Design</span>
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
			</div>
		</section> --}}
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