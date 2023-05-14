<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/styles.css">
    <script src="../static/js/replaceState.js"></script>
    <script src="../static/js/switchReviews.js" defer></script>
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
        
        <section class="slogansection">
            <figure class="slogan-text-wrap">
                <h2 class="slogan-text">Find your <span>newest</span> collectible and make it your <span>GOLD!</span></h2>
                <button class="button-class"><a href="products.php">Go to items</a></button>
            </figure>
        </section>
        
        <section class="heading">
            <figure class="heading-image-wrap">
                <div class="heading-image-wrap-wrap">
                    <img class="heading-image" src="../static/img/pikachu-n64.webp">
                </div>
            </figure>
            <figure class="heading-text-wrap">
                <figure class="inner-heading-text-wrap">
                    <h2 class="heading-title">Pikachu N64</h2>
                    <p class="heading-desc">We've recently added the rare Pikachu N64 console to our collection!</p>
                </figure>
                <button class="button-class"><a href="item.php?p=2">Check it out!</a></button>
            </figure>
        </section>
        
        <section class="featured-items-wrap">
            <a  href="item.php?p=1" class="featured-item">
                <img class="featured-item-img" src="https://cdn.discordapp.com/attachments/754440404891336816/1105577453184892968/image.png">
            </a>
            <a href="item.php?p=2" class="featured-item">
                <img class="featured-item-img" src="https://cdn.discordapp.com/attachments/754440404891336816/1105579877052203098/pikachu-n64.webp">
            </a>
            <a href="item.php?p=3" class="featured-item">
                <img class="featured-item-img" src="https://cdn.discordapp.com/attachments/754440404891336816/1105578195547324426/image.png">
            </a>
            <a href="item.php?p=6" class="featured-item">
                <img class="featured-item-img" src="https://m.media-amazon.com/images/I/81ZhVKZo2+L.jpg">
            </a>
        </section>

        <section class="steps-wrap">
            <figure class="step-wrap">
                <img class="step-img" src="../static/img/eyeglasses.webp">
                <h3 class="step-title">Take a look at our website!</h3>
                <p class="step-desc">A good collectible doesn't come without a seller, feel free to look around!</p>
            </figure>
            <figure class="step-wrap">
                <img class="step-img" src="../static/img/tap.webp">
                <h3 class="step-title">Choose your product</h3>
                <p class="step-desc">Go to the products page and choose the product you want</p>
            </figure>
            <figure class="step-wrap">
                <img class="step-img" src="../static/img/shopping-cart.webp">
                <h3 class="step-title">Add to cart</h3>
                <p class="step-desc">Add the product to your cart and proceed to checkout</p>
            </figure>
            <figure class="step-wrap">
                <img class="step-img" src="../static/img/delivery-truck.webp">
                <h3 class="step-title">Wait for delivery</h3>
                <p class="step-desc">Congratulations! You've bought your next addition to your collection!</p>
            </figure>
        </section>

        <section class="coolitem-wrap">
            <figure class="coolitem-text-wrap">
                <figure class="inner-heading-text-wrap">
                    <h2 class="coolitem-title">Nintendo Switch OLED Zelda edition</h2>
                    <p class="coolitem-desc">New Nintendo Switch version as a tribute to The Legend of Zelda: Tears of the Kingdom!</p>
                </figure>
                <button class="button-class"><a href="item.php?p=1">Check it out!</a></button>
            </figure>
            <figure class="coolitem-image-wrap">
                <div class="coolitem-image-wrap-wrap">
                    <img class="coolitem-image" src="https://cdn.discordapp.com/attachments/754440404891336816/1105577453184892968/image.png">
                </div>
            </figure>
        </section>
        
        <section class="reviews">
            <button id="review-button-left" class="review-button"><</button>
            <figure data-number-review="1" id="review-wrap">
                <img src="../static/img/dwayne.webp" id="review-user-img">
                <h3 id="review-username">Dwayne "The Rock" Johnson</h3>
                <img src="../static/img/stars.webp" class="review-stars">
                <p id="review-desc">"This site overall has a really nice aesthetic and I would definitely get my collectibles here again someday."</p>
            </figure>
            <button id="review-button-right" class="review-button">></button>
        </section>
        
        <footer class="footer">
            <h3>© Midas Collectibles <?php echo date("Y"); ?></h3>
            <a href="mailto: MidasCollectibles@NoExist.com"> <h3>MidasCollectibles@NoExist.com</h3></a>
            <h3>Yours truly &lt;3 </h3>
        </footer>
    </main>
</body>
</html>