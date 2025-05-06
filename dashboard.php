<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['id_compte']) || !isset($_SESSION['nom'])) {
    header("Location: connection.php");
    exit();
}

// Récupérer le nom de l'utilisateur connecté
$nom_utilisateur = $_SESSION['nom'];

// Gérer la déconnexion
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: connection.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tourisme à Dakhla</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <!-- Ajouter AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
    <style>
        .hidden {
            display: none;
        }
        /* Ajouter un effet de dégradé pour le texte sur la vidéo */
        .video-overlay {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8));
        }
        /* Effet de transition pour le menu mobile */
        #mobile-menu {
            transition: all 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100 bg-cover bg-center bg-no-repeat" style="background-image: url('images/ton-image.jpg');">
<header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center">
            <img alt="Logo du tourisme de Dakhla" class="h-10 w-10 rounded-full" height="50" src="https://storage.googleapis.com/a1aa/image/qcE7iHQ5No9Y3IgkCvCvjRXZQ-Y__5QrlsomGHfzpcY.jpg" width="50"/>
            <span class="ml-3 text-xl font-semibold text-gray-800">Tourisme à Dakhla</span>
        </div>
        <nav class="hidden md:flex space-x-6">
            <a class="text-gray-600 hover:text-gray-800 transition duration-300" href="activite.php">Activités</a>
            <a class="text-gray-600 hover:text-gray-800 transition duration-300" href="hotel.php">Hôtels</a>
            <a class="text-gray-600 hover:text-gray-800 transition duration-300" href="formation.php">Formation de Surf</a>
            <a class="text-gray-600 hover:text-gray-800 transition duration-300" href="excursion.php">Excursions</a>
        </nav>
        <div class="flex items-center space-x-4">
            <span class="text-gray-800">Bienvenue, <?php echo htmlspecialchars($nom_utilisateur); ?> !</span>
            <a href="accuiel.php?logout=true" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded transition duration-300 shadow-lg">
                Déconnexion
            </a>
            <button class="md:hidden text-gray-600 focus:outline-none" onclick="toggleMenu()">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden bg-white">
        <nav class="px-6 py-4">
            <a class="block text-gray-600 hover:text-gray-800 py-2 transition duration-300" href="activite.php">Activités</a>
            <a class="block text-gray-600 hover:text-gray-800 py-2 transition duration-300" href="hotel.php">Hôtels</a>
            <a class="block text-gray-600 hover:text-gray-800 py-2 transition duration-300" href="#">Formation de Surf</a>
            <a class="block text-gray-600 hover:text-gray-800 py-2 transition duration-300" href="excursion.php">Excursions</a>
        </nav>
    </div>
</header>

<main>
    <!-- Section Vidéo avec effet de dégradé -->
    <section class="relative">
        <video src="image/20613565-uhd_3840_2160_24fps.mp4" 
               class="w-full h-96 object-cover" 
               autoplay loop muted playsinline>
            Votre navigateur ne supporte pas la balise vidéo.
        </video>
        <div class="absolute inset-0 video-overlay flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold" data-aos="fade-up">Découvrez la Magie de Dakhla</h1>
            <p class="mt-4 text-lg md:text-xl" data-aos="fade-up" data-aos-delay="100">Découvrez le surf de classe mondiale, des paysages à couper le souffle et des aventures inoubliables</p>
            <div class="mt-6 space-x-4" data-aos="fade-up" data-aos-delay="200">
                <a class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-300 shadow-lg" href="#">Explorer les Activités</a>
                <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 rounded transition duration-300 shadow-lg" href="#">Réserver Maintenant</a>
            </div>
        </div>
    </section>

    <!-- Section Activités Populaires -->
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6" data-aos="fade-up">Activités Populaires</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300" data-aos="fade-up">
                <img alt="Activité 1 à Dakhla" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/pQYvGt4OYBuyY-NsSkQQYo2jTWI4Mtw6MaViFj9TUdM.jpg" width="400"/>
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Surf</h3>
                    <p class="text-gray-600">Profitez des vagues exceptionnelles de Dakhla.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="100">
                <img alt="Activité 2 à Dakhla" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/2j5Zd34i042I2fp04gz53uaSQtXF7fbJveUYtSkKSlI.jpg" width="400"/>
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Kitesurf</h3>
                    <p class="text-gray-600">Vivez une expérience unique de kitesurf.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="200">
                <img alt="Activité 3 à Dakhla" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/zFvWY0FnGgLoLV6mzFiiHyWkhuNL4Avb8kJSMkMxJEA.jpg" width="400"/>
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Excursions</h3>
                    <p class="text-gray-600">Explorez les paysages époustouflants de Dakhla.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Témoignages -->
    <section class="bg-gray-50 py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center" data-aos="fade-up">Ce que disent nos visiteurs</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300" data-aos="fade-up">
                    <p class="text-gray-600">"Une expérience incroyable ! Les paysages sont à couper le souffle."</p>
                    <div class="mt-4 flex items-center">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="h-10 w-10 rounded-full"/>
                        <span class="ml-3 font-semibold text-gray-800">Jean Dupont</span>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <p class="text-gray-600">"Le surf à Dakhla est une expérience unique. Je recommande !"</p>
                    <div class="mt-4 flex items-center">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="h-10 w-10 rounded-full"/>
                        <span class="ml-3 font-semibold text-gray-800">Marie Curie</span>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <p class="text-gray-600">"Un endroit paradisiaque pour se détendre et profiter de la nature."</p>
                    <div class="mt-4 flex items-center">
                        <img src="https://via.placeholder.com/40" alt="Avatar" class="h-10 w-10 rounded-full"/>
                        <span class="ml-3 font-semibold text-gray-800">Ahmed Ali</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

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
            <div>
                <h3 class="text-lg font-semibold mb-4">Contactez-nous</h3>
                <ul class="text-gray-400">
                    <li class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i> Dakhla, Maroc</li>
                    <li class="mb-2"><i class="fas fa-phone mr-2"></i> +212 123 456 789</li>
                    <li class="mb-2"><i class="fas fa-envelope mr-2"></i> contact@dakhla-tourisme.com</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center">
            <p class="text-gray-400">&copy; 2023 Tourisme à Dakhla. Tous droits réservés.</p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialiser AOS
    AOS.init({
        duration: 1000, // Durée des animations
        once: true, // Les animations ne se jouent qu'une fois
    });

    // Définir la fonction toggleMenu pour afficher/masquer le menu mobile
    function toggleMenu() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    }
</script>
</body>
</html>