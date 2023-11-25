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
                    <h3 class="page-title">PMB</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="box">
                <form id="form_update" enctype="multipart/form-data">
                    <div class="box-body">
                        @csrf
                        @method('POST')
                        
                        <div class="form-group">
                            <label>Judul</label>
                            <input id="judul" class="form-control" type="text" value="{{ $data->judul }}" name="judul" placeholder="judul">
                        </div>
                        <div class="form-group">
                            <label for="formFile" class="form-label">File Gambar</label>
                            <input class="form-control" type="file" accept="image/*" id="formFile" name="gambar">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="button" class="btn btn-warning me-1"><i class="ti-trash"></i> Cancel </button>
                        <button type="button" class="btn btn-primary" id="btSave"><i class="ti-save-alt"></i> Save
                        </button>
                    </div>
                </form>
            </div>

        </section>
        <!-- /.content -->
        @include('layouts.buttonback')
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

            $('#btSave').on('click', function(event) {
                event.preventDefault();
                var form_data = new FormData(document.getElementById("form_update"));
                // document.querySelector("[name=content").value = instance.getData();
                // CKEDITOR.instances['judul1'].updateElement();

                $.ajax({
                    url: "{{ route('pmb.update',['id' => $data->id_pmb]) }}",
                    method: "POST",
                    data: form_data,
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        $("#btSave").prop('disabled', true);
                    },
                    success: function(data) {
                        if (data.error) {
                            console.log(data)
                            showToastr('error', 'Error!', data.error);
                            $("#btSave").prop('disabled', false);
                        } else if (data.success) {
                            console.log(data)
                            showToastr('success', 'Success!', data.success);
                            $('#form_add')[0].reset();
                            $("#btSave").prop('disabled', false);
                        }
                    }
                })
            });
        });
    </script>
@stop
