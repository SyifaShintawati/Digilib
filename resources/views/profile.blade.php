<head>
    <title>OnPerpus | Profile</title>
    <style type="text/css">
         .content{
        background-image: url(adminn/img/p5.jpg);
        background-size:cover;
      }
      .contentt{
        padding: 15px 15px 10px 15px;
        box-sizing: border-box;
        display: block;
        background-color: #FFFFFF;
      }
    </style>
</head>
@extends('layouts.dash')
@section('content')

                <div class="content">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            <div class="image">
                                <img src="adminn/img/IMG-20181218-WA0046.jpg" alt="..."/>
                            </div>
                            <div class="contentt">
                                <div class="author">
                                  <img class="avatar border-white" src="adminn/img/faces/mee.jpg" alt="..."/>
                                  <h4 class="title">Syifa Shintawati Nur Azizah<br />
                                     <a href="https://www.instagram.com/syifasna_/"><small>@syifasna_</small></a>
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    "Life is a choice <br> Don't give up"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5>17th<br /><small>Years Old</small></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>XI RPL 2<br /><small>Class</small></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Islam<br /><small>Religion</small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

		              <div class="card">
                            <div class="header">
                                <center><h4 class="title"><b>Our Member <i class="ti-comments-smiley"></i></b></h4></center>
                            </div>
                            <div class="contentt">
                                <ul class="list-unstyled team-members">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="adminn/img/bringka/ena.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Alfina Septrianti
                                                        <br />
                                                        <span class="text-success"><small>@alfnasptnt_</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><a href="https://www.instagram.com/alfnasptnt/"><i class="fa fa-instagram"></i></a></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="adminn/img/bringka/nisa.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Annisa Frida M
                                                        <br />
                                                        <span class="text-primary"><small>@afridaaam</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><a href="https://www.instagram.com/afridaaam/"><i class="fa fa-instagram"></i></a></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="adminn/img/bringka/lisda2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Lisdania Nurul Z
                                                        <br />
                                                        <span class="text-danger"><small>@lisdanianz_</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><a href="https://www.instagram.com/lisdanianz_/"><i class="fa fa-instagram"></i></a></btn>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

					<div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <center><h2 class="title"><b><i class="ti-light-bulb"></i> My Profile <i class="ti-light-bulb"></i></b></h2><hr></center> 
                            </div>
                            <div class="contentt">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Lengkap</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Nama Lengkap" value="Syifa Shintawati Nur Azizah">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nama Panggilan</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Nama Panggilan" value="Syifa / Cipa">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Alamat Email</label>
                                                <input type="email" class="form-control border-input" disabled placeholder="Email" value="syifasintawatinurazizah@gmail.com">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Hobby</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Hobby" value="Membaca Buku">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Cita Cita</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Cita Cita" value="Professor">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Alamat" value="Gg Saluyu Selaan Rt 03 Rw 09 No 61 Desa Sayati Kec. Margahayu Kab. Bandung">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Kota</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Kota" value="Bandung">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Negara</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Negara" value="Republik Indonesia">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input type="number" class="form-control border-input" disabled placeholder="kode Pos" value="40228">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tentang Saya</label>
                                                <textarea rows="5" class="form-control border-input" disabled placeholder="Tentang Saya" value="syifa">Syifa bersekolah di SMK Negeri 1 Katapang, Kelas XI RPL 2. Jurusan yang diambil syifa adalah Rekayasa Perangkat Lunak. Syifa memiliki ekstrakulikuler Lingkung Seni SMKN 1 Katapang (LISSKA), aktif di OSIS, dan Pengurus Keputrian SMKN 1 Katapang, serta anggota aktif di Forum Literasi SMKN 1 Katapang.</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="mailto:syifasintawatinurazizah@gmail.com" class="btn btn-info btn-fill btn-wd">Kirim Email</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection