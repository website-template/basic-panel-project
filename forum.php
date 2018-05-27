<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="hortcut icon" href="ico/sayfa.ico" />
    <title>Form Sayfası</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Forum</a>
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
	
	<!-- form -->
	<div class="container">
	<table class="table table-striped">
			<thead>
			<br>
			<br>
		<tr>
			<th>Forma Yazan</th>
			<th>Yazı</th>
		</tr>
		<tr>
			<td>Ismail Tasdelen</td>
			<td>Test deneme</td>
		</thead>
		<tbody>
	</table>
	</div>

    </div>
    <!-- /.container -->
	
	<br>
	<br>
	<br>
	
	<!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Birşeyler yaz :</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gönder</button>
              </form>
            </div>
          </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
