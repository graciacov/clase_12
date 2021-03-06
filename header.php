<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gracia Covarrubias Prieto | Spotify's Top 10 </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="monogram.png">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
        <a class="navbar-brand" href="index.php">Gracia Covarrubias | Clase 12 Evaluación</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> 
            <li class="nav-item active">
            <?php } else { ?>
            <li class="nav-item">
            <?php };?>
              <a class="nav-link" href="index.php">Top 10</a>
            </li>
            <?php if((basename($_SERVER['PHP_SELF']))=='single.php'){?> 
            <li class="nav-item active">
            <?php } else { ?>
            <li class="nav-item">
            <?php };?>
              <a class="nav-link" href="single.php">Visualizaciones</a>
            </li>
          </ul>
        </div>
      </div>
      </nav>
    </header>