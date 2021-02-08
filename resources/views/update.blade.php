@include('layouts.app')
    @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>
                <div class="card-body">
                   <form action="{{url('/upp')}}" method="post"> {{csrf_field()}} @csrf
                       <input type="hidden" name="id" value="{{$value->id}}">

                        <div class="form-group row">
                            <label for="no_pinjam" class="col-md-4 col-form-label text-md-right">{{ __('Nomer Peminjaman') }}</label>

                            <div class="col-md-6">
                                <input id="no_pinjam" type="text" class="form-control{{ $errors->has('no_pinjam') ? ' is-invalid' : '' }}" name="no_pinjam" value="{{$value->no_pinjam}}" readonly autofocus>

                                @if ($errors->has('no_pinjam'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_pinjam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="id_agt" name="id_agt" class="col-md-4 col-form-label text-md-right">Anggota</label>
                        <div class="col-md-6">
                                <select name="id_agt" class="form-control{{ $errors->has('id_agt') ? ' is-invalid' : '' }}">
                                    <!-- <option value="{{$value->id_agt}}">{{$value->id_agt}}</option> -->
                                    @foreach($ang as $val)
                                    <option value="{{$val->id}}"
                                        @if ($value->id_agt == $val->id)
                                            selected
                                        @endif
                                    >
                                        {{$val->nm_agt}}</option>
                                    @endforeach
                                </select>
                        </div>
                        </div>


                        <div class="form-group row">
                            <label for="id_buku" name="id_buku" class="col-md-4 col-form-label text-md-right">Buku</label>
                        <div class="col-md-6">
                                <select name="id_buku" class="form-control{{ $errors->has('id_buku') ? ' is-invalid' : '' }}">
                                    <!-- <option value="{{$value->id_buku}}">{{$value->id_buku}}</option> -->
                                    @foreach($buk as $va)
                                    <option value="{{$va->id}}"
                                        @if ($value->id_buku == $va->id)
                                            selected
                                        @endif
                                    >
                                        {{$va->judul}}</option>
                                    @endforeach
                                </select>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_pjm" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pinjam') }}</label>

                            <div class="col-md-6">
                                <input type="date" name="tgl_pjm" id="tgl_pjm" class="form-control" value="{{$value->tgl_pjm}}" require>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_hsblk" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Harus Kembali') }}</label>

                            <div class="col-md-6">
                                <input type="date" name="tgl_hsblk" id="tgl_hsblk" class="form-control" value="{{$value->tgl_hsblk}}" require>
                            </div>
                        </div>

                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>