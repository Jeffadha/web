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
                    <h3 class="page-title">Pengumuman</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">List Data</li>
                                {{-- <li class="breadcrumb-item" aria-current="page">Fakultas</li> --}}
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
                    <p><a href="{{ route('pengumuman_create') }}" type="button" class="btn btn-info"><i
                                class="fa fa-plus"></i> Tambah</a></p>

                    <div class="table-responsive">
                        <table id="tbpengumuman" class="table table-sm table-hover table-striped" width="100%">
                            <thead class="bg-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Action</th>
                                    <th>Title</th>
                                    <th>Thumbnail</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- modal Add -->
            <div class="modal fade" id="modal_add">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah pengumuman</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form id="form_add" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                @csrf
                                <div class="form-group">
                                    <label>Judul pengumuman</label>
                                    <input class="form-control" type="text" name="judul" placeholder="Judul pengumuman">
                                </div>
                                <div class="form-group">
                                    <label for="formFiles" class="form-label">File PDF</label>
                                    <input class="form-control" type="file" accept="pdf/*" id="formFiles" name="gambar">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">File Gambar</label>
                                    <input class="form-control" type="file" accept="image/*" id="formFile" name="gambar">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary float-end" id="btSave">Save
                                    changes</button>
                            </div>
                    </div>
                    <!-- /.modal-content -->
                    </form>
                </div>
                <!-- /.modal-dialog -->
            </div>

            <!-- modal Area -->
            <!-- modal Edit -->
            <div class="modal fade" id="modal_edit">
                <form id="form_edi" method="POST" enctype="multipart/form-data">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Pengumuman</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @csrf
                                <div class="form-group">
                                    <label>Judul Pengumuman</label>
                                    <input class="form-control" type="text" id="ejudul" name="judul"
                                        placeholder="Judul Pengumuman">
                                </div>
                                <div class="form-group">
                                    <label for="formFiles" class="form-label">File PDF</label>
                                    <input class="form-control" type="file" accept="pdf/*" id="formFiles" name="gambar">
                                </div>
                                <div class="form-group">
                                    <label for="formFile" class="form-label">File Gambar</label>
                                    <input class="form-control" type="file" accept="image/*" id="formFile" name="gambar">
                                </div>
                            </div>
                                <div class="form-group" id="show_file">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary float-end" id="btSave">Save
                                    changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </form>
                <!-- /.modal-dialog -->
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


            var table = $('#tbpengumuman').DataTable({
                lengthChange: false,
                processing: true,
                serverSide: true,
                cache: false,
                searching: true,
                info: true,
                lengthChange: false,
                pageLength: 50,
                ajax: {
                    url: "{{ route('pengumuman.data') }}",
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
                        data: 'judul',
                        name: 'judul',
                        width: '40%'
                    },
                    {
                        data: 'image',
                        name: 'image',
                        width: '10%',
                        className: 'text-center'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        width: '10%'
                    },
                ]
            });

            table.on('click', '#bt_edit', function() {
                var file = $(this).data('show');
                var contentArt = $(this).data('isi');
                $tr = $(this).closest('tr');
                var data = table.row($tr).data();
                console.log(contentArt);
                

                // var html = $(editor.editable.$);
                // $('#editor2',html).html(data['content']);

                // editor.setData(data['content']);
                // editor.getData();

                //editor.insertHtml(contentArt);
                // var teshtml = $(contentArt).html(contentArt);
                // console.log(teshtml);


                //var myinstance = CKEDITOR.instances.editor2;

                // if (myinstance) {
                //       myinstance.setData(htmlDecode(contentArt));

                //     } else{
                //          CKEDITOR.replace( 'description', {
                //            height: '500',
                //            width: '750',
                //            on: {
                //                instanceReady: function() {
                //                    // this is current editor instance
                //                    this.insertHtml(htmlDecode(contentArt) );
                //                   }
                //               },
                //                options
                //             } );
                //          } 
                //    function htmlDecode(input){
                //        var e = document.createElement('div');
                //        e.innerHTML = input;
                //        return e.childNodes[0].nodeValue;
                //    }

                //myinstance.insertText(contentArt);

                $('#ejudul').val(data['judul']);
                $('#eformFile').on('blur', function(e) {
                    $('#eformFile').val(data['gambar']); // won't work
                });

                show_img(file);
                $('#modal_edit').modal('show');

            });

            function show_img(file) {
                var file_show = '<div class="col-sm-3">' +
                    '<img class="img-fluid rounded mx-auto d-block" src="' + file + '" alt="Photo">' +
                    '</div>';

                $('#show_file').html(file_show);
            }





            $('#form_add').on('submit', function(event) {
                event.preventDefault();
                // document.querySelector("[name=content").value = instance.getData();
                var form_data = new FormData(this);
                $.ajax({
                    url: "{{ route('pengumuman.save') }}",
                    method: "POST",
                    data: new FormData(this),
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $("#btSave").prop('disabled', true);
                    },
                    success: function(data) {
                        if (data.error) {
                            showToastr('error', 'Error!', data.error);
                            table.ajax.reload();
                            $("#btSave").prop('disabled', false);
                        } else if (data.success) {
                            $('#modal_add').modal('hide');
                            showToastr('success', 'Success!', data.success);
                            table.ajax.reload();
                            $('#form_add')[0].reset();
                            $("#btSave").prop('disabled', false);
                        }
                    }
                })
            });
        });
    </script>
@stop
