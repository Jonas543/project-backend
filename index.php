<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>BikeStore - Home</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include_once("includes/header.inc.php"); ?>

<main>
    <section class="hero">
        <h1>Welkom bij BikeStore</h1>
        <p>Racefietsen, mountainbikes en e-bikes van topkwaliteit</p>
        <a href="products.php" class="btn">Shop nu</a>
    </section>

    <section class="featured">
        <h2>Populaire fietsen</h2>
        <div class="product-grid">
            <div class="product-card">
                <h3>Racefiets Pro</h3>
                <p>€2.499</p>
                <a href="product.php?id=1" class="btn">Bekijk</a>
            </div>
            <div class="product-card">
                <h3>Mountainbike X</h3>
                <p>€1.899</p>
                <a href="product.php?id=2" class="btn">Bekijk</a>
            </div>
            <div class="product-card">
                <h3>E-Bike Urban</h3>
                <p>€3.199</p>
                <a href="product.php?id=3" class="btn">Bekijk</a>
            </div>
        </div>
    </section>
</main>

<?php include_once("includes/footer.inc.php"); ?>
</body>
</html>
