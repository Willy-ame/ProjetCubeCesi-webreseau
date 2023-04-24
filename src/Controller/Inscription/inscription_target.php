<?php
session_start();

// Vérification de l'envoi du formulaire
if (isset($_POST)) {

    // Le bouton radio a été coché
    if (isset($_POST['isAdmin']) && $_POST['isAdmin'] == 'true')
        $_POST['isAdmin'] = 3;

    // Le bouton radio n'a pas été coché
    else $_POST['isAdmin'] = 0;

    $login = ($_POST['login']);
    $mdp = ($_POST['mdp']);
    $pseudo = ($_POST['pseudo']);
    $surname = ($_POST['surname']);
    $name = ($_POST['name']);
    $dateNaissance = ($_POST['Date_naissance']);
    $telephone = ($_POST['telephone']);
    $langue = ($_POST['langue']);
    $ville = ($_POST['ville']);
    $codePostal = ($_POST['codePostal']);
    $adresse = ($_POST['adresse']);
    $isAdmin = ($_POST['isAdmin']);
    $dateRGPD = ($_POST['dateRGPD']);

    $login = trim($login);
    $mdp = trim($mdp);
    $pseudo = trim($pseudo);
    $surname = trim($surname);
    $name = trim($name);
    // $dateNaissance = trim($dateNaissance);
    $telephone = trim($telephone);
    // $langue = trim($langue);
    // $ville = trim($ville);
    $codePostal = trim($codePostal);
    // $adresse = trim($adresse); //Date_Valide_RGPD, Id_type_utilisateur, sexe
    // $dateRGPD = trim($dateRGPD);


    if (!empty($login) && !empty($mdp) && !empty($surname) && !empty($name) && !empty($email)) {
        $pass = password_hash($mdp, PASSWORD_DEFAULT);
    
    
        // 3. Connexion à la base de données
        require 'dbConnect.php';
    
        // 4. Préparation de la requête d'insertion
    
        if (isset($_POST['login'], $_POST['mdp'], $_POST['surname'], $_POST['name'], $_POST['email'],)) {
            $sql = "INSERT INTO utilisateur (Login, Password, Pseudo, Nom, Prenom, Date_naissance, Telephone, Langue_choix, Ville, Code_postal, Adresse, Date_Valide_RGPD, Id_type_utilisateur, sexe) VALUES ('$login', '$pass', '$surname', '$name', '$email', '0')";
            $req = $pdo->prepare($sql);
            $req->execute();
            header('Location: success_inscription.php');
        } else {
            header('Location: ../Error/error_inscription.php');
        }
    }
    else {
        header('Location: ../Error/Error_inscription_test.php');
    }
}