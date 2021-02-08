<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('assets/bootstrap/logo.jpg') }}">

    <title>OnPerpus | Jenis</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- dataTables --}}
    <link href="{{ asset('assets/datatables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

      {{-- SweetAlert2 --}}
      <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
      <link href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('assets/bootstrap/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/bootstrap/js/ie-emulation-modes-warning.js') }}"></script>

    <style type="text/css">
      .content{
        background-image: url(adminn/img/p5.jpg);
        background-size:cover;
      }
    </style>
    
  </head>
  <body>

@extends('layouts.dash')
@section('content')

      <div class="content">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Jenis
                        <a onclick="tam()" class="btn btn-primary pull-right">Tambah Jenis Buku</a>
                    </h3>
                </div>

                <div class="panel-body">
                    <a href="{{ route('jenis.export') }}" target="_blank" class="btn btn-default pull-right">Export PDF</a><br><br>
                      <table id="jenis-table" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="30">Id</th>
                                <th>Jenis Buku</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                  @include('tam')
                </div>
            </div>
        </div>
      </div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('assets/jquery/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>

    <!--tempalte dri admin-->
    <script src="adminn/js/jquery.min.js" type="text/javascript"></script>
    <script src="adminn/js/bootstrap.min.js" type="text/javascript"></script>

    {{-- dataTables --}}
    <script src="{{ asset('assets/dataTables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>

    {{-- Validator --}}
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script>

    <script type="text/javascript">
      var table = $('#jenis-table').DataTable({
                      // processing: true,
                      serverSide: true,
                      ajax: "{{ route('api.jenis') }}",
                      columns: [
                        {data: 'DT_RowIndex', name: 'id'},
                        {data: 'jenis', name: 'jenis'},
                        {data: 'action', name: 'action', orderable: false, searchable: false}
                      ]
                    });

      function tam() {
        save_method = "add";
        $('input[name=_method]').val('POST');
        $('#modal-form').modal('show');
        $('#modal-form').appendTo("body").modal('show');
        $('#modal-form form')[0].reset();
        $('.modal-title').text('Add jenis');
      }

      function ed(id) {
        save_method = 'edit';
        $('input[name=_method]').val('PATCH');
        $('#modal-form').appendTo("body").modal('show');
        $('#modal-form form')[0].reset();
        $.ajax({
          url: "{{ url('jenis') }}" + '/' + id + "/edit",
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            $('#modal-form').modal('show');
            $('.modal-title').text('Edit jenis');

            $('#id').val(data.id);
            $('#jenis').val(data.jenis);
          },
          error : function() {
              alert("Nothing Data");
          }
        });
      }


      function del(id){
          var csrf_token = $('meta[name="csrf-token"]').attr('content');
          swal({
              title: 'Apa Kamu Yakin?',
              text: "Anda Tidak Dapat Mengembalikannya Kembali!!",
              type: 'warning',
              showCancelButton: true,
              cancelButtonColor: '#d33',
              confirmButtonColor: '#3085d6',
              confirmButtonText: 'Ya, Hapus!'
          }).then(function () {
              $.ajax({
                  url : "{{ url('jenis') }}" + '/' + id,
                  type : "POST",
                  data : {'_method' : 'DELETE', '_token' : csrf_token},
                  success : function(data) {
                      table.ajax.reload();
                      swal({
                          title: 'Sukses!',
                          text: data.message,
                          type: 'success',
                          timer: '1500'
                      })
                  },
                  error : function () {
                      swal({
                          title: 'Oops...',
                          text: data.message,
                          type: 'error',
                          timer: '1500'
                      })
                  }
              });
          });
        }

        $(function(){
            $('#modal-form form').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('jenis') }}";
                    else url = "{{ url('jenis') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
                        // data : $('#modal-form form').serialize(),
                        data: new FormData($("#modal-form form")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-form').modal('hide');
                            table.ajax.reload();
                            swal({
                                title: 'Sukses!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                        }
                    });
                    return false;
                }
            });
        });

    </script>
  </body>
</html>

@endsection