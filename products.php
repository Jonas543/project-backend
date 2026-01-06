<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Fietsen - BikeStore</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php include_once("includes/header.inc.php"); ?>

<main class="products-page">
    <aside class="filters">
        <h3>Filter op categorie</h3>
        <label><input type="checkbox" class="filter" value="race"> Racefiets</label><br>
        <label><input type="checkbox" class="filter" value="mtb"> Mountainbike</label><br>
        <label><input type="checkbox" class="filter" value="ebike"> E-Bike</label>
    </aside>

    <section class="products">
        <div class="product-card" data-category="race">
            <h3>Racefiets Pro</h3>
            <p>€2.499</p>
            <a href="product.php?id=1" class="btn">Bekijk</a>
        </div>
        <div class="product-card" data-category="mtb">
            <h3>Mountainbike X</h3>
            <p>€1.899</p>
            <a href="product.php?id=2" class="btn">Bekijk</a>
        </div>
        <div class="product-card" data-category="ebike">
            <h3>E-Bike Urban</h3>
            <p>€3.199</p>
            <a href="product.php?id=3" class="btn">Bekijk</a>
        </div>
    </section>
</main>

<?php include_once("includes/footer.inc.php"); ?>
</body>
</html>
