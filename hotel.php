<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Hôtels à Dakhla</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <script>
        function toggleMenu() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        }
    </script>
</head>
<body class="bg-gray-100">
<header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="flex items-center">
            <img alt="Logo du tourisme de Dakhla" class="h-10 w-10 rounded-full" height="50" src="https://storage.googleapis.com/a1aa/image/qcE7iHQ5No9Y3IgkCvCvjRXZQ-Y__5QrlsomGHfzpcY.jpg" width="50"/>
            <span class="ml-3 text-xl font-semibold text-gray-800"><a href="accuiel.php">Tourisme à Dakhla</a></span>
        </div>
        <nav class="hidden md:flex space-x-6">
            <a class="text-gray-600 hover:text-gray-800" href="activite.php">Activités</a>
            <a class="text-gray-600 hover:text-gray-800" href="hotel.php">Hôtels</a>
            <a class="text-gray-600 hover:text-gray-800" href="#">Formation de Surf</a>
            <a class="text-gray-600 hover:text-gray-800" href="excursion.php">Excursions</a>
        </nav>
        <div class="flex items-center space-x-4">
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded" id="connexion"><a href="connection.php">Connexion</a></button>
            <button class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded" id="inscription.php"><a href="inscription.php">Inscription</a></button>
            <button class="md:hidden text-gray-600 focus:outline-none" onclick="toggleMenu()">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
    </div>
    <div id="mobile-menu" class="hidden md:hidden">
        <nav class="px-6 py-4">
            <a class="block text-gray-600 hover:text-gray-800 py-2" href="activite.php">Activités</a>
            <a class="block text-gray-600 hover:text-gray-800 py-2" href="hotel.php">Hôtels</a>
            <a class="block text-gray-600 hover:text-gray-800 py-2" href="#">Formation de Surf</a>
            <a class="block text-gray-600 hover:text-gray-800 py-2" href="excursion.php">Excursions</a>
            <a class="block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded mt-4" href="#">Connexion</a>
        </nav>
    </div>
</header>
<main>
    <section class="container mx-auto py-12 px-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Hôtels à Dakhla</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Hôtel 1 à Dakhla" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/hotel1.jpg" width="400"/>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Hôtel La Perle de Dakhla</h3>
                    <p class="mt-2 text-gray-600">Un hôtel de luxe offrant une vue imprenable sur la baie de Dakhla.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Hôtel 2 à Dakhla" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/hotel2.jpg" width="400"/>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Dakhla Attitude</h3>
                    <p class="mt-2 text-gray-600">Un hôtel idéal pour les amateurs de kitesurf, situé directement sur la plage.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Hôtel 3 à Dakhla" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/hotel3.jpg" width="400"/>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">West Point Dakhla</h3>
                    <p class="mt-2 text-gray-600">Un hôtel écologique offrant des bungalows confortables avec vue sur l'océan.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Hôtel 4 à Dakhla" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/hotel4.jpg" width="400"/>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">PK25</h3>
                    <p class="mt-2 text-gray-600">Un hôtel moderne avec des installations de kitesurf et une ambiance conviviale.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Hôtel 5 à Dakhla" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/hotel5.jpg" width="400"/>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Dakhla Club</h3>
                    <p class="mt-2 text-gray-600">Un hôtel de charme avec des chambres confortables et une vue sur la lagune.</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img alt="Hôtel 6 à Dakhla" class="w-full h-48 object-cover" height="200" src="https://storage.googleapis.com/a1aa/image/hotel6.jpg" width="400"/>
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Ocean Vagabond</h3>
                    <p class="mt-2 text-gray-600">Un hôtel convivial avec des bungalows en bois et un restaurant en bord de mer.</p>
                </div>
            </div>
        </div>
    </section>
</main>

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

<script>
    // تعريف دالة toggleMenu
    function toggleMenu() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    }
</script>
</body>
</html>