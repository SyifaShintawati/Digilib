<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Edit Anggota</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/css/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                   <form action="{{url('/up')}}" method="post"> {{csrf_field()}} @csrf
                        <input type="hidden" name="id" value="{{$value->id}}">

                        <div class="form-group row">
                            <label for="nm_agt" class="col-md-4 col-form-label text-md-right">{{ __('Nama Lengkap') }}</label>

                            <div class="col-md-6">
                                <input id="nm_agt" type="text" class="form-control{{ $errors->has('nm_agt') ? ' is-invalid' : '' }}" name="nm_agt" value="{{$value->nm_agt}}" required autofocus>

                                @if ($errors->has('nm_agt'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nm_agt') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Lengkap') }}</label>

                            <div class="col-md-6">
                                <textarea name="alamat" id="alamat" class="form-control" required>{{$value->alamat}}</textarea> 
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="kota" class="col-md-4 col-form-label text-md-right">{{ __('Kota Asal') }}</label>

                            <div class="col-md-6">
                                <input id="kota" type="text" class="form-control{{ $errors->has('kota') ? ' is-invalid' : '' }}" name="kota" value="{{$value->kota}}" required>

                                @if ($errors->has('kota'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('kota') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tlp" class="col-md-4 col-form-label text-md-right">{{ __('No Telepon') }}</label>

                            <div class="col-md-6">
                                <input id="tlp" type="text" class="form-control{{ $errors->has('tlp') ? ' is-invalid' : '' }}" name="tlp" value="{{$value->tlp}}" required>

                                @if ($errors->has('tlp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tlp') }}</strong>
                                    </span>
                                @endif
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