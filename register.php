<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Registreren - BikeStore</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include_once("includes/header.inc.php"); ?>

<main class="register-page">
    <h1>Registreren</h1>
    <form>
        <input type="text" placeholder="Naam" required>
        <input type="email" placeholder="E-mail" required>
        <input type="password" placeholder="Wachtwoord" required>
        <button class="btn">Registreren</button>
    </form>
</main>

<?php include_once("includes/footer.inc.php"); ?>
</body>
</html>
