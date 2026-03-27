<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<h2>Connexion Administration</h2>

<?php if(isset($_GET['erreur'])): ?>
    <p style="color:red;">Email ou mot de passe incorrect.</p>
<?php endif; ?>

<form action="traitement_login.php" method="POST">
    <div>
        <label>Email :</label>
        <input type="email" name="email" required>
    </div>
    <br>
    <div>
        <label>Mot de passe :</label>
        <input type="password" name="password" required>
    </div>
    <br>
    <button type="submit">Se connecter</button>
</form>
</body>
</html>