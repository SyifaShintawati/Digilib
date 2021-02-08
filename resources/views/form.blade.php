<div class="modal fade" id="modal-form" tabindex="1" data-backdrop="static" data-keyboard="false" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form id="form-anggota" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                            <input type="hidden" id="id" name="id">

                    <div class="form-group">
                        <label for="no_agt" class="col-md-4 control-label">{{ __('Nomer Anggota') }}</label>

                        <div class="col-md-6">
                            <input name="no_agt" id="no_agt" type="text" class="form-control border-input border-input" required autocomplete="off" autofocus>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nm_agt" class="col-md-4 control-label">{{ __('Nama Lengkap') }}</label>

                        <div class="col-md-6">
                            <input name="nm_agt" id="nm_agt" type="text" class="form-control border-input" required autocomplete="off">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="col-md-4 control-label">{{ __('Alamat Lengkap') }}</label>

                        <div class="col-md-6">
                            <textarea name="alamat" id="alamat" class="form-control border-input" required autocomplete="off"></textarea> 
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="kota" class="col-md-4 control-label">{{ __('Kota Asal') }}</label>

                        <div class="col-md-6">
                            <input id="kota" type="text" class="form-control border-input" name="kota" required autocomplete="off">
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tlp" class="col-md-4 control-label">{{ __('No Telepon') }}</label>

                        <div class="col-md-6">
                            <input type="text" name="tlp" id="tlp" class="form-control border-input" required autocomplete="off">
                            
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