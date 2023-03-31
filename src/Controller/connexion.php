<?php
session_start();


// Vérification de l'envoi du formulaire
if (isset($_POST)) {
    $login = ($_POST['login']);
    $mdp = ($_POST['mdp']);

    // Vérification des champs obligatoires

    // 1. On vérifie d'abord le login
    // $login = !empty($_POST['login']) ? $_POST['login'] : null;

    // if(!$login) // $email == null
    // {
    //     header('Location: /formulaire.co.php?email_error');
    //     exit;
    // } 

    // 2. Ensuite on vérifie le mot de passe
    // $password = !empty($_POST['mdp']) ? $_POST['mdp'] : null;

    // if(!$password) // $password == null
    // {
    //     header('Location: /formulaire.co.php?password_error');
    //     exit;
    // } 

    // 3. Connexion à la base de données
    require 'dbConnect.php';

    // Récupération de l'utilisateur depuis la base de données à partir de son login
    $sql = "SELECT * FROM login WHERE user_login ='$login' ";
    $req = $pdo->prepare($sql);
    $req->execute();

    if ($req->rowCount() > 0) {
        $data = $req->fetchAll();
        if ($data[0]['status'] != '1') {
            header('Location: error_connexion.php');
        }
        else {
            if (password_verify($mdp, $data[0]['mdp'])) {
                $_SESSION['login'] = $login;
                if ($data[0]['is_admin'] == 1) {
                    $_SESSION['admin'] = true;
                }
                else {
                    $_SESSION['admin'] = false;
                }
                header('Location: ../index.php');
            }   else {
                header('Location: error_connexion.php');
            }
        }     
    } 
    else {
        header('Location: error_connexion.php');
        }
    }else {
        header('Location: error_connexion.php');
    
    }