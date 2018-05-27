<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ismail Tasdelen">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title> Kayıt Sayfası </title>
	<link rel="hortcut icon" href="ico/sayfa.ico" />
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Kayıt Sayfası</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <a class="nav-link" href="index.php">Ana Sayfa
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kayit.php">Kişi Kayıt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="giris.php">Oturum Açma</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="forum.php">Forum</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="fotograflar.php">Fotoğraflar</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="videolar.php">Videolar</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="liste.php">Kim, Nerede, Ne Yapıyor?</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="harita.php">Harita</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-left align-left">
          <form>
			<br>
			<br>
			<br>
				<div class="form-group">
				    <label for="usr">Ad Soyad :</label>
				    <input type="text" class="form-control" name="adsoyad" id="fullname">
			    </div>
			    <div class="form-group">
				    <label for="usr">Kullanıcı Adı : </label>
				    <input type="text" class="form-control" name="k_adsoyad" id="usr">
			    </div>
				<div class="form-group">
				    <label for="usr">Email Adresi : </label>
				    <input type="text" class="form-control" name="email" id="email">
			    </div>
			    <div class="form-group">
				    <label for="pwd">Parola : </label>
				    <input type="password" class="form-control" name="parola" id="pwd">
			    </div>
				<div class="form-group">        
					<div class="col-sm-offset-1 col-sm-5">	
					<button type="submit" class="btn btn-default"> Kaydol </button>
				</div>
			</form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
