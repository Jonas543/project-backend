<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login - BikeStore</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include_once("includes/header.inc.php"); ?>

<main class="login-page">
    <h1>Login</h1>
    <form>
        <input type="email" placeholder="E-mail" required>
        <input type="password" placeholder="Wachtwoord" required>
        <button class="btn">Login</button>
    </form>
</main>

<?php include_once("includes/footer.inc.php"); ?>
</body>
</html>
