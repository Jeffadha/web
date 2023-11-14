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
                        <h2 class="page-title text-white">Profil UMUKA</h2>
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
                                                    class="ion-home"></i></span> <span class="hidden-xs-down">Sejarah</span>
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
                                                <h1 class="mb-15">Sejarah</h1>
                                                <hr class="w-100 bg-primary">
                                            </div>
                                        </div>
                                        <div class="p-0">
                                            <p style="text-align: justify;">Pendirian dan keberadaan Perguruan Tinggi
                                                Muhammadiyah (PTM) di Karanganyar memiliki akar sejarah yang kuat dan
                                                panjang.
                                                Dimulai pada tahun 1970 Institut Keguruan dan Ilmu Pendidikan Muhammadiyah
                                                Karanganyar berdiri. Tahun 1985 IKIP Muhammadiyah Karanganyar berubah
                                                menjadi
                                                Program DiplomaTiga (D3) Fakultas Keguruan dan Ilmu Pendidikan Universitas
                                                Muhammadiyah Surakarta Kampus Karanganyar. Program Diploma Tiga (D3) FKIP
                                                UMS
                                                terdiri dari Program Studi Pendidikan Pancasila dan Kewarganegaraan
                                                (PMP-KN),
                                                Program Studi Matematika, Program Studi Bahasa Inggris, dan Program
                                                StudiBahasa
                                                Indonesia, mahasiswa 3400 orang. Pada tahun 1988 dibuka lagi Strata Satu
                                                (S1)
                                                Program Studi Tarbiyah Fakultas Ilmu Agama Islam (FIAI) Universitas
                                                Muhammadiyah
                                                Surakarta dan tahun 1990, dibuka jenjang S1 (transfer) keempat program studi
                                                dari D3 FKIP UMS. Selanjutnya, berdasarkan Surat Keputusan Direktorat
                                                Jenderal
                                                Pendidikan Tinggi Nomor: 270/Dikti/Kep/1992 tanggal 1 Juni 1992 disahkan
                                                pendirian Politeknik Muhammadiyah Karanganyar, membuka empat (4) program
                                                studi:
                                                Teknik Elektro (TE), Teknik Tekstil (TE), Desain Tekstil (DT) dan Akuntansi.
                                                Tahun 2007 s.d. tahun 2012 diselenggarakan Program Guru Sekolah Dasar (PGSD)
                                                dan
                                                Program Guru Pendidikan Anak Usia Dini (PG PAUD) Fakultas.</p>
                                            <p style="text-align: justify;">Keguruan dan Ilmu Pendidikan Universitas
                                                Muhammadiyah Surakarta di Karanganyar. Ketiga institusi perguruan Tinggi
                                                penyelenggra vokasi yaitu Akademi Sekretari dan manajemen Santa Anna
                                                Semarang ,
                                                Akademi Peternaan Karanganyar dan Akademi Pariwisata Widya Nusantara
                                                Surakarta
                                                Badan Penyelengaranya mempunyai legalitas dengan akta notaris dengan
                                                penguatan
                                                keputusan Menkumham ,membuat kesepakatan untuk bergabung dengan akta
                                                notaris,
                                                mempunyai akta pendirian baik institusinya maupun program studinya,serta
                                                mempunyai dokumen kebijakan SPMI.</p>
                                            <p style="text-align: justify;">
                                                Berdasarkan hasil musyawarah dari badan penyelenggara ketiga Perguruan
                                                Tinggi
                                                vokasi tersebut bersama Pimpinan Daerah Muhammadiyah karanganyar bahwa
                                                mereka
                                                sepakat bergabung untuk mendirikan Perguruan Tinggi baru dan menyerahkan
                                                tata
                                                kelolanya kepada bentuk Perguruan tinggi baru yang bernama Universitas
                                                Muhammadiyah Karanganyar. Adapun alasan penggabungan agar dapat
                                                menyelenggarakan
                                                program studi dari berbagai bidang ilmu, dan adanya persamaan visi agar
                                                segera
                                                berdiri suatu Universitas yang dapat memenuhi kebutuhan masyarakat dan dapat
                                                menyelenggarakan pendidikan yang lebihbanyak/lengkap/ dan berkembang lebih
                                                pesat
                                                dari pada Perguruan Tinggi sebelumnya yang hanya terbatas pada pendididikan
                                                vokasi yaitu Prodi Produksi ternak, Sekretari dan perhotelan dalam jenjang
                                                D3.Kesepakatan tersebut disamping disetujui ketiga badan penyelenggara dari
                                                masing masing Perguruan Tinggi vokasi juga disetujui oleh senat Perguruan
                                                Tinggi
                                                tersebut .Untuk itu perlu adanya Perguruan Tinggi baru yang bernama
                                                Universitas
                                                Muhammadiyah karanganyar sebagai pengelolanya.
                                            </p>
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
