<div class="modal fade" id="modal-form" tabindex="1" data-backdrop="static" data-keyboard="false" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <form id="form-buku" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data"> {{ csrf_field() }} {{ method_field('POST') }}
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times; </span>
                    </button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">

                    <input type="hidden" id="id" name="id">

                        <div class="form-group">
                            <label for="id_jb" class="col-md-4 control-label">{{ __('Jenis Buku') }}</label>
                            
                            <div class="col-md-6">
                                <select name="id_jb" id="id_jb" class="form-control border-input" autofocus>
                                    @foreach($jns as $val)
                                        <option value="{{$val->id}}">{{$val->jenis}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">{{ __('Judul Buku') }}</label>
                            
                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control border-input" name="judul" required autocomplete="off">
                            <span class="help-block text-danger"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengarang" class="col-md-4 control-label">{{ __('Pengarang') }}</label>
                            
                            <div class="col-md-6">
                                <input id="pengarang" type="text" class="form-control border-input" name="pengarang" required autocomplete="off">
                                                            <span class="help-block text-danger"></span>    
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="isbn" class="col-md-4 control-label">{{ __('No ISBN') }}</label>
                            
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control border-input" name="isbn" required autocomplete="off">
                                                             <span class="help-block text-danger"></span>   
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="thn" class="col-md-4 control-label">{{ __('Tahun Terbit') }}</label>
                            
                            <div class="col-md-6">
                                <input type="text" name="thn" id="thn" class="form-control border-input" required autocomplete="off">
                                                            <span class="help-block text-danger"></span>    
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="penerbit" class="col-md-4 control-label">{{ __('Penerbit') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="penerbit" id="penerbit" class="form-control border-input" required autocomplete="off">
                                                            <span class="help-block text-danger"></span>    
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="stok" class="col-md-4 control-label">{{ __('Tersedia') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="stok" id="stok" class="form-control border-input" required autocomplete="off">
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