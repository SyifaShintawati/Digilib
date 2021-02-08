<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/css/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
</head>
<body>
@include('layouts.app')
    @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>
                <div class="card-body">
                    <form action="{{url('/dit')}}" method="post"> {{csrf_field()}} @csrf
                        <input type="hidden" name="id" value="{{$value->id}}">

                        <div class="form-group row">
                            <label for="id_jb" name="id_jb" class="col-md-4 col-form-label text-md-right">Jenis Buku</label>
                        <div class="col-md-6">
                                <select name="id_jb" class="form-control{{ $errors->has('id_jb') ? ' is-invalid' : '' }}">
                                    <!-- <option value="{{$value->id_jb}}">{{$value->id_jb}}</option> -->
                                    @foreach($jns as $val)
                                    <option value="{{$val->id}}"
                                        @if ($value->id_jb == $val->id)
                                            selected
                                        @endif
                                    >
                                        {{$val->jenis}}</option>
                                    @endforeach
                                </select>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul Buku') }}</label>

                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" name="judul" value="{{$value->judul}}" required autofocus>

                                @if ($errors->has('judul'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pengarang" class="col-md-4 col-form-label text-md-right">{{ __('Pengarang') }}</label>

                            <div class="col-md-6">
                                <input id="pengarang" type="text" class="form-control{{ $errors->has('pengarang') ? ' is-invalid' : '' }}" name="pengarang" value="{{$value->pengarang}}" required>

                                @if ($errors->has('pengarang'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pengarang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="isbn" class="col-md-4 col-form-label text-md-right">{{ __('No ISBN') }}</label>

                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control{{ $errors->has('isbn') ? ' is-invalid' : '' }}" name="isbn" value="{{$value->isbn}}" required>

                                @if ($errors->has('isbn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="thn" class="col-md-4 col-form-label text-md-right">{{ __('Tahun Terbit') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="thn" id="thn" class="form-control" value="{{$value->thn}}" require>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="penerbit" class="col-md-4 col-form-label text-md-right">{{ __('Penerbit') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{$value->penerbit}}" require>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="stok" class="col-md-4 col-form-label text-md-right">{{ __('Tersedia') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="stok" id="stok" class="form-control" value="{{$value->stok}}" require>
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
</body>
</html>