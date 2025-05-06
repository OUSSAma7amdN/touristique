<?php
session_start();

if (!isset($_SESSION['id_compte'])) {
    echo "<script>alert('Vous devez vous connecter pour accéder à cette page.'); window.location.href = 'login.php';</script>";
    exit();
}

$con = new mysqli('localhost', 'root', '', 'touristeprojet');

// Vérification de la connexion
if ($con->connect_error) {
    die('Erreur de connexion : ' . $con->connect_error);
}

// Préparer la requête pour éviter les injections SQL
$id = $_SESSION['id_compte'];
$req = $con->prepare("SELECT type FROM touriste JOIN compte ON touriste.id_touriste = compte.id_touriste WHERE compte.id_compte = ?");
$req->bind_param("i", $id);
$req->execute();
$res = $req->get_result();

if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    
    // Vérifier si l'utilisateur est un touriste
    if ($row['type'] == 'touriste') {
        echo "<script>alert('Vous n\'êtes pas autorisé à accéder à cette page.'); window.location.href = 'touriste_home.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Erreur : Compte non trouvé.'); window.location.href = 'login.php';</script>";
    exit();
}

$req->close();
$con->close();
?>
