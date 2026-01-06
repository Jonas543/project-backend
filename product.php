<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Racefiets Pro - BikeStore</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<?php include_once("includes/header.inc.php"); ?>

<main class="product-detail">
    <div class="product-info">
        <h1>Racefiets Pro</h1>
        <p><strong>Prijs:</strong> €2.499</p>
        <p>Carbon frame, Shimano Ultegra, 7.2 kg</p>

        <button class="btn add-to-cart"
                data-name="Racefiets Pro"
                data-price="2499">
            Toevoegen aan winkelmandje
        </button>
    </div>

    <section class="reviews">
        <h2>Reviews</h2>

        <div class="review">
            <p><strong>Jan:</strong> Super fiets!</p>
        </div>

        <form>
            <textarea placeholder="Schrijf een review"></textarea>
            <button class="btn">Plaats review</button>
        </form>
    </section>
</main>

<?php include_once("includes/footer.inc.php"); ?>
</body>
</html>
