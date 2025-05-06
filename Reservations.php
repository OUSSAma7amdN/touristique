<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservations - Projet Touristique Dakhla</title>
    <!-- Lien Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-image: url('background_reservations.jpg');
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Header -->
    <header class="bg-blue-400 text-white">
        <div class="container mx-auto px-4 py-5 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="7amdan Tourist Dakhla logo.png" alt="Logo Dakhla" class="h-10">
                <h1 class="text-2xl font-bold">Dakhla Tourisme</h1>
            </div>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="accuil.php" class="hover:underline">Accueil</a></li>
                    <li><a href="activite.php" class="hover:underline">Activités</a></li>
                    <li><a href="Reservations.php" class="hover:underline">Réservations</a></li>
                    <li><a href="moniteur.php" class="hover:underline">Moniteurs</a></li>
                    <li><a href="contact.php" class="hover:underline">Contact</a></li>
                    <li><a href="connection.php" class="bg-yellow-500 px-4 py-2 rounded-lg hover:bg-yellow-400">Connexion</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Section Réservations -->
    <section class="py-12 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8">Réservez vos Activités</h2>
            <p class="text-gray-600 mb-12">Planifiez votre aventure à Dakhla en quelques clics.</p>

            <form action="traitement_reservation.php" method="POST" class="bg-white shadow-lg p-8 rounded-lg max-w-lg mx-auto">
                <div class="mb-6">
                    <label for="nom" class="block text-gray-700 font-semibold mb-2">Nom complet</label>
                    <input type="text" id="nom" name="nom" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Adresse Email</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                </div>

                <div class="mb-6">
                    <label for="telephone" class="block text-gray-700 font-semibold mb-2">Numéro de Téléphone</label>
                    <input type="tel" id="telephone" name="telephone" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                </div>

                <div class="mb-6">
                    <label for="activite" class="block text-gray-700 font-semibold mb-2">Choisir une Activité</label>
                    <select id="activite" name="activite" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                        <option value="">-- Sélectionnez une activité --</option>
                        <option value="surf">Surf et Kitesurf</option>
                        <option value="excursion">Excursions en Désert</option>
                        <option value="plongee">Plongée Sous-Marine</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="date" class="block text-gray-700 font-semibold mb-2">Date de Réservation</label>
                    <input type="date" id="date" name="date" class="w-full border border-gray-300 rounded-lg px-4 py-2" required>
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-semibold mb-2">Message (Optionnel)</label>
                    <textarea id="message" name="message" class="w-full border border-gray-300 rounded-lg px-4 py-2"></textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-400">Envoyer la Réservation</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
  
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
