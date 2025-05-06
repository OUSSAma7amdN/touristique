<?php
// Connexion à la base de données avec new mysqli
$con = new mysqli('localhost', 'root', '', 'touristeprojet');

// Vérification de la connexion
if ($con->connect_error) {
    die('Erreur de connexion : ' . $con->connect_error);
}

// Vérifier si la requête est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);

    // Vérifier si l'email existe déjà dans la table 'touriste'
    $stmt = $con->prepare("SELECT id_touriste FROM touriste WHERE email = ? OR tel = ?");
    $stmt->bind_param("ss", $email, $tel);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo " <script> alert('Email ou téléphone déjà inscrit.') </script>";
        header("refresh:1; url=inscription.php");
        exit();
    }
    $stmt->close();

    // Vérifier si les mots de passe correspondent
    if ($password !== $confirmer) {
        echo "<script> alert('Les mots de passe ne sont pas identiques.') </script>";
        header('Refresh:1; url=inscription.php');
        exit();
    }

    // Hacher le mot de passe
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Insérer les données dans la table 'touriste'
    $stmt = $con->prepare("INSERT INTO touriste (nom, prenom, email, tel) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nom, $prenom, $email, $tel);

    if ($stmt->execute()) {
        // Récupérer l'ID du touriste inséré
        $id_touriste = $stmt->insert_id;
        $stmt->close();

        // Insérer les données dans la table 'compte'
        $date_creation = date('Y-m-d H:i:s');
        $stmt = $con->prepare("INSERT INTO compte (nom_touriste, mot_de_passe, date_creation, id_touriste) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $nom, $password_hashed, $date_creation, $id_touriste);
        $stmt->execute();
        $stmt->close();

        echo " <script> alert('Inscription réussie !') </script>";
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
    <title>Mot de passe oublié</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100 bg-cover bg-center" style="background-image: url('windsurfing-2298647_1920.jpg');">
    <div class="bg-white bg-opacity-20 backdrop-blur-md rounded-lg p-8 w-96 shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-700 text-center">Mot de passe oublié</h2>
        <p class="text-gray-500 text-center mt-2">Entrez votre e-mail pour recevoir un lien de réinitialisation.</p>
        
        <form id="forgotPasswordForm" action="motpass.php" method="POST" class="mt-4">
            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Adresse e-mail</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg mt-2 focus:ring focus:ring-blue-300" placeholder="Votre email" required>
            </div>
            <div class="mb-4">
                <button type="submit" id="submitBtn" class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">Envoyer</button>
            </div>
        </form>

        <p id="message" class="text-green-500 text-center mt-4 hidden">Un e-mail de réinitialisation a été envoyé.</p>

        <div class="text-center mt-4">
            <a href="connexion.php" class="text-blue-500 hover:underline">Retour à la connexion</a>
        </div>
    </div>

    <script>
        document.getElementById('forgotPasswordForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const emailField = document.getElementById('email');
            const email = emailField.value.trim();
            const message = document.getElementById('message');
            const submitBtn = document.getElementById('submitBtn');

            // Vérifier si l'email est valide
            if (!validateEmail(email)) {
                alert("Veuillez entrer une adresse e-mail valide.");
                return;
            }

            // Désactiver le bouton pour éviter les clics multiples
            submitBtn.disabled = true;
            submitBtn.classList.add("opacity-50", "cursor-not-allowed");

            // Simuler l'envoi de l'email (remplacer cette partie par une requête AJAX si nécessaire)
            setTimeout(() => {
                message.classList.remove('hidden');
                emailField.value = "";
                submitBtn.disabled = false;
                submitBtn.classList.remove("opacity-50", "cursor-not-allowed");

                // Cacher le message après 5 secondes
                setTimeout(() => {
                    message.classList.add('hidden');
                }, 5000);
            }, 1500); // Simulation d'un délai d'envoi
        });

        // Fonction de validation d'email
        function validateEmail(email) {
            const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return regex.test(email);
        }
    </script>
</body>
</html>
