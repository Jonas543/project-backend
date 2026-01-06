<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Mijn account - BikeStore</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include_once("includes/header.inc.php"); ?>

<main class="account-page">
    <h1>Mijn account</h1>

    <section>
        <h2>Mijn bestellingen</h2>
        <p>Bestelling #1234 – €2.499</p>
    </section>

    <section>
        <h2>Wachtwoord wijzigen</h2>
        <input type="password" id="new-password" placeholder="Nieuw wachtwoord">
        <button class="btn">Wijzig</button>
    </section>
</main>

<?php include_once("includes/footer.inc.php"); ?>
</body>
</html>
