<?php
// Connexion à la base de données
// $mysqli = new mysqli("localhost", "utilisateur", "motdepasse", "nom_de_la_base_de_donnees");

// // Vérification de la connexion à la base de données
// if ($mysqli->connect_error) {
//     die("La connexion à la base de données a échoué : " . $mysqli->connect_error);
// }

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>(RE)Sources Relationnelles</title>

  <style>
    body {
      background-color: #12CF85;
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
            <a class="nav-link" href="../home.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../src/Controller/logout.php">Déconnexion</a>
          </li>
        </div>
      </div>
    </nav>
  </header>
    <br><br>
    <div id="conteneur">
      <h1 class="texte2">Création de ressource</h1>
    </div>
    <br><br>
    <!-- <h1>Création de ressource</h1> -->
    <form action="../../src/Controller/Ressource/create.php" method="post" enctype="multipart/form-data">
        <label for="image_ressource">Image de la ressource :</label>
        <input type="file" name="image_ressource" id="image_ressource">
        <br>
        <label for="titre_ressource">Titre de la ressource :</label>
        <input type="text" name="titre_ressource" id="titre_ressource" required>
        <br>
        <label for="date_ressource">Date de la ressource :</label>
        <input type="date" name="date_ressource" id="date_ressource" required>
        <br>
        <label for="contenu_ressource">Contenu de la ressource :</label>
        <textarea name="contenu_ressource" id="contenu_ressource" rows="5" required></textarea>
        <br>
        <label for="id_type_ressource">ID du type de ressource :</label>
        <input type="number" name="id_type_ressource" id="id_type_ressource" required>
        <br>
        <input type="submit" value="Créer la ressource">
    </form>

</body>

</html>