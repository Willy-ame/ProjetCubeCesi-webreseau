<!DOCTYPE html>
<html>

<head>
    <title>Connexion (RE)Sources Relationnelles</title>
    <meta charset="utf-8">
    <?php include '../css/style.css.php'; ?>
</head>

<body>
    <h1>Bienvenue sur (RE)Sources Relationnelles</h1>
    <h2>Veuillez vous connecter</h2>
    <br>
    <form method="POST" action="../../src/Controller/connexion.php">
        <table>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="Login">Login</label></td>
                    <td><input type="text" name="Login" placeholder="Nom d'utilisateur"/></td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="Password">Password</label></td>
                    <td><input type="password" name="Password" placeholder="Mot de passe"/>
                </div>
            </tr>
        </table>
            <input type="submit" value="Connexion" id="btnEnvoyer">
    </form>
    <br>
    <div><p>Vous n'avez pas de compte ? S'inscrire<a href="./Inscription.php">ici</a></p></div>
    <a href="../index.php">
                    <button type="button" class="btn btn-outline-danger my-3">Retour</button>
                </a>
</body>
</html>
