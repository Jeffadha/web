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
                                <li class="breadcrumb-item active" aria-current="page">Update</li>
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
                            <label>Judul Pengumuman</label>
                            <input class="form-control" type="text" value="{{ $data->judul }}" name="judul"
                                placeholder="Judul pengumuman">
                        </div>

                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control selectkategori" style="width: 100%;" name="category_id"
                                id="select_kategori"></select>
                        </div>
                        <div class="form-group">
                            <label>Isi Pengumuman</label>
                            <textarea id="editor1" name="content" rows="10" cols="80">{{ htmlspecialchars_decode($data->content) }}
                        </textarea>
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            <div class="tags-default">
                                <input type="text" name="tags" value="{{ $data->tags }}" data-role="tagsinput"
                                    placeholder="add tags" />
                            </div>
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

        var id = '{{ $data->id_pengumuman }}';
        var category_id = '{{ $data->category_id }}';
        var category_name = '{{ $data->name }}';

        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // $('.selectkategori').val(category_id);
            // $('.selectkategori').select2().trigger('change');
            // $(".selectkategori").select2().val(category_id).trigger('change');

            $(".selectkategori").empty().append('<option value="' + category_id + '">' + category_name +
                '</option>').val(category_id).trigger('change');
            //select category
            $('.selectkategori').select2({
                allowClear: true,
                placeholder: 'Select Category',
                ajax: {
                    dataType: 'json',
                    url: "{{ route('select.category') }}",
                    //delay: 100,
                    data: function(params) {
                        return {
                            search: params.term
                        }
                    },
                    processResults: function(data) {
                        var data_array = [];
                        data.data.forEach(function(value, key) {
                            data_array.push({
                                id: value.id,
                                text: value.text
                            })
                        });

                        return {
                            results: data_array
                        }
                    }
                }
            }).on('selectkategori:select', function(evt) {
                $(".selectkategori option:selected").val(category_id);
            });

            //$(".selectkategori").val(category_id).trigger('change.select2');
            //$(".selectkategori option[value="+category_id+"]").attr('selected', 'selected');

            $('#btSave').on('click', function(event) {
                event.preventDefault();
                // document.querySelector("[name=content").value = instance.getData();
                CKEDITOR.instances['editor1'].updateElement();
                var form_data = new FormData(document.getElementById("form_add"));
                $.ajax({
                    url: "{{ route('pengumuman.save') }}",
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
                            $('#form_add')[0].reset();
                            $("#btSave").prop('disabled', false);
                        }
                    }
                })
            });
        });
    </script>
@stop
