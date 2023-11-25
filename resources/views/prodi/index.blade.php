@extends('layouts.master_sidebar')

@section('title', 'Web Admin')

@section('css')
    <style type="text/css">
    </style>
@stop

@section('content')
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Prodi</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Prodi Data</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-body">
                    <p><a href="{{ route('prodi.create') }}" type="button" class="btn btn-info"><i
                        class="fa fa-plus"></i> Tambah</a>
                    </p>

                    <div class="table-responsive">
                        <table id="tbprodi" class="table table-sm table-hover table-striped" width="100%">
                            <thead class="bg-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Action</th>
                                    <th>Nama Prodi</th>
                                    <th>Thumbnail</th>
                                    <th>Degree</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>

        </section>
        <!-- /.content -->
        @include('layouts.buttonhome')
    </div>
@endsection
@section('script-master')
    <script type="text/javascript">
        var instance;
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('#tbprodi').DataTable({
                lengthChange: false,
                processing: true,
                serverSide: true,
                cache: false,
                searching: true,
                info: true,
                lengthChange: false,
                pageLength: 50,
                ajax: {
                    url: "{{ route('prodi.data') }}",
                    method: 'POST',
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        width: '5%',
                        "sClass": "text-center"
                    },
                    {
                        data: 'aksi',
                        name: 'aksi',
                        width: '15%',
                        "sClass": "text-center"
                    },
                    {
                        data: 'nama_prodi',
                        name: 'nama_prodi',
                        width: '40%',
                        className: 'text-center'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        width: '10%'
                    },
                    {
                        data: 'degree',
                        name: 'degree',
                        width: '40%',
                        className: 'text-center'
                    },
                ]
            });

            function show_img(file) {
                var file_show = '<div class="col-sm-3">' +
                    '<img class="img-fluid rounded mx-auto d-block" src="' + file + '" alt="Photo">' +
                    '</div>';

                $('#show_file').html(file_show);
            }
            
        });
        
    </script>
@stop
