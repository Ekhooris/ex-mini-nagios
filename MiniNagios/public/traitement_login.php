<?php
require '../vendor/autoload.php';
use App\Database;



if (isset($_POST['email']) && isset($_POST['password'])) {
    session_start();
    $pdo = Database::getConnection();
    $stmt = $this->pdo->prepare("SELECT * FROM administrateur WHERE email = :email");
    $stmt->execute(['email' => $_POST['email']]);
    $montableau = $stmt->fetchAll();
    // On vérifie qu'il existe une ligne dans $montableau
    if ($montableau) {
        $user = $montableau[0];


    }
    // Si oui alors c'est que le email existe
    // On met cette première ligne dans un tableau, par exemple $user
    // On vérifie que le password est OK avec password_verify
    // le $user['id] vient de la base de données
    $_SESSION['admin_id'] = $user['id'];
    header("dashboard.php?success=1");
}

else {
    header("login.php?error=1");

}
