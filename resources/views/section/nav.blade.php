<nav class="navbar navbar-default navbar-fixed-top" style="height:60px; padding-top:5px;">
  @if (Auth::guest())
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
    </button>
    <a class="navbar-brand" href="#">SMA PEDULI KASIH</a>
  </div>
  <div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-right:20px">
        <li><a href="#bg-hitam">Siapa Kita</a></li>
        <li><a href="#bg-ungu">Fasilitas</a></li>
        <li><a href="#bg-putih">Pelayanan Siswa</a></li>
      </ul>
    </div>
  </div>
  @else
  <ul class="nav navbar-nav navbar-right" style="padding-right:30px">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
        </ul>
    </li>
  </ul>

  @endif
</nav>  