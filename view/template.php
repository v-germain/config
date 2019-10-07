<!DOCTYPE html>
<html>

<head>
  <title><?= $title ?></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="/pro5/public/css/style.css" rel="stylesheet" />
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php?action=listConfig">
          <img src="/pro5/public/images/icon.jpg" width="100" height="70" alt="">
        </a>
      </nav>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?action=listConfig">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Composants
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.php?action=processeur">Processeur</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?action=carte mere">Carte mère</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?action=memoire">Mémoire</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?action=disque dur">Disque dur</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?action=carte graphique">Carte graphique</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?action=boitier">Boitier</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="index.php?action=alimentation">Alimentation</a>
            </div>
          </li>
          <?php if (!isset($_SESSION['pseudo'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=displayInscription">Inscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=displayConnexion">Connexion</a>
            </li>
          <?php endif; ?>
          <?php if (isset($_SESSION['pseudo'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=deconnexion">Deconnexion</a>
            </li>
          <?php endif; ?>
          <?php if (isset($_SESSION['pseudo']) and ($_SESSION['pseudo']) != 'admin') : ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=profil&amp;id=<?= $_SESSION['id'] ?>">Profil</a>
            </li>
          <?php endif; ?>
          <?php if (isset($_SESSION['pseudo']) and ($_SESSION['pseudo']) == 'admin') : ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=admin">Administration</a>
            </li>
          <?php endif; ?>
          <?php if (isset($_SESSION['pseudo'])) : ?>
            <li class="nav-item" id="pseudoDisplay">
              <?= $_SESSION['pseudo'] ?>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </header>


  <?= $content ?>

  <footer>
    <a href="#">Contactez-nous!</a>
  </footer>
</body>

</html>