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
                        <h2 class="page-title text-white">{{ $prodi[0]->nama_prodi }}</h2>
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
                                    
                                    <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tabdua"
                                            role="tab" aria-expanded="true"><span class="hidden-sm-up"><i
                                                    class="ion-person"></i></span> <span class="hidden-xs-down">Visi, Misi
                                                dan Tujuan</span></a> </li>

                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tabdua" role="tabpanel" aria-expanded="true">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7 col-12 text-center">
                                                <h1 class="mb-15">Visi</h1>
                                                <hr class="w-100 bg-primary">
                                            </div>
                                        </div>
                                        <div class="p-15 ">
                                            <p style="text-align: justify;">
                                                
                                                {!! htmlspecialchars_decode($prodi[0]->visi) !!}
                                            </p>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7 col-12 text-center">
                                                <h1 class="mb-15">Misi</h1>
                                                <hr class="w-100 bg-primary">
                                            </div>
                                        </div>
                                        <div  class="p-15">
                                            <p style="text-align: justify;">
                                            
                                                {!! htmlspecialchars_decode($prodi[0]->misi) !!}
                                            

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
                                           
                                                {!! htmlspecialchars_decode($prodi[0]->tujuan) !!}

                                            

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
