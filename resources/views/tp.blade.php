<div class="modal fade" id="modal-form" tabindex="1" data-backdrop="static" data-keyboard="false" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

          <form id="form-pengembalian" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">{{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                  <input type="text" id="id_buku" name="id_buku">

            <div class="form-group row">
                <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Anggota') }}</label>

                <div class="col-md-6">
                    <select name="id" id="id" class="form-control" autofocus>
                      <option>Pilih Anggota</option>
                        @foreach($pnb as $value)
                          <option value="{{$value->id}}">{{$value->anggota->nm_agt}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
              <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Buku yg Dipinjam') }}</label>

                <div class="col-md-6">
                  <input id="judul" type="text" class="form-control" name="judul" autocomplete="off">
                  <span class="help-block text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
              <label for="tgl_kbl" class="col-md-4 col-form-label text-md-right">{{ __('Dikembalikan Pada') }}</label>

              <div class="col-md-6">
                <input id="tgl_kbl" type="text" class="form-control" name="tgl_kbl" autocomplete="off">
                <span class="help-block text-danger"></span>
              </div>
            </div>

            <div class="modal-footer">
              <button type="submit" class="btn btn-primary btn-save">Submit</button>
            </div>

                </div>

            </form>

        </div>
    </div>
</div>

<script src="{{ asset('assets/jquery/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<script type="text/javascript">

    $('#tgl_kbl').datepicker({
      format: 'yyyy-mm-dd',
    });
    $('#tgl_kbl').datepicker('setDate', 'today');


    $( "#id" ).change(function() {
      var id =  $( "#id" ).val();
        $.ajax({
          url : "{{ url('get-judul') }}" + '/' +id,
          type : "GET",
            success : function(data) {
              $( "#judul" ).val(data.judul);
              $( "#id_buku" ).val(data.id_buku);
            },
            error : function(data){
            }
        });
        return false;
    });
</script>