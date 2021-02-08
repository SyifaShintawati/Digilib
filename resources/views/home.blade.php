<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="adminn/img/apple-icon.png">
    <link rel="icon" href="{{ asset('assets/bootstrap/logo.jpg') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>OnPerpustakaan</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="adminn/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="adminn/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="adminn/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="adminn/css/themify-icons.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    

</head>
<style type="text/css">
    .hmm {
        background-attachment: fixed;
        position: relative;
        line-height: 20px;
        background-color: black;
        text-decoration: none;
    }
    .contentt{
        border-radius: 6px;
        box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
        background-color: black;
        color: white;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
        padding: 15px 15px 10px 15px;
    }
    .foot {
        background-attachment: fixed;
        position: relative;
        line-height: 20px;
        background-color: white;
        text-decoration: none;
    }
    .content{
        background-image: url(adminn/img/p5.jpg);
        background-size:cover;
    }
    .navi {
    background-color: #152036;
    position: relative;
    z-index: 2;
    /*float: right;
    width: calc(100% - 260px);*/
    -webkit-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -moz-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -o-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    -ms-transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
    transition: all 0.33s cubic-bezier(0.685, 0.0473, 0.346, 1);
}
</style>

<body>

    <div class="navi">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{('Logout')}}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
   
        <div class="content"><br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                                <div class="row">
                                    <div class="col-xs-5">
                                       <div class="icon-big icon-warning text-center">
                                            <i class="ti-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            Anggota
                                            <p>Perpustakaan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-eye"></i><a href="{{url('anggota')}}" class="text-muted">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-bookmark-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            Jenis Buku
                                            <p>Perpustakaan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-eye"></i><a href="{{url('jenis')}}" class="text-muted">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-share"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            Peminjaman
                                            <p>Perpustakaan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-eye"></i><a href="{{url('peminjaman')}}" class="text-muted">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-share-alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            Pengembalian
                                            <p>Perpustakaan</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-eye"></i><a href="{{url('pengembalian')}}" class="text-muted">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <br>

                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="contentt">
                                <div class="row">
                                    <center><h1><i class="ti-light-bulb"></i> DIGITAL LIBRARY <i class="ti-light-bulb"></i></h1></center><br><br><br>
                                    <center><img src="adminn/img/b1.png"/></center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="contentt">    
                                <p><i class="ti-book"></i> Daftar Buku Buku Perpustakaan</p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                                <div class="row">
                                    <center><img src="adminn/img/buku/b1.jpg"/></center> 
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-agenda"></i> Sikancil Anak Nakal<br>
                                        <i class="ti-user"></i> Mujahadah
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                                <div class="row">
                                    <center><img src="adminn/img/buku/b2.jpg"/></center>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-agenda"></i> Suku Bangsa di Indonesia<br>
                                        <i class="ti-user"></i> Dr. Zulyani Hidayah
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                               <div class="row">
                                    <center><img src="adminn/img/buku/b3.jpg"/></center>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-agenda"></i> Bulan<br>
                                        <i class="ti-user"></i> Tere Liye
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                               <div class="row">
                                    <center><img src="adminn/img/buku/b4.jpg"/></center>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-agenda"></i> Setinggi Bintang<br>
                                        <i class="ti-user"></i> Rio S Pambudi
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                               <div class="row">
                                    <center><img src="adminn/img/buku/b5.jpg"/></center>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-agenda"></i> Apapun Selain Hujan<br>
                                        <i class="ti-user"></i> Orizuka
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                               <div class="row">
                                    <center><img src="adminn/img/buku/b6.jpg"/></center>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-agenda"></i> If You Know Why<br>
                                        <i class="ti-user"></i> Imelda
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                               <div class="row">
                                    <center><img src="adminn/img/buku/b7.jpg"/></center>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-agenda"></i> Janji Pelangi<br>
                                        <i class="ti-user"></i> Fakhrul Khakim
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="contentt">
                               <div class="row">
                                    <center><img src="adminn/img/buku/b8.jpg"/></center>
                                </div>
                                <div class="hmm">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-agenda"></i> Boros<br>
                                        <i class="ti-user"></i> Kayla Miranda
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                    <div class="pull-right">
                        <div class="hmm">
                            <div class="stats">
                                <a href="{{url('buku')}}" class="btn btn-succes">Lebih Banyak <i class="ti-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div><br><br><br>
                </div>
            </div>
        </div>
    </div>
        

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a>OnPerpustakaan</a>
                        </li>
                        <li>
                            <a>Website</a>
                        </li>
                    </ul>
                </nav>
                
                <div class="copyright pull-right">
                    &copy; Dibuat Oleh <i class="fa fa-heart heart"></i><a href="#">Syifa</a>
                </div>
            </div>
        </footer>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="adminn/js/jquery.min.js" type="text/javascript"></script>
    <script src="adminn/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="adminn/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="adminn/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="adminn/js/bootstrap-notify.js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="adminn/js/paper-dashboard.js"></script>

    <!--validator-->
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>

</html>

