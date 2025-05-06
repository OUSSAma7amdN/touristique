<?php 
// Connexion à la base de données avec new mysqli
$con = new mysqli('localhost', 'root', '', 'touristeprojet');

// Vérification de la connexion
if ($con->connect_error) {
    die('Erreur de connexion : ' . $con->connect_error);
}

// Vérifier si la requête est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);

    // Vérifier si l'email ou le tél existe déjà
    $stmt = $con->prepare("SELECT id_touriste FROM touriste WHERE email = ? OR tel = ?");
    $stmt->bind_param("ss", $email, $tel);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo " <script> alert('Email ou téléphone déjà inscrit.') </script>";
        header("refresh:1; url=inscription.php");
        exit();
    }
    $stmt->close();

    // Vérifier si les mots de passe correspondent
    if ($password !== $confirmer) {
        echo "<script> alert('Les mots de passe ne sont pas identiques.') </script>";
        header('Refresh:1; url=inscription.php');
        exit();
    }

    // Hacher le mot de passe
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Insérer les données dans la table 'touriste'
    $stmt = $con->prepare("INSERT INTO touriste (nom, prenom, email, tel, type) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nom, $prenom, $email, $tel, $type);

    if ($stmt->execute()) {
        $id_touriste = $stmt->insert_id;
        $stmt->close();

        // Insérer les données dans la table 'compte'
        $date_creation = date('Y-m-d H:i:s');
        $stmt = $con->prepare("INSERT INTO compte (nom_touriste, mot_de_passe, date_creation, id_touriste) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $nom, $password_hashed, $date_creation, $id_touriste);
        $stmt->execute();
        $stmt->close();

        echo " <script> alert('Inscription réussie !') </script>";
        header("location:connection.php");
        exit();
    } else {
        echo "Échec de l'inscription.";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: url('windsurfing-2298647_1920.jpg') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-900 bg-opacity-50">
    <div class="w-full max-w-lg bg-white bg-opacity-30 backdrop-blur-lg shadow-lg rounded-2xl p-8">
        <h2 class="text-4xl font-bold text-center mb-6 text-gray-900">Inscription</h2>
        <form method="post" class="space-y-4">
            <input type="text" name="nom" placeholder="Nom" required class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-80 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="text" name="prenom" placeholder="Prénom" required class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-80 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="email" name="email" placeholder="Email" required class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-80 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="tel" name="tel" placeholder="Téléphone" required class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-80 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="password" name="password" placeholder="Mot de passe" required class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-80 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="password" name="confirmer" placeholder="Confirmer le mot de passe" required class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-80 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <select name="type" required class="w-full px-4 py-3 rounded-lg bg-white bg-opacity-80 text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="touriste">Touriste</option>
                <option value="moniteur">Moniteur</option>
            </select>
            <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">Inscription</button>
        </form>
        <p class="text-center mt-4 text-gray-900">Déjà un compte ? <a href="connection.php" class="text-blue-700 font-semibold hover:underline">Connexion</a></p>
    </div>
</body>
</html>
