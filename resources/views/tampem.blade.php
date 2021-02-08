<div class="modal fade" id="modal-form" tabindex="1" data-backdrop="static" data-keyboard="false" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <form id="form-peminjaman" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                            <input type="hidden" id="id" name="id">
                
                <div class="form-group row">
                    <label for="no_pinjam" class="col-md-4 col-form-label text-md-right">{{ __('Nomer Peminjaman') }}</label>

                    <div class="col-md-6">
                        <input id="no_pinjam" type="text" class="form-control" name="no_pinjam" required autocomplete="off" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_agt" class="col-md-4 col-form-label text-md-right">{{ __('Nama Anggota') }}</label>
        
                    <div class="col-md-6">
                        <select name="id_agt" id="id_agt" class="form-control">
                            <option>Pilih Anggota</option>
                                @foreach($pm as $value)
                                    <option value="{{$value->id}}">{{$value->nm_agt}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_buku" class="col-md-4 col-form-label text-md-right">{{ __('Judul Buku') }}</label>
        
                    <div class="col-md-6">
                        <select name="id_buku" id="id_buku" class="form-control">
                            <option>Pilih Buku</option>
                                @foreach($pn as $value)
                                    <option value="{{$value->id}}">{{$value->judul}}</option>
                                @endforeach
                        </select>
                        <span class="help-block text-danger"></span>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tgl_pjm" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pinjam') }}</label>

                    <div class="col-md-6">
                        <input id="tgl_pjm" type="text" class="form-control" name="tgl_pjm" required autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tgl_hsblk" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Harus Kembali') }}</label>

                    <div class="col-md-6">
                        <input id="tgl_hsblk" type="text" class="form-control" name="tgl_hsblk" required autocomplete="off">
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

        $('#tgl_pjm').datepicker({
            format: 'yyyy-mm-dd',
        });
        $('#tgl_pjm').datepicker('setDate', 'today');

        var tgl_pjm =  $( "#tgl_pjm" ).val();
            $.ajax({
                url : "{{ url('get-tglkmbl') }}" + '/' +tgl_pjm,
                type : "GET",
                success : function(data) {
                    $( "#tgl_hsblk" ).val(data);
                },
                error : function(data){
                    
                }
            });
</script>