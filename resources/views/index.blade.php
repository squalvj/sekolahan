<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sekolahan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{!! asset('assets/bower_components/css/bootstrap.min.css') !!}">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="{!! asset('assets/bower_components/css/styles.css') !!}">
  <link rel="stylesheet" href="{!! asset('assets/bower_components/css/ihover.css') !!}">
  <style>
    body {
    font: 20px "Montserrat", sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
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
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="position: relative; padding-bottom:0px">
    @include('section.nav')
    <div class="container-fluid text-center" id="bg-ijo" style="margin-top:30px">
        <h3>Who Are We?</h3>
        <img class="img-responsive img-circle" style="display:inline" src="{!! asset('assets/gambar/school.jpg') !!}" alt="Bird">
        <h3>SMA SUKA KASIHAN</h3>
    </div>

    <div class="container-fluid" id="bg-hitam" style="padding-bottom:0px;">
        <div class="row">
    <div class="col-sm-4 col-xs-4">
        <img class="img-responsive" src="{!! asset('assets/gambar/guru.png') !!}">
    </div>

    <div class="col-sm-8 col-xs-8" style="padding: 5px 30px;">
        <h3 class="text-center">Siapa Kita</h3>
        <p class="center-block">&emsp;&emsp;JAKARTA (UNAS) – Universitas Nasional kembali meningkatkan kerjasama dengan universitas asing. Kali ini kerjasama dilakukan dengan Cyber Hankuk University for Foreign Studies (CUFS) asal Korea Selatan. Keduanya sepakat untuk merintis pendirian Cyber University yang memungkinkan mahasiswa kedua universitas dapat menikmati pembelajaran via online dari kedua negara.

            Penandatangan Memorandum of Understanding (MoU) ini dilakukan antara Rektor Universitas Nasional, Dr. El Amry Bermawi Putera, M.A dengan Rektor Cyber Hankuk for Foreign Studies, Vice President CUFS, Prof. Jangyoun Cho, di Jakarta, Kamis (1/9). Penandatangan ini juga disaksikan oleh Ketua Yayasan Memajukan Ilmu dan Budaya (YMIK), Dr. Ramlan Siregar, Wakil Rektor Bidang Penelitian, Pengabdian Kepada Masyarakat dan Kerjasama, Prof. Ernawati Sinaga, M.S., Apt., Wakil Rektor Bidang Administrasi Umum, Keuangan dan SDM, Dr. Drs. Eko Sugiyanto, M.Si, Kepala Kantor Kerjasama Internasional Universitas Nasional, Dr. Sugardjito dan Head of Indonesian Program CUFS, Dr. Im Song Hoo.</p>
    </div>
    </div>
    </div>

    <div class="container-fluid text-center" id="bg-ungu">
        <h3>Fasilitas</h3>
        <div class="row">
            <div class="col-sm-3 col-xs-3 text-center">
                <img style="width:250px;height:200px; border: 6px solid white" src="
                {!! asset('assets/gambar/bus.png') !!}" class="img-responsive img-circle center-block" alt="Image">
                <h3>Bus Sekolah</h3>
            </div>

            <div class="col-sm-3 col-xs-3 text-center">
                <img style="width:250px;height:200px; border: 6px solid white" src="{!! asset('assets/gambar/kimia.png') !!}" class="img-responsive img-circle center-block" alt="Image">
                <h3>Laboratorium</h3>
            </div>

            <div class="col-sm-3 col-xs-3 text-center">
                <img style="width:250px;height:200px; border: 6px solid white" src="{!! asset('assets/gambar/tas.png') !!}" class="img-responsive img-circle center-block" alt="Image">
                <h3>Tas</h3>
            </div>

            <div class="col-sm-3 col-xs-3 text-center">
                <img style="width:250px;height:200px; border: 6px solid white" src="{!! asset('assets/gambar/sertifikat.png') !!}" class="img-responsive img-circle center-block" alt="Image">
                <h3>Sertifikat</h3>
            </div>
        </div>

        <div class="row" style="margin-top:50px">
            <div class="col-sm-3 col-xs-3 text-center">
                <img style="width:250px;height:200px; border: 6px solid white" src="{!! asset('assets/gambar/ide.png') !!}" class="img-responsive img-circle center-block" alt="Image">
                <h3>Kreatif</h3>
            </div>

            <div class="col-sm-3 col-xs-3 text-center">
                <img style="width:250px;height:200px; border: 6px solid white" src="{!! asset('assets/gambar/penggaris.png') !!}" class="img-responsive img-circle center-block" alt="Image">
                <h3>Peralatan</h3>
            </div>

            <div class="col-sm-3 col-xs-3 text-center">
                <img style="width:250px;height:200px; border: 6px solid white" src="{!! asset('assets/gambar/jam.png') !!}" class="img-responsive img-circle center-block" alt="Image">
                <h3>Tertib</h3>
            </div>

            <div class="col-sm-3 col-xs-3 text-center">
                <img style="width:250px;height:200px; border: 6px solid white" src="{!! asset('assets/gambar/buku.png') !!}" class="img-responsive img-circle center-block" alt="Image">
                <h3>Buku</h3>
            </div>
        </div>
    </div>

     <div class="container-fluid text-center" id="bg-putih">
        <h3>Pelayanan Siswa</h3>
      <div style="padding-top: 5%" class="row">
        <div class="col-sm-4 col-xs-4">
          <h4>Login<h4>
            <div class="ih-item square effect6 from_top_and_bottom" style="width:100%; border:0px; box-shadow:none">
                <a href="#" data-toggle="modal" data-target="#modal-login">
                    <div class="img img-responsive center-block kecil">
                        <img src="{!! asset('assets/gambar/otak.png') !!}" alt="img">
                    </div>
                    <div class="info">
                      <h3>Login Siswa</h3>
                      <p>Bagi yang sudah mempunyai akun silahkan klik disini untuk login</p>
                    </div>
                </a>
            </div>
        


        </div>
        <div class="col-sm-4 col-xs-4">
          <h4>Register<h4>
          <div class="ih-item square effect6 from_top_and_bottom" style="width:100%; border:0px; box-shadow:none">
                <a href="{{URL::to('siswa/register')}}">
                    <div class="img img-responsive center-block kecil">
                        <img class="kecil" src="{!! asset('assets/gambar/buku.png') !!}" alt="Image">
                    </div>
                    <div class="info">
                      <h3>Resiger Siswa</h3>
                      <p>Untuk Register Siswa</p>
                    </div>
                </a>
            </div>
          
        </div>
        <div class="col-sm-4 col-xs-4">
          <h4>Fasilitas<h4>
          <img class="kecil" src="{!! asset('assets/gambar/bus.png') !!}" alt="Image">
        </div>
      </div>
    </div>
    </body>
    <footer>
        <div style="padding-top:80px" class="container-fluid bg-footer text-center">
            <p>Bootstrap Theme By <a href="http://www.w3schools.com">www.adityawiraha.com</a></p>
            <a class="icon" href="#">
                <span class="icon-facebook"></span>
            </a>
            <a class="icon" href="#">
                <span class="icon-twitter"></span>
            </a>
            <a class="icon" href="#">
                <span class="icon-rss"></span>
            </a>
            <a class="icon" href="#">
                <span class="icon-social-github"></span>
            </a>
        </div>

        <div id="modal-login" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="color:black">
              <div class="modal-header text-center" style="background-color: #2ecc71; color: #ffffff;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login Siswa</h4>
              </div>
              <div class="modal-body">
                {{ Form::open(array('url' => 'login','method'=>'POST')) }}
                    <div class="form-group">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <label for="id">ID Siswa</label>
                            <input type="text" class="form-control" id="id" placeholder="ID Siswa" name="email">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
                    </div>
                    <br>
                    <div class="form-group text-center">        
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                    </div>
                {{ Form::close() }}
              </div>
              <div class="modal-footer" style="background-color: #2ecc71;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
        </div>
    </footer>
    <script src="{!! asset('assets/bower_components/js/jquery.min.js') !!}"></script>
    <script src="{!! asset('assets/bower_components/js/bootstrap.min.js') !!}"></script>
    <!--  <script src="{!! asset('assets/bower_components/js/npm.js') !!}"></script> -->
    @if ($errors->has('email'))
      <script type="text/javascript">

        $(document).ready(function(){
            $('#modal-login').modal({
                show: true
            });
        });
    </script>
    @endif
    
</html>
