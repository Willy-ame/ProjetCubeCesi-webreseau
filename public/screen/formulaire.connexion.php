<!DOCTYPE html>
<html>

<head>
    <title>Connexion Ressources Relationnelles</title>
    <meta charset="utf-8">
    <?php include '../css/style.css.php'; ?>
</head>

<body>
    <h1>Bienvenue sur Ressources Relationnelles</h1>
    <h2>Veuillez vous connecter</h2>
    <br>
    <form method="POST" action="../../src/Controller/connexion.php">
        <table>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="login">Login</label></td>
                    <td><input type="text" name="login" placeholder="Nom d'utilisateur"/></td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="mdp">Password</label></td>
                    <td><input type="password" name="mdp" placeholder="Mot de passe"/>
                </div>
            </tr>
        </table>
            <input type="submit" value="Connexion" id="btnEnvoyer">
    </form>
    <div><p>Pas inscrit ? Faites une demande <a href="./Inscription.php">d'inscription</a></p></div>
    <a href="../index.php">
                    <button type="button" class="btn btn-outline-danger my-3">Retour</button>
                </a>
</body>
</html>
