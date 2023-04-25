<?php

require '../Database/dbConnect.php';

// Récupération des données du formulaire
$titreRessource = $_POST["titre_ressource"];
$dateRessource = $_POST["date_ressource"];
$contenuRessource = $_POST["contenu_ressource"];
$compteurVues = 0; 
$validationModo = 0; 
$favoris = 0; 
$idTypeRessource = $_POST["id_type_ressource"];

// Vérification des données reçues du formulaire
if (empty($titreRessource) || empty($dateRessource) || empty($contenuRessource) || empty($idTypeRessource)) {
    die("Tous les champs sont obligatoires.");
}

// Vérification de la présence de l'image dans le formulaire
if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    die("Une erreur est survenue lors de l'upload de l'image.");
}

// Lecture du contenu de l'image
$imageContent = file_get_contents($_FILES['image']['tmp_name']);

// Requête SQL d'insertion des données dans la table "ressource"
$query = "INSERT INTO ressource (Titre_ressource, Date_ressource, Contenu_ressource, Compteur_vues, Validation_modo, Favoris, Id_type_ressource, Image) 
          VALUES (:titre_ressource, :date_ressource, :contenu_ressource, :compteur_vues, :validation_modo, :favoris, :id_type_ressource, :image)";
$stmt = $pdo->prepare($query);
$stmt->bindValue(":titre_ressource", $titreRessource);
$stmt->bindValue(":date_ressource", $dateRessource);
$stmt->bindValue(":contenu_ressource", $contenuRessource);
$stmt->bindValue(":compteur_vues", $compteurVues);
$stmt->bindValue(":validation_modo", $validationModo);
$stmt->bindValue(":favoris", $favoris);
$stmt->bindValue(":id_type_ressource", $idTypeRessource);
$stmt->bindParam(":image", $imageContent, PDO::PARAM_LOB); // Utilisation de PDO::PARAM_LOB pour le contenu BLOB
$result = $stmt->execute();

$destination = "../../../public/img/ressource" . $imageFileName;
if (move_uploaded_file($imageTmpName, $destination)) {
    // Le fichier a été téléchargé avec succès
    // Vous pouvez maintenant enregistrer les informations de la ressource dans la base de données
    // et utiliser le chemin du fichier d'image dans votre logique métier
} else {
    echo "Une erreur est survenue lors de l'upload de l'image.";
}

// Vérification de l'exécution de la requête
if ($result) {
    header('Location: successCreate.php');
} else {
    echo "Une erreur est survenue lors de la création de la ressource : " . $stmt->errorInfo()[2];
}

// Fermeture de la connexion à la base de données
$stmt = null;
$pdo = null;
?>
