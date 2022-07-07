<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le "Trésor" des jeux vidéos</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="<?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? "text-dark bg-light" : "text-light bg-dark" ?>">
  <nav class="navbar navbar-expand-lg fixed-top <?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? "navbar-light bg-light" : "navbar-dark bg-dark" ?>">

    <div class="container-fluid">
      <a class="navbar-brand"><img src="../assets/img/coffre.png" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="home.php">Accueil</a>
          </li>

          <?php
          if (isset($_SESSION['USER']) && isset($_COOKIE['myCheckbox0'])) { ?>
            <li class="nav-item"><a class="nav-link" href="page.php?rss=<?= $_COOKIE['myCheckbox0'] ?>"><?= $_COOKIE['myCheckbox0'] ?></a></li>
            <li class="nav-item"><a class="nav-link" href="page.php?rss=<?= $_COOKIE['myCheckbox1'] ?>"><?= $_COOKIE['myCheckbox1'] ?></a></li>
            <li class="nav-item"><a class="nav-link" href="page.php?rss=<?= $_COOKIE['myCheckbox2'] ?>"><?= $_COOKIE['myCheckbox2'] ?></a></li>

          <?php } else { ?>

            <li class="nav-item"><a class="nav-link" href="page.php?rss=mobile">Mobile</a></li>
            <li class="nav-item"><a class="nav-link" href="page.php?rss=wii">Wii</a></li>
            <li class="nav-item"><a class="nav-link" href="page.php?rss=pc">PC</a></li>

          <?php } ?>

          <li class="nav-item">
            <a class="nav-link mx-4 fs-6" href="settings.php">Paramètres</a>
          </li>

        </ul>

        <div class="d-flex">

            <?php if (!isset($_SESSION['USER'])) { ?>
              <a class="btn btn-outline-light" href="login.php"><i class="bi bi-person"></i></a>
            <?php } else { ?>
              <a class="btn btn-outline-light" href="logout.php">Déconnexion</a>
            <?php } ?>

        </div>


      </div>
    </div>
  </nav>
  <div class="row foto m-0 p-0 mt-5">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <h1 class="text-center  <?= (isset($_SESSION['USER']) && isset($_COOKIE["whiteTheme"]) && $_COOKIE["whiteTheme"] == "on") ? '' : "text-white" ?>">Le Trésor des jeux vidéos</h1>
    </div>
  </div>
  <div class="container mt-3">