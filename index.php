<?php
// Simple backend message (peut être remplacé plus tard)
$message = "Test AZ-104 - Azure App Service deployment réussi";
?>
<?php echo "Slot: " . getenv("WEBSITE_SLOT_NAME"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infobizz on Microsoft - Azure Test</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f8;
        }

        header {
            background-color: #0078d4;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            padding: 40px;
            text-align: center;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .message {
            font-size: 18px;
            color: #0078d4;
            margin-top: 15px;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            color: #888;
            font-size: 14px;
        }
    </style>
</head>

<body>

<header>
    <h1>Infobizz on Microsoft</h1>
    <p>Cloud & Azure Test Environment</p>
</header>

<div class="container">
    <div class="card">
        <div class="title">Bienvenue sur votre App Service Azure</div>

        <p>
            Ceci est une page de test pour la certification AZ-104.
        </p>

        <div class="message">
            <?php echo $message; ?>
        </div>

        <p>
            Utilisateur : Remy Wembo / Azure Administrator
        </p>
    </div>
</div>

<footer>
    © <?php echo date("Y"); ?> Infobizz on Microsoft - All rights reserved
</footer>

</body>
</html>
