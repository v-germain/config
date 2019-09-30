<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="public/css/style.css" rel="stylesheet" />
</head>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php?action=">
    <img src="public/images/icon.jpg" width="100" height="70" alt="">
  </a>
</nav>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Composants
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Processeur</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Carte mère</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Mémoire</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Disque dur</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Carte graphique</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Boitier</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Alimentation</a>
        </div>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>-->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>

<body>
    <?= $content ?>
</body>
<footer></footer>

</html>