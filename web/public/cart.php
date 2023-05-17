<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/styles.css">
    <script src="../static/js/replaceState.js"></script>
    <script src="../static/js/readcart.js" defer></script>
    <title>Midas | Collectibles online!</title>
    <meta name="description" content="Midas is a collectibles store ranging from trading cards to limited Nintendo Switch models.">
    <link rel="icon" type="image/x-icon" href="../static/img/logo.webp">
</head>
<body>
    <div class="background"></div>
    <main>
        <header>
            <div class="title-wrap">
                <a class="logo-wrap"href="index.php"><img class="logo"src="../static/img/logo.webp"></a>
                <a href="index.php"><h1 class="title">MIDAS</h1></a>
            </div>
            <div class="button-wrap">
                <a class="headerbutton" href="products.php">Products</a>
            </div>
        </header>
        
        <a id="shopping-cart-item-template"class="shopping-cart-item">
            <div class="shopping-img-wrap">
                <img src="../static/img/pikachu-n64.webp"class="shopping-img">
            </div>
            <div class="shopping-product-info">
                <h2 class="shopping-product-title">Pikachu n64</h2>
                <h3 class="shopping-product-price">294.99</h3>
            </div>
            <input class="shopping-product-amount"type="number" value="1">
            <button id="remove-item-button-template" class="remove-item">Remove</button>
        </a>
        
        <footer class="footer">
            <h3>© Midas Collectibles <?php echo date("Y"); ?></h3>
            <a href="mailto: MidasCollectibles@NoExist.com"> <h3>MidasCollectibles@NoExist.com</h3></a>
            <h3>Yours truly &lt;3 </h3>
        </footer>
    </main>
</body>
</html>