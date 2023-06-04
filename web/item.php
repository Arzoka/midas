<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/styles.css">
    <script src="static/js/addtocart.js" defer></script>
    <script src="static/js/replaceState.js"></script>
    <title>Midas | Collectibles online!</title>
    <meta name="description" content="Midas is a collectibles store ranging from trading cards to limited Nintendo Switch models.">
    <link rel="icon" type="image/x-icon" href="static/img/logo.webp">
</head>
<body>
    <div class="background"></div>
    <main class="body-wrap">
        <header>
            <div class="title-wrap">
                <a class="logo-wrap"href="home"><img class="logo"src="static/img/logo.webp"></a>
                <a href="home"><h1 class="title">MIDAS</h1></a>
            </div>
            <div class="button-wrap">
                <a class="headerbutton" href="products">Products</a>
            </div>
        </header>
        
        <section class="item-wrap">
            <figure class="item-top-wrap">
                <div class="item-img-page-wrap">
                    <?php include 'private/itemimg.php'; ?>
                </div>
                <div id="shopping-cart"class="item-selection-wrap-wrap">
                    <a class="cart-wrap" href="cart"> <img class="cart" src="static/img/cart.webp"><figure class="cart-display-wrap-wrap"><div class="cart-display-wrap"> <h3 id="cart-content-display">0</h3></div></figure> </a>
                    <div class="item-selection-wrap">
                        <?php include 'private/itemname.php'; ?>
                        <?php include 'private/itemprice.php'; ?>
                        <div class="recommended-items-wrap">
                            <?php include 'private/itemreco.php';?>
                        </div>
                    </div>
                </div>
            </figure>
            <figure class="item-bottom-wrap">
                <?php include 'private/itemdesc.php'; ?>
                <a href="#shopping-cart" id="addtocart-button"><button class="add-to-cart button-class">Add to cart</button></a>
            </figure>
            <?php include 'private/itemid.php'; ?>
        </section>
      
        <footer class="footer">
            <h3>© Midas Collectibles <?php echo date("Y"); ?></h3>
            <a href="MidasCollectibles@NoExist.com"> <h3>MidasCollectibles@NoExist.com</h3></a>
            <h3>Yours truly &lt;3 </h3>
        </footer>
    </main>
</body>
</html>