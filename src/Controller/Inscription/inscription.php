<?php
session_start();

// Vérification de l'envoi du formulaire
if (isset($_POST)) {

    // Le bouton radio a été coché
    if (isset($_POST['isAdmin']) && $_POST['isAdmin'] == 'true')
        $_POST['isAdmin'] = 1;

    // Le bouton radio n'a pas été coché
    else $_POST['isAdmin'] = 0;

    $login = ($_POST['login']);
    $mdp = ($_POST['mdp']);
    $isAdmin = ($_POST['isAdmin']);
    $surname = ($_POST['surname']);
    $name = ($_POST['name']);
    $email = ($_POST['email']);

    $login = trim($login);
    $mdp = trim($mdp);
    $surname = trim($surname);
    $name = trim($name);
    $email = trim($email);

    if (!empty($login) && !empty($mdp) && !empty($surname) && !empty($name) && !empty($email)) {
        $pass = password_hash($mdp, PASSWORD_DEFAULT);
    
    
        // 3. Connexion à la base de données
        require 'dbConnect.php';
    
        // 4. Préparation de la requête d'insertion
    
        if (isset($_POST['login'], $_POST['mdp'], $_POST['surname'], $_POST['name'], $_POST['email'],)) {
            $sql = "INSERT INTO login (user_login, mdp, is_admin, nom, prenom, email, status) VALUES ('$login', '$pass', '$isAdmin', '$surname', '$name', '$email', '0')";
            $req = $pdo->prepare($sql);
            $req->execute();
            header('Location: success2.php');
        } else {
            header('Location: error2.php');
        }
    }
    else {
        header('Location: error3.php');
    }
}