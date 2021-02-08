<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Tugas Pertama</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('/home')}}">Home</a></li>
            <li><a href="{{ url('/anggota') }}">Anggota</a></li>
            <li><a href="{{ url('/jenis') }}">Jenis Buku</a></li>
            <li><a href="{{ url('/buku') }}">Buku</a></li>
            <li><a href="{{ url('/peminjaman') }}">Peminjaman</a></li>
            <li><a href="{{ url('/pengembalian') }}">Pengembalian</a></li>
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline-block;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>