<?php
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($action == 'a') {
        header('Location: inscription.php');
    } elseif ($action == 'b') {
        header('Location: listing.php');
    } elseif ($action == 'c') {
        header('Location: modification.php');
    } elseif ($action == 'd') {
        header('Location: annulation.php');
    }
}
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Demandes de Stages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .container {
            width: 400px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        input[type="radio"] {
            float: right;
        }
        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Gestion Des Demandes De Stages</h2>
    <p><strong>Choisir une action</strong></p>
    
    <form action="traitement.php" method="POST">
        <table>
            <tr>
                <td>Nouvelle Inscription</td>
                <td><input type="radio" name="action" value="a"></td>
            </tr>
            <tr>
                <td>Listing des demandes de stage</td>
                <td><input type="radio" name="action" value="b"></td>
            </tr>
            <tr>
                <td>Modification d'un stage</td>
                <td><input type="radio" name="action" value="c"></td>
            </tr>
            <tr>
                <td>Annulation d'un stage</td>
                <td><input type="radio" name="action" value="d"></td>
            </tr>
        </table>
        <button type="submit" class="btn">Valider</button>
    </form>
</div>

</body>
</html>
