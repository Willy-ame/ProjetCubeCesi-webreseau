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
    <title>Création de ressource</title>
</head>

<body>
    <h1>Création de ressource</h1>
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