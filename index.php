<!DOCTYPE html>
<html lang="en">
<head>
  <title>rcsfaxdoyen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="img/logo.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="js/carousel.js"></script>
</head>
<body>

  <!-- NAV -->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
    <img class="rounded" src="img/logo.png" alt="Logo" style="width:40px;">
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="justify-content-center collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav nav-pills flex-column flex-md-row">
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Acceuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="a-propos.php">À Propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nos-actions-activites.php">Nos Actions/Activités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galeries.php">Galeries</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pantheon.php">Panthéon</a>  
      </li>
      <li class="nav-item">
        <a class="nav-link" href=espace-membres.php">Espace Membres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactez-nous.php">Contactez Nous</a>
      </li>
    </ul>
  </div>
  </nav>
<!-- NAV -->

<!-- CAROUSEL -->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- CAROUSEL -->

<!-- FOOTER -->
<footer id="sticky-footer" class="py-4 bg-dark text-white">
  <div class="container text-center">2020 &copy; #DISTRA</div>
</footer>  
<!-- FOOTER --> 

</body>
</html>