<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Tourisme à Dakhla - Découvrez l'Aventure</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        .hidden { display: none; }
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
            <a class="text-gray-600 hover:text-gray-800" href="activite.php">Activités</a>
            <a class="text-gray-600 hover:text-gray-800" href="hotel.php">Hôtels</a>
            <a class="text-gray-600 hover:text-gray-800" href="#">Formation de Surf</a>
            <a class="text-gray-600 hover:text-gray-800" href="excursion.php">Excursions</a>
        </nav>
        <div class="flex items-center space-x-4">
            <a class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" href="connection.php">Connexion</a>
            <a class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded" href="inscription.php">Inscription</a>
        </div>
    </div>
</header>
<main>
    <section class="relative">
        <video src="image/20613565-uhd_3840_2160_24fps.mp4" class="w-full h-96 object-cover" autoplay loop muted playsinline>
            Votre navigateur ne supporte pas la balise vidéo.
        </video>
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold">Découvrez la Magie de Dakhla</h1>
            <p class="mt-4 text-lg md:text-xl">Explorez des plages idylliques, des sports nautiques et des paysages à couper le souffle.</p>
            <div class="mt-6 space-x-4">
                <a class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" href="#">Explorer les Activités</a>
                <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 rounded" href="#">Réserver Maintenant</a>
            </div>
        </div>
    </section>
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">À propos de nous</h2>
        <p class="text-gray-600 leading-relaxed">Bienvenue sur <strong>Tourisme à Dakhla</strong>, votre guide ultime pour explorer la magnifique région de Dakhla, au Maroc. Notre mission est de vous offrir des expériences uniques à travers des activités comme le surf, le kitesurf, les excursions dans le désert et bien plus encore.</p>
        <p class="mt-4 text-gray-600">Que vous soyez un aventurier, un passionné de sports nautiques ou simplement à la recherche de détente, nous vous accompagnons pour créer des souvenirs inoubliables.</p>
    </section>
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Activités Populaires</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Surf à Dakhla" class="w-full h-48 object-cover" src="images/surf.jpg"/>
                <div class="p-4"><h3 class="text-lg font-semibold">Surf et Kitesurf</h3></div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Excursion Désert" class="w-full h-48 object-cover" src="images/desert.jpg"/>
                <div class="p-4"><h3 class="text-lg font-semibold">Excursions dans le Désert</h3></div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Tourisme Gastronomique" class="w-full h-48 object-cover" src="images/gastronomie.jpg"/>
                <div class="p-4"><h3 class="text-lg font-semibold">Expériences Culinaires</h3></div>
            </div>
        </div>
    </section>
</main>
<footer class="bg-gray-800 text-white py-8">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-lg font-semibold mb-4">Contactez-nous</h3>
                <ul class="text-gray-400">
                    <li class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i> Dakhla, Maroc</li>
                    <li class="mb-2"><i class="fas fa-phone mr-2"></i> +212 123 456 789</li>
                    <li class="mb-2"><i class="fas fa-envelope mr-2"></i> contact@dakhla-tourisme.com</li>
                </ul>
            </div>
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