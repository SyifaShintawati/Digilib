<div class="modal fade" id="modal-form" tabindex="1" data-backdrop="static" data-keyboard="false" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="form-jenis" method="post" class="form-horizontal" data-toggle="validator">
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
                        <label for="jenis" class="col-md-4 control-label">{{ __('Jenis Buku') }}</label>

                        <div class="col-md-6">
                            <input id="jenis" type="text" class="form-control border-input" name="jenis" autocomplete="off" required autofocus>
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