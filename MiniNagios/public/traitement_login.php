<?php
require '../vendor/autoload.php';

use App\Database ;

$emailSaisie = $_POST["email"];
$mdpSaisie = $_POST["password"];

if (isset($_POST['email']) && isset($_POST['password'])) {
    session_start();
    $pdo = Database::getConnection();
    $stmt = $pdo->prepare("SELECT * FROM administrateurs WHERE email = :email");
    $stmt->execute(['email' => $_POST['email']]);
    $montableau = $stmt->fetchAll();
    // On vérifie qu'il existe une ligne dans $montableau
    //print_r($montableau);
    //exit ;

        if (password_verify($_POST['password'], $montableau[0]['password_hash'])&&($emailSaisie == $montableau[0]['email'])) {
            $_SESSION['admin_id'] = $user['id'];
            header("Location: dashboard.php?success=1");
        } else {
            header("Location: login.php?error=1");
        }}
        // Manque validation EMAIL & mot depasse



    // Si oui alors c'est que le email existe
    // On met cette première ligne dans un tableau, par exemple $user
    // On vérifie que le password est OK avec password_verify
    // le $user['id] vient de la base de données
    //$_SESSION['admin_id'] = $user['id'];
    //header("Location: dashboard.php?success=1");

//}

//else {
  //  header("Location: login.php?error=1");

//}
