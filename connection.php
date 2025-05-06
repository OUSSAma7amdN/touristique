<?php
session_start();

$con = new mysqli('localhost', 'root', '', 'touristeprojet');

// Vérifier la connexion à la base de données
if ($con->connect_error) {
    die('Erreur de connexion : ' . $con->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Vérifier si l'email existe
    $stmt = $con->prepare("SELECT c.id_compte, c.mot_de_passe, t.nom 
                           FROM compte c 
                           INNER JOIN touriste t ON c.id_touriste = t.id_touriste 
                           WHERE t.email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_compte, $hashed_password, $nom);
        $stmt->fetch();

        // Vérifier le mot de passe
        if (password_verify($password, $hashed_password)) {
            $_SESSION['id_compte'] = $id_compte;
            $_SESSION['nom'] = $nom;
           

            echo "<script>alert('Connexion réussie !');</script>";
            header("refresh:1; url=dashboard.php");
            exit();
        } else {
            $error = "Mot de passe incorrect.";
        }
    } else {
        $error = "Aucun compte trouvé avec cet email.";
    }
    $stmt->close();
}
$con->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('windsurfing-2298647_1920.jpg');">
    <div class="flex items-center justify-center h-full">
        <div class="bg-white bg-opacity-20 backdrop-blur-md rounded-lg p-8 w-80">
            <h2 class="text-2xl font-bold text-gray-600 text-center mb-6">Connexion</h2>

            <?php if (isset($error)) : ?>
                <p class="text-red-500 text-center"><?php echo $error; ?></p>
            <?php endif; ?>

            <form action="connection.php" method="POST">
                <div class="mb-4 relative">
                    <input type="email" name="email" placeholder="Email" class="w-full p-3 pl-10 bg-transparent border-b border-white text-white placeholder-white focus:outline-none" required>
                    <i class="fas fa-user absolute left-3 top-3 text-white"></i>
                </div>
                <div class="mb-4 relative">
                    <input type="password" name="password" placeholder="Mot de passe" class="w-full p-3 pl-10 bg-transparent border-b border-white text-white placeholder-white focus:outline-none" required>
                    <i class="fas fa-lock absolute left-3 top-3 text-white"></i>
                </div>
                <button type="submit" class="w-full py-3 bg-white bg-opacity-80 text-black font-bold rounded-full hover:bg-opacity-100 transition">Se connecter</button>
            </form>

            <p class="text-center text-white mt-4">
                <a href="mot_de_passe_oublie.php" class="text-blue-400">Mot de passe oublié ?</a>
            </p>
            <p class="text-center text-white mt-2">Pas encore de compte ? <a href="inscription.php" class="text-blue-400">S'inscrire</a></p>
        </div>
    </div>
</body>
</html>
