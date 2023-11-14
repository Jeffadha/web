@extends('layouts.master')

@section('css')
    <style type="text/css">

    </style>
@stop

@section('content')

    <section class="bg-img pt-200 pb-200" data-overlay="7"
        style="background-image: url({{ URL::asset('images/front-end-img/background/bg-first.jpg') }}); background-position: inherit center;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center mt-80">
                        <h1 class="box-title text-white mb-30">Temukan Program Studi Prospektif disini !</h1>
                    </div>
                    {{-- <form class="cours-search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="What do you want to learn today?">
                            <button class="btn btn-primary" type="submit"></button>
                        </div>
                    </form> --}}
                    <div class="text-center">
                        <a href="courses_list.html" class="btn btn-outline text-white">Daftar Sekarang !</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Berita Terkini</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <div class="px-15 pt-15">
                        <div class="row" id="web_beritaterkini">

                            {{-- <div class="col-lg-3 col-md-6 col-12">
                              <div class="box">
                                  <a href="#">
                                      <img class="card-img-top" style="object-fit:contain; object-position: center; width: 100%; max-height: 180px; margin-bottom: 1rem;" src="{{ URL::asset('uploadfile/20230219092106.jpg') }}" alt="Card image cap">
                                  </a>
                                  <div class="box-body"> 
                                      <div class="text-start">
                                          <h4 class="box-title">General</h4>
                                          <p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i> Sept 16th, 2020</p>
                                          <a href="#" class="btn btn-outline btn-primary btn-sm">Read more</a>
                                      </div>
                                  </div>
                              </div>
                          </div> --}}


                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary mx-auto"> Lainnya <i class="fa fa-arrow-circle-o-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>


    <section class="py-50 bg-img countnm-bx"
        style="background-image: url({{ URL::asset('images/front-end-img/background/bg-3.jpg') }})" data-overlay="5"
        data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white fs-40 icon-User"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <h1 class="countnm my-10 text-white fw-300">56</h1>
                        <div class="text-uppercase text-white">Dosen</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white fs-40 icon-Book"></span>
                        </div>
                        <h1 class="countnm my-10 text-white fw-300">10</h1>
                        <div class="text-uppercase text-white">Program Studi</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white fs-40 icon-Group"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <h1 class="countnm my-10 text-white fw-300">500</h1>
                        <div class="text-uppercase text-white">Mahasiswa</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="text-center">
                        <div class="w-80 h-80 l-h-100 rounded-circle b-1 border-white text-center mx-auto">
                            <span class="text-white fs-40 icon-Globe"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        <h1 class="countnm my-10 text-white fw-300">2</h1>
                        <div class="text-uppercase text-white">Kampus</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-xl-100 pb-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-12">
                    <div class="box box-body p-xl-50 p-30">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <p>
                                <h3>PMB 2023/2024</h3>
                                </p>
                                <p>
                                <h1 style="font-family: 'Courgette';color: firebrick">Cerdas Membangun Peradaban Utama</h1>
                                </p>
                                <p class="mb-15">
                                <h5 class="badge badge-warning badge-lg">UNIVERSITAS MUHAMMADIYAH KARANGANYAR</h5>
                                </p>
                                <h4 class="fw-400"></h4>
                                <a href="https://pmb.umuka.ac.id/" class="btn btn-outline btn-primary">Daftar Sekarang</a>
                            </div>
                            <div class="col-lg-6 col-12 position-relative">
                                <div class="media-list media-list-hover media-list-divided md-post mt-lg-0 mt-30">
                                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
                                        <img class="w-80 rounded ms-0"
                                            src="{{ URL::asset('images/front-end-img/avatar/1.jpg') }}" alt="...">
                                        <div class="media-body fw-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/
                                                IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
                                        <img class="w-80 rounded ms-0"
                                            src="{{ URL::asset('images/front-end-img/avatar/2.jpg') }}" alt="...">
                                        <div class="media-body fw-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/
                                                IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                    <a class="media media-single box-shadowed bg-white pull-up mb-15" href="#">
                                        <img class="w-80 rounded ms-0"
                                            src="{{ URL::asset('images/front-end-img/avatar/3.jpg') }}" alt="...">
                                        <div class="media-body fw-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/
                                                IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                    <a class="media media-single box-shadowed bg-white pull-up mb-0" href="#">
                                        <img class="w-80 rounded ms-0"
                                            src="{{ URL::asset('images/front-end-img/avatar/4.jpg') }}" alt="...">
                                        <div class="media-body fw-500">
                                            <h5 class="overflow-hidden text-overflow-h nowrap">Basic English for IBPS SO/
                                                IBPS PO/IBPS Clerk exams | 5 PM</h5>
                                            <small class="text-fade">Today, 5:00 PM</small>
                                            <p><small class="text-fade mt-10">Johen doe</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">University Partners</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-12">
                    <div class="owl-carousel owl-theme owl-btn-1" data-nav-arrow="false" data-nav-dots="false"
                        data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-1.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-2.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-3.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-4.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-5.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-6.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-7.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-8.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-9.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-10.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-11.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                        <div class="item"><img src="{{ URL::asset('images/front-end-img/unilogo/uni-12.jpg') }}"
                                class="img-fluid my-15 rounded box-shadowed pull-up" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50 bg-white" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Pengumuman</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30" id="web_pengumuman">
                {{-- @foreach ($pengumuman as $p)
                    
                
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{URL::asset('/uploadfile_announcement/' . $p->gambar)}}" alt="Card image cap">
                        </a>
                      <div class="card-body">
                        <h4 class="card-title">{{ $p->judul }}</h4>
                        <p class="card-text">{{ strip_tags($p->content) }}</p>
                        <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                      </div>
                    </div>
                </div>@endforeach --}}
                    
                        {{-- <div class="card-body">
                            <h4 class="card-title">Data</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="card">
                        <a href="#">
                            <img class="card-img-top" src="{{ URL::asset('images/front-end-img/courses/2.jpg') }}"
                                alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">Management & Marketing</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content.</p>
                            <a href="#" class="btn btn-primary btn-outline btn-sm">Know More</a>
                        </div>
                    </div> --}}
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary mx-auto">View All Free Courses</a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-50" data-aos="fade-up">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-12 text-center">
                    <h1 class="mb-15">Agenda</h1>
                    <hr class="w-100 bg-primary">
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/1.jpg" class="avatar avatar-lg rounded10"
                                            alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Johen Kothari</a>
                                        <span class="text-fade fs-12">Software Engineer</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">A great aspect of this course is the student mentors. These
                                    people are always there to help, support, and motivate the student to complete
                                    modules...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/2.jpg" class="avatar avatar-lg rounded10"
                                            alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Johen doe</a>
                                        <span class="text-fade fs-12">Vice President</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">This course actually helped me move from being a general manager
                                    to vice president. The content was exciting. I actually implemented what I learnt
                                    through case...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/3.jpg" class="avatar avatar-lg rounded10"
                                            alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Anshu Srivastav</a>
                                        <span class="text-fade fs-12">Research Assistant</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">Group case studies really give a sense of teamwork, as it
                                    happens in regular classroom studies. It teaches us coordination and right attitude as a
                                    team...</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="box pull-up">
                        <div class="box-body">
                            <div>
                                <div class="d-flex align-items-center mb-30">
                                    <div class="me-15">
                                        <img src="../images/front-end-img/avatar/4.jpg" class="avatar avatar-lg rounded10"
                                            alt="">
                                    </div>
                                    <div class="d-flex flex-column fw-500">
                                        <a href="#" class="text-dark hover-primary mb-1 fs-16">Mical Doe</a>
                                        <span class="text-fade fs-12">Analyst</span>
                                    </div>
                                </div>
                                <p class="mb-25 min-h-120">It doesn’t matter what your previous working background is, as
                                    everything is taught from the basics.</p>
                                <div class="d-flex align-items-center">
                                    <a href="#">
                                        <i class="me-15 fa fa-linkedin-square"></i>
                                        <span>Detailed Review</span>
                                    </a>
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
    <script type="text/javascript">
        $(function() {
            "use strict";



            jQuery(window).scroll(startCounter);

            function startCounter() {
                var hT = jQuery('.countnm-bx').offset().top,
                    hH = jQuery('.countnm-bx').outerHeight(),
                    wH = jQuery(window).height();
                if (jQuery(window).scrollTop() > hT + hH - wH) {
                    jQuery(window).off("scroll", startCounter);
                    jQuery('.countnm').each(function() {
                        var $this = jQuery(this);
                        jQuery({
                            Counter: 0
                        }).animate({
                            Counter: $this.text()
                        }, {
                            duration: 2000,
                            easing: 'swing',
                            step: function() {
                                $this.text(Math.ceil(this.Counter) + '');
                            }
                        });
                    });
                }
            }


        }); // End of use strict
        function subStr(text, count) {
            return text.slice(0, count) + (text.length > count ? "..." : "");
        }

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            function web_beritaterkini() {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('beritaterkini.web') }}",
                    success: function(result) {
                        var jml = result.length;
                        var s = '';

                        for (i = 0; i < jml; i++) {
                            url_detail =
                                '{{ route('detail.page', ['urlext' => ':url', 'id' => ':id', 'title' => ':title']) }}';
                            img = result[i].gambar;
                            titlesubtr = subStr(result[i].judul, 25);
                            id_berita = result[i].id_berita;
                            url_departemen = result[i].url_departemen;
                            judul = result[i].judul;
                            slug = result[i].slug;
                            //judul = judul.replace(/ /g, "+");

                            url_detail = url_detail.replace(':url', url_departemen).replace(':id',
                                id_berita).replace(':title', slug);

                            s = s + '<div class="col-lg-3 col-md-6 col-12">' +
                                '<div class="box">' +
                                '<a href="#" ><img class="card-img-top" style="object-fit:cover; object-position: center; width: 100%; max-height: 180px; margin-bottom: 1rem;" src="{{ URL::asset('uploadfile_news') }}/' +
                                img + '" alt="' + img + '"></a>' +
                                '<div class="box-body">' +
                                '<div class="text-start">' +
                                '<h4 class="box-title">' + titlesubtr + '</h4>' +
                                '<p class="mb-10 text-light fs-12"><i class="fa fa-calendar me-5"></i>' +
                                result[i].created_at + '</p>' +
                                '<a href="' + url_detail +
                                '" class="btn btn-outline btn-primary btn-sm">Read more</a>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                        }
                        // console.log(result);
                        $('#web_beritaterkini').html(s);

                    }
                })
            }

            web_beritaterkini();

            function web_pengumuman() {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('pengumuman.web') }}",
                    success: function(result) {
                        var jml = result.length;
                        var s = '';

                        for (i = 0; i < jml; i++) {
                            url_detail =
                                '{{ route('detail.announ', ['title' => ':title']) }}';
                            img = result[i].gambar;
                            titlesubtr = subStr(result[i].judul, 25);
                            judul = result[i].judul;
                            //judul = judul.replace(/ /g, "+");

                            url_detail = url_detail.replace(':title', judul);

                            s = s + '<div class="col-lg-3 col-md-6 col-12">'+
                    '<div class="card">'+
                        '<a href="#">'+
                                '<a href="#" ><img class="card-img-top" style="object-fit:cover; object-position: center; width: 100%; max-height: 180px; margin-bottom: 1rem;" src="{{ URL::asset('uploadfile_announcement') }}/' +
                                img + '" alt="' + img + '"></a>'+
                      '<div class="card-body">'+
                        '<h4 class="card-title">'+titlesubtr +'</h4>'+
                        '<a href="' + url_detail +'" class="btn btn-primary btn-outline btn-sm">Know More</a>'+
                      '</div>'+
                    '</div>'+
                    '</div>';
                        }
                        // console.log(result);
                        $('#web_pengumuman').html(s);

                    }
                })
            }

            web_pengumuman();

        
            

        });
    </script>
@stop
