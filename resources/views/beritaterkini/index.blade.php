@extends('layouts.master_sidebar')

@section('title','Web Admin')

@section('css')
<style type="text/css">
</style>
@stop

@section('content')
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Berita Terkini</h3>
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
                    <p><a href="{{ route('berita_terkini_create') }}" type="button" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a></p>

                    <div class="table-responsive">
                        <table id="tbberita" class="table table-sm table-hover table-striped" width="100%">
                            <thead class="bg-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Action</th>
                                    <th>Title</th>
                                    <th>Thumbnail</th>
                                    <th>Author</th>
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
                  <h4 class="modal-title">Tambah Berita</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 
                <form id="form_add" method="POST" enctype="multipart/form-data">  
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Judul Berita</label>
                        <input class="form-control" type="text" name="judul" placeholder="Judul Berita">
                    </div>

                        <!-- /.form-group -->
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control selectkategori" style="width: 100%;" name="select_kategori" id="select_kategori"></select>
                    </div>
                    <div class="form-group">
                        <label>Isi Berita</label>
                        <textarea id="editor1" name="content" rows="10" cols="80">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Tags</label>
                        <select class="form-control select2" style="width: 100%;" multiple="multiple" data-placeholder="Pilih Tags" name="select_tags" id="select_tags"></select> 
                    </div>
                    <div class="form-group">
                        <label class="form-label">Minimal</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="formFile" class="form-label">File Gambar</label>
                        <input class="form-control" type="file" accept="image/*" id="formFile" name="gambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary float-end" id="btSave">Save changes</button>
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
                <h4 class="modal-title">Edit Berita</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            <div class="modal-body">
                @csrf
                    <div class="form-group">
                    <label>Judul Berita</label>
                    <input class="form-control" type="text" id="ejudul" name="judul" placeholder="Judul Berita">
                </div>
                <div class="form-group">
                    <label>Isi Berita</label>
                    <textarea id="editor2" name="content" rows="10" cols="80">
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="eformFile" class="form-label">File Gambar</label>
                    <input class="form-control" type="file" accept="image/*" id="eformFile" name="egambar">
                </div>
                <div class="form-group" id="show_file">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary float-end" id="btSave">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        </form>
        <!-- /.modal-dialog -->
    </div>

        </section>
        <!-- /.content -->
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

    $(function () {
        "use strict";
        CKEDITOR.replace('editor2');
        $('.textarea').wysihtml5();
        // CKEDITOR.replace('editor2', {
        //     extraPlugins: 'simplebox'
        // });
    });


    var table = $('#tbberita').DataTable({
      lengthChange: false,
      processing: true,
      serverSide: true,
      cache: false,
      searching: true,
      info: true,
      lengthChange: false,
      pageLength: 50,
      ajax: {
        url: "{{ route('beritaterkini.data') }}",
        method: 'POST',
      },
      columns: [
        { data: 'DT_RowIndex', name: 'DT_RowIndex', width: '5%', "sClass": "text-center"},
        { data: 'aksi', name: 'aksi', width: '15%', "sClass": "text-center"},
        { data: 'judul', name: 'judul', width: '40%'},
        { data: 'image', name: 'image', width: '10%', className: 'text-center'},
        { data: 'fullname', name: 'fullname', width: '20%'},
        { data: 'created_at', name: 'created_at', width: '10%'},
      ]
    });

    table.on('click', '#bt_edit', function() {
        var file = $(this).data('show');
        var contentArt = $(this).data('isi');
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        console.log(contentArt);
        // CKEDITOR.instances.editor2.insertHtml( '<p>This is a new paragraph.</p>' );

        var editor = CKEDITOR.instances['editor2'];
        
        // var html = $(editor.editable.$);
        // $('#editor2',html).html(data['content']);

        // editor.setData(data['content']);
        // editor.getData();
        
        editor.setData(contentArt, {
                callback: function() {
                        this.checkDirty(); // true
                    }
                });
        
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
        $('#eformFile').on('blur', function (e) {
            $('#eformFile').val(data['gambar']); // won't work
        });

        show_img(file);
      $('#modal_edit').modal('show'); 
    
    });

    function show_img(file){
      var file_show = '<div class="col-sm-3">'+
                          '<img class="img-fluid rounded mx-auto d-block" src="'+file+'" alt="Photo">'+
                      '</div>';

      $('#show_file').html(file_show);
    }

    function tags() {
        $.ajax({
            type: 'GET',
            url: "{{ route('select.tags') }}",
            success: function(result) {
                var jml = result.length;
                var s = '<option value="">Pilih</option>';
                for (i = 0; i < jml; i++) {
                    s = s + '<option value="' + result[i].id + '"> ' + result[i].name + '</option>';
                }
                // console.log(result);
                $('#select_tags').html(s);
            }
        })
    }
    tags();


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
    $(".selectkategori option:selected").val();
});


    $('#form_add').on('submit', function(event) {
            event.preventDefault();
            // document.querySelector("[name=content").value = instance.getData();
            CKEDITOR.instances['editor1'].updateElement();
            var form_data = new FormData(this);
            $.ajax({
                url: "{{ route('beritaterkini.save') }}",
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