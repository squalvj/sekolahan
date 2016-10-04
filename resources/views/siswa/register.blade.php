@include('section.header')
<style>
    body {
    font: 20px "Montserrat", sans-serif;
    line-height: 1.8;
    margin: 0 auto;
    }

        p {font-size: 16px;}

    #bg-ijo{
        background-color: #1abc9c;
        color: #ffffff;
    }

    .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
        }

        .navbar-nav li a:hover {
    color: #1abc9c !important;
        }

    #bg-hitam{
        background-color: #34495e;
        color: #ffffff;
        height: 680px;
        padding-top:10%;
    }

    #bg-ungu{
        background-color: #9b59b6;
        color: #ffffff;
    }

    #bg-putih{
        background-color: #c2ebdf;
        color: #2c3e50;
        padding-bottom: 15%;
    }

    .kecil{
         width: 60%;
    }

    .container-fluid {
        padding-top: 3%;
        padding-bottom: 8%;
        }

        .bg-footer{
            background-color: #2c3e50;
            color: #ffffff;
            height: 30%;
        }

        a.icon {
        color: #e74c3c;
        }

        a.icon:hover {
        color: #3498db;
        text-decoration: none;
        }

        .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
        background-color: #bdc3c7;
        color: #ecf0f1 !important;
        }
</style>
<nav class="navbar navbar-default navbar-fixed-top" style="height:60px; padding-top:5px;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
    <a class="navbar-brand" href="/">SMA PEDULI KASIH</a>
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
</nav>
<div class="container-fluid " style="padding-top:7%">
  <div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="text-center panel-title">Register Siswa</h2>
    </div>
    <div class="panel-content">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        {{ Form::open(array('route' => 'siswa.store','method'=>'POST')) }}
        <div class="row" style="padding:30px 40px">
            <div class="col-sm-4">
                <div class="form-group">
                    Nama
                </div>

                <div class="form-group">
                    Jenis Kelamin
                </div>

                <div class="form-group">
                    Alamat
                </div>

                <div class="form-group">
                    No Handphone
                </div>

                <div class="form-group">
                    Ketertarikan Bidang
                </div>
            </div>

            <div class="col-sm-8">
                <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                </div>

                <div class="radio-inline">
                    <label>
                        <input class="radio" type="radio" name="gender" value="Laki Laki">
                        Laki-Laki
                    </label>
                </div>

                <div class="radio-inline">
                    <label>
                        <input class="radio" type="radio" name="gender" value="Perempuan">
                        Perempuan
                    </label>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="handphone" placeholder="Masukan No">
                </div>

                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" class="checkbox" name="interest[]" value="IPA">
                        IPA
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" class="checkbox" name="interest[]" value="IPS">
                        IPS
                    </label>
                </div>
                <div class="checkbox-inline">
                    <label>
                        <input type="checkbox" class="checkbox" name="interest[]" value="Bahasa">
                        Bahasa
                    </label>
                </div>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="submit">
            <input type="reset" class="btn btn-danger btn-block" value="reset">
            {{ Form::close() }}
        </div>

    </div>  
  </div>
</div>
@include('section.footer')