<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/first1-page.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body {
            background-image: url('./img/people.png');
            /* Chemin de l'image de fond */
            background-size: cover;
            /* Ajustement de la taille de l'image à la fenêtre */
            /* background-position: center center; Positionnement de l'image au centre */
            background-repeat: no-repeat;
            /* Empêche la répétition de l'image */
        }

        body::before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
            /* Couleur du filtre noir avec une opacité de 0.4 (40%) */
        }

        /* Style pour le rectangle en bas de page */
        .footer {
            background-color: #eb790e;
            /* Couleur de fond */
            color: #fff;
            /* Couleur du texte */
            padding: 20px;
            /* Marge intérieure */
            position: fixed;
            /* Position fixe pour rester en bas de la page */
            bottom: 0;
            /* Alignement en bas */
            left: 0;
            /* Alignement à gauche */
            right: 0;
            /* Alignement à droite */
            display: flex;
            /* Utilisation de flexbox pour aligner les éléments horizontalement */
            justify-content: space-between;
            /* Alignement à l'extrémité gauche et droite */
            align-items: center;
            /* Alignement vertical au centre */
        }

        .logo {
            position: fixed;
            top: 0;
            right: 0;
            /* padding: 10px; */
            z-index: 2;
        }

        .content {
            position: relative;
            /* Déclaration de position relative pour que les textes soient positionnés par rapport à cette balise */
            z-index: 1;
            /* Utilisation de la propriété z-index pour définir la profondeur d'empilement (éléments avec une valeur de z-index plus élevée sont affichés au-dessus des éléments avec une valeur de z-index inférieure) */

        }

        .title {
            top: 25px;
            font-size: 24px;
            /* Taille de police pour le titre */
            color: #fff;
            /* Couleur du texte du titre */
        }

        h1 {
            font-size: 48px;
            /* Taille de police pour le sous-titre */
            color: #fff;
            /* Couleur du texte du sous-titre */
        }

        .list {
            list-style: none;
            /* Suppression des puces de liste */
            display: flex;
            /* Utilisation de flexbox pour aligner les éléments horizontalement */
        }

        .list li {
            margin-right: 10px;
            /* Marge à droite entre les éléments de la liste */
        }

        .list li a {
            color: #fff;
            /* Couleur du texte des liens */
            text-decoration: none;
            /* Suppression du soulignement par défaut des liens */
        }

        .list li a:hover {
            text-decoration: underline;
            /* Soulignement des liens au survol */
        }
    </style>
</head>

<body>
    <input type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
    <div class="wrapper">
        <ul>
            <li><a href="./screen/formulaire.connexion.php">Connexion</a></li>
            <li><a href="./screen/Inscription.php">Inscription</a></li>
            <!-- <li><a href="./Contact.html">Contact</a></li> -->
        </ul>
    </div>
    <div class="logo">
        <img src="./img/RESOURCELOGO.png" alt="Logo" width="429px" height="129px">
    </div>
    <div class="img">
        <div class="content">
            <div class="title">(RE)Sources Relationnelles</div>
            <h1>CE QUI NOUS UNIT</h1>
        </div>
    </div>
    <div class="footer">
        <div>
            <img src="./img/Ministère_des_Solidarités_et_de_la_Santé.svg.png"
                alt="Ministère_des_Solidarités_et_de_la_Santé" width="100px" height="100px">
        </div>
        <ul class="list">
            <li><a href="#">Politique de confidentialité</a></li>
            <li> | </li>
            <li><a href="#">Gestions des cookies</a></li>
            <li> | </li>
            <li><a href="#">Conditions générales d'utilisation</a></li>
        </ul>
    </div>
</body>

</html>