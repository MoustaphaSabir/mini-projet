<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devis Formation Bureautique</title>
    <style>
        /* Styles CSS */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <header>
        <ul>
            <li><a href="projet.php">Accueil</a></li>
            <li><a href="Inscription.html">inscription</a></li>
            <li><a href="Accueil.html">Accueil</a></li>
        </ul>
    </header>
    <div class="container">
        <h2>Devis Formation Bureautique</h2>
    <table>
        <tr>
            <th>Module</th>
            <th>Durée (heures)</th>
            <th>Prix (EUR)</th>
        </tr>
        <tr>
            <td>Microsoft Word</td>
            <td>20</td>
            <td>300</td>
        </tr>
        <tr>
            <td>Microsoft Access</td>
            <td>20</td>
            <td>350</td>
        </tr>
        <tr>
            <td>Microsoft Excel</td>
            <td>30</td>
            <td>400</td>
        </tr>
    </table>
        <p>Total: <?php echo 300 + 350 + 400; ?> EURO</p>
    </div>
</body>
</html>
