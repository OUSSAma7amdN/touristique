<?php
session_start();
require_once __DIR__ . '/../controllers/MoniteurController.php';

if (!isset($_SESSION['id_compte']) || $_SESSION['type'] !== 'moniteur') {
    header("Location: ../login.php");
    exit();
}

// Mise à jour du profil
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $experience = htmlspecialchars($_POST['experience']);
    $tarif = htmlspecialchars($_POST['tarif']);
    $description = htmlspecialchars($_POST['description']);

    if (MoniteurController::mettreAJourProfil($_SESSION['id_compte'], $experience, $tarif, $description)) {
        echo "<script>alert('Profil mis à jour !');</script>";
    } else {
        echo "<script>alert('Erreur lors de la mise à jour.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moniteurs - Projet Touristique Dakhla</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/style.css">
    <style>
        body {
            background-image: url('../assets/img.png');
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-gray-50">

<header class="bg-blue-400 text-white">
    <div class="container mx-auto px-4 py-5 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center space-x-3">
            <img src="../assets/logo.png" alt="Logo Dakhla" class="h-10">
            <h1 class="text-2xl font-bold"><a href="accueil.php">Dakhla Tourisme</a></h1>
        </div>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="accueil.php" class="hover:underline">Accueil</a></li>
                <li><a href="activite.php" class="hover:underline">Activités</a></li>
                <li><a href="reservations.php" class="hover:underline">Réservations</a></li>
                <li><a href="moniteurs.php" class="hover:underline">Moniteurs</a></li>
                <li><a href="contact.php" class="hover:underline">Contact</a></li>
                <li><a href="login.php" class="bg-yellow-500 px-4 py-2 rounded-lg hover:bg-yellow-400">Connexion</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Formulaire de mise à jour du profil -->
<div class="container mx-auto py-10">
    <h1 class="text-4xl font-bold text-center text-blue-700">Mettez à Jour Votre Profil</h1>
    <form method="POST" class="bg-white shadow-md rounded-lg p-6 mt-8 mx-auto max-w-lg">
        <label class="block mb-2 font-bold">Expérience :</label>
        <input type="text" name="experience" required class="w-full p-2 border rounded mb-4">

        <label class="block mb-2 font-bold">Tarif (€/h) :</label>
        <input type="number" name="tarif" required class="w-full p-2 border rounded mb-4">

        <label class="block mb-2 font-bold">Description :</label>
        <textarea name="description" required class="w-full p-2 border rounded mb-4"></textarea>

        <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded w-full">Mettre à Jour</button>
    </form>
</div>

<!-- Section Moniteurs -->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-8">Rencontrez nos Moniteurs</h2>
        <p class="text-gray-600 mb-12">Des experts passionnés pour vous guider dans vos aventures.</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Moniteur 1 -->
            <div class="bg-white shadow-lg p-6 rounded-lg">
                <img src="../assets/moniteur1.jpg" alt="Ahmed El Kitesurfer" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold">Ahmed El Kitesurfer</h3>
                <p class="text-gray-600">10 ans d'expérience en surf et kitesurf.</p>
                <a href="#" class="block mt-4 text-blue-600 hover:underline">Voir le profil</a>
            </div>
            <!-- Moniteur 2 -->
            <div class="bg-white shadow-lg p-6 rounded-lg">
                <img src="../assets/moniteur2.jpg" alt="Sarah La Guide" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold">Sarah La Guide</h3>
                <p class="text-gray-600">Experte en randonnées et excursions locales.</p>
                <a href="#" class="block mt-4 text-blue-600 hover:underline">Voir le profil</a>
            </div>
            <!-- Moniteur 3 -->
            <div class="bg-white shadow-lg p-6 rounded-lg">
                <img src="../assets/moniteur3.jpg" alt="Youssef Le Plongeur" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold">Youssef Le Plongeur</h3>
                <p class="text-gray-600">Spécialiste en plongée sous-marine et snorkeling.</p>
                <a href="#" class="block mt-4 text-blue-600 hover:underline">Voir le profil</a>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">À propos de nous</h3>
                <p class="text-gray-400">Découvrez la magie de Dakhla avec nous. Nous offrons des expériences uniques et des aventures inoubliables.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold mb-4">Liens utiles</h3>
                <ul class="text-gray-400">
                    <li class="mb-2"><a href="activite.php" class="hover:text-gray-300">Activités</a></li>
                    <li class="mb-2"><a href="hotel.php" class="hover:text-gray-300">Hôtels</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-gray-300">Formation de Surf</a></li>
                    <li class="mb-2"><a href="excursion.php" class="hover:text-gray-300">Excursions</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center">
            <p class="text-gray-400">&copy; 2023 Tourisme à Dakhla. Tous droits réservés.</p>
        </div>
    </div>
</footer>

<script>
    function toggleMenu() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    }
</script>

</body>
</html>
