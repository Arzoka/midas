<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/styles.css">
    <script src="static/js/replaceState.js"></script>
    <script src="static/js/readcart.js" defer></script>
    <title>Midas | Collectibles online!</title>
    <meta name="description" content="Midas is a collectibles store ranging from trading cards to limited Nintendo Switch models.">
    <link rel="icon" type="image/x-icon" href="static/img/logo.webp">
</head>
<body>
    <div class="background"></div>
    <main>
        <header>
            <div class="title-wrap">
                <a class="logo-wrap"href="home"><img class="logo"src="static/img/logo.webp"></a>
                <a href="home"><h1 class="title">MIDAS</h1></a>
            </div>
            <div class="button-wrap">
                <a class="headerbutton" href="products">Products</a>
            </div>
        </header>
        <section class="shopping-cart">
            <section class="shopping-cartitems">
                <div class="shoppingcarttitle-wrap">
                    <h3>Shopping Cart</h3>
                    <p id="product-amount">0 Products</p>
                </div>
                <figure id="shopping-cart-item-template"class="shopping-cart-item">
                    <a class="shopping-img-wrap">
                        <img src=""class="shopping-img">
                    </a>
                    <div class="shopping-product-info">
                        <h2 class="shopping-product-title"></h2>
                        <h3 class="shopping-product-price"></h3>
                        <h3 class="shopping-product-total-price"></h3>
                        <div class="shopping-product-price-bottom">
                            <button id="remove-item-button-template" class="remove-item">
                                <img src="static/img/trashcan.svg">
                            </button>
                            <div class="product-amount-wrap">
                                <p class="shopping-product-amount">1</p>
                            </div>
                        </div>
                    </div>
                </figure>
            </section>
            <section class="shopping-carttotal">
                <figure class="summary-back">
                    <h2 class="summarytitle">Summary</h2>
                    <div class="betweenbar">
                        <div class="summarybar subtotal">
                            <h2>Subtotal</h2>
                            <h2 id="subtotal">999,-</h2>
                        </div>
                        <div class="summarybar sending-costs">
                            <h3>Sending costs</h3>
                            <h3 id="shippingcost">Free</h3>
                        </div>
                    </div>
                    <div class="summarybar total">
                        <h2>Total</h2>
                        <h2 id="total">999,-</h2>
                    </div>
                    <a href="register"><button class="continuetopay">Continue to register</button></a>
                    
                </figure>
            </section>
        </section>
        
        <footer class="footer">
            <h3>© Midas Collectibles <?php echo date("Y"); ?></h3>
            <a href="mailto: MidasCollectibles@NoExist.com"> <h3>MidasCollectibles@NoExist.com</h3></a>
            <h3>Melvin Lockx SD1C</h3>
        </footer>
    </main>
</body>
</html>