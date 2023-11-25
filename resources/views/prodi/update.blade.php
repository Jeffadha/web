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
                                <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                <form id="form_add" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        @csrf
                        <div class="form-group">
                            <label>Nama Prodi</label>
                            <input class="form-control" value="{{ $data->nama_prodi }}" type="text" name="nama_prodi" placeholder="Nama Prodi">
                        </div>
                        <div class="form-group">
                            <label for="degree">Degree</label>
                            <select class="form-control" name="degree" id="degree">
                                <option value="{{ $data->degree }}">{{ $data->degree }}</option>
                                <option value="D1">D1</option>
                                <option value="D2">D2</option>
                                <option value="D3">D3</option>
                                <option value="D4">D4</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formFile" class="form-label">File Gambar</label>
                            <input class="form-control"  type="file" accept="image/*" id="formFile" name="gambar">
                        </div>
                        <div class="form-group">
                            <label>Visi</label>
                            <textarea id="editor1" name="visi" rows="10" cols="80">
                                {{ htmlspecialchars_decode($data->visi) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Misi</label>
                            <textarea id="editor2" name="misi" rows="10" cols="80">
                                {{ htmlspecialchars_decode($data->misi) }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Tujuan</label>
                            <textarea id="editor3" name="tujuan" rows="10" cols="80">
                                {{ htmlspecialchars_decode($data->tujuan) }}
                            </textarea>
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
                CKEDITOR.replace('editor1');
                CKEDITOR.replace('editor2');
                CKEDITOR.replace('editor3');
        var instance;
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })

            $('#btSave').on('click', function(event) {
                event.preventDefault();
                // document.querySelector("[name=content").value = instance.getData();
                CKEDITOR.instances['editor1'].updateElement();
                CKEDITOR.instances['editor2'].updateElement();
                CKEDITOR.instances['editor3'].updateElement();
                var form_data = new FormData(document.getElementById("form_add"));
                
                $.ajax({
                    url: "{{ route('prodi.update',['id' => $data->id_prodi]) }}",
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
                            showToastr('error', 'Error!', data.error);
                            $("#btSave").prop('disabled', false);
                        } else if (data.success) {
                            showToastr('success', 'Success!', data.success);
                            $("#btSave").prop('disabled', false);
                        }
                    }
                })
            });
        });
    </script>
@stop
