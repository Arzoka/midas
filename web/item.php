<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="javascript/main.js" defer></script>
    <title>Midas | Collectibles online!</title>
    <meta name="description" content="Midas is a collectibles store ranging from trading cards to limited Nintendo Switch models.">
    <link rel="icon" type="image/x-icon" href="img/logo.webp">
</head>
<body>
    <div class="background"></div>
    <figure class="body-wrap">
        <header>
            <div class="title-wrap">
                <a class="logo-wrap"href="index.html"><img class="logo"src="img/logo.webp"></a>
                <a href="index.html"><h1 class="title">MIDAS</h1></a>
            </div>
            <div class="button-wrap">
                <a class="headerbutton" href="products.php">Products</a>
            </div>
        </header>
        <section class="item-wrap">
            <figure class="item-top-wrap">
                <div class="item-img-page-wrap">
                    <?php include 'stupidphpstuff/itemimg.php'; ?>
                </div>
                <div class="item-selection-wrap-wrap">
                    <a class="cart-wrap" href="index.html"> <img class="cart" src="img/cart.webp"> </a>
                    <div class="item-selection-wrap">
                        <?php include 'stupidphpstuff/itemname.php'; ?>
                        <?php include 'stupidphpstuff/itemprice.php'; ?>
                    </div>
                </div>
            </figure>
            <figure class="item-bottom-wrap">
                <?php include 'stupidphpstuff/itemdesc.php'; ?>
                <button class="add-to-cart button-class">Add to cart</button>
            </figure>
        </section>

        <section class="items">
            <input id="hidden" type="hidden" name="hidden" value="true">
        </section>
      
        <footer class="footer">
            <h3>© Midas Collectibles 2023</h3>
            <a href="MidasCollectibles@NoExist.com"> <h3>MidasCollectibles@NoExist.com</h3></a>
            <h3>Yours truly &lt;3 </h3>
        </footer>
    </figure>
</body>
</html>