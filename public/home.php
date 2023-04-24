<?php session_start();

if (!isset($_SESSION['login']))
{
    header("Location: Formulaire/formulaire.co.php");
    die();
}?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="./css/index.css">
  <!-- <link rel="stylesheet" href="../Horloge/Horloge.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>(RE)Sources Relationnelles</title>

  <style>
    body {
      background-color: #041937;
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
          <li class="nav-item">
            <a class="nav-link" href="./index.php">Accueil</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href= "./Formulaire/logout.php">Déconnexion</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="./Formulaire/formu.creation.php">Création (temporaire)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./user/dashboard.php">Gérer Utilisateurs (temporaire)</a>
          </li> -->
     
        </div>
      </div>
    </nav>
    <br><br>
    <?php if (isset($_SESSION['login']))
    {
      echo '<center><h2>Bonjour '.$_SESSION['login'].'</h2></center>';
    } 
    ?>
    <br><br>
    
    <!-- Mise en place des images est texte -->
    <div id="conteneur">
      <img src="./css/image/box-2-xxl.png" alt="BOX" id="boximg">
      <h1 class="texte2">(RE)Sources Relationnelles</h1>
    </div>
  </header>
</body>
<script src="./js/app.js"></script>
<!-- <script src="../Horloge/Horloge.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>