<?php session_start();

if (!isset($_SESSION['Login'])) {
  header("Location: ./screen/formulaire.connexion.php");
  die();
} ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>(RE)Sources Relationnelles</title>

  <style>
    body {
      background-color: #eb790e;
    }

    .header-navbar {
      background: #041937;


    }
  </style>
</head>

<body>
  <!-- Mise en place du Menu et logo -->
  <header>
    <nav class="navbar navbar-expand-lg navbar">
      <div class="container-fluid">
        <!-- <img src="./css/image/logo-#-02.png" alt="" id="logo2"> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- <li class="nav-item">
              <a class="nav-link" href="./index.php">Accueil</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="../src/Controller/logout.php">Déconnexion</a>
            </li>
        </div>
      </div>
    </nav>
    <br><br>
    <div id="conteneur">
      <h1 class="texte2">(RE)Sources Relationnelles</h1>
    </div>
    <br><br>
    <!-- Mise en place des images et du texte -->
    <?php if (isset($_SESSION['Login'])) {
      echo '<center><h2>Bonjour ' . $_SESSION['Login'] . '</h2></center>';
    }
    ?>
    <!-- Début du rectangle blanc -->
    <div class="button-container">
      <div class="button" onclick="window.location.href='./screen/consultation.php'">
        <img src="./img/browser.png" alt="Image 1">
        <h2>Consulter les ressources</h2>
      </div>
      <div class="button" onclick="window.location.href='#'">
        <img src="./img/catalogue.png" alt="Image 2">
        <h2>Catalogue des ressources</h2>
      </div>
      <div class="button" onclick="window.location.href='./screen/createRessource.php'">
        <img src="./img/page.png" alt="Image 3">
        <h2>Création et partage</h2>
      </div>
      <div class="button" onclick="window.location.href='#'">
        <img src="./img/bar-chart.png" alt="Image 4">
        <h2>Statistiques</h2>
      </div>
    </div>

    <!-- Fin du rectangle blanc -->

  </header>
</body>
<script src="./js/app.js"></script>
<!-- <script src="../Horloge/Horloge.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>