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
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="info">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text"><i class="ti-light-bulb"></i>DIGITAL LIBRARY</a>
            </div>
                
            <ul class="nav">
                <li class="active">
                    <a href="{{url ('/home')}}">
                        <i class="ti-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{url ('/anggota')}}">
                        <i class="ti-user"></i>
                        <p>Anggota</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{url ('/jenis')}}">
                        <i class="ti-bookmark-alt"></i>
                        <p>Jenis Buku</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{url ('/buku')}}">
                        <i class="ti-book"></i>
                        <p>Buku</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{url ('/peminjaman')}}">
                        <i class="ti-share"></i>
                        <p>Peminjaman</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{url ('/pengembalian')}}">
                        <i class="ti-share-alt"></i>
                        <p>Pengembalian</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{url ('/profile')}}">
                        <i class="ti-shortcode"></i>
                        <p>Tentang Kami</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand">OnPerpustakaan</a>
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
    

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="content-wrapper">
                            <section class="content-header">
                                @yield('content')    
                            </section>
                        </div>
                    </div>
                </div>
            </div>

</div>
    <div class="main-panel">    
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