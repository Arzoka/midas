<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/css/styles.css">
    <script src="../static/js/main.js" defer></script>
    <title>Midas | Collectibles online!</title>
    <meta name="description" content="Midas is a collectibles store ranging from trading cards to limited Nintendo Switch models.">
    <link rel="icon" type="image/x-icon" href="../static/img/logo.webp">
</head>
<body>
    <div class="background"></div>
    <main class="body-wrap">
        <header>
            <div class="title-wrap">
                <a class="logo-wrap"href="index.html"><img class="logo"src="../static/img/logo.webp"></a>
                <a href="index.html"><h1 class="title">MIDAS</h1></a>
            </div>
            <div class="button-wrap">
                <a class="headerbutton" href="products.php">Products</a>
            </div>
        </header>

        <section id="itemtopbar">
            <figure class="orderbywrap">
                <div id="buttonsortwrap">
                    <button id="opensortalgo">Order by <p id="opensortalgo-arrow">></p></button>
                </div>
                <form id="post-form" method="POST">
                    <input type="submit" name="standard" value="Default">
                    <input type="submit" name="highlow" value="Price high-low" >
                    <input type="submit" name="lowhigh" value="Price low-high">
                    <input type="submit" name="az" value="Alphabetical A-Z">
                </form>
            </figure>
        </section>

        <section class="items">
            <?php
                include '../private/connect.php';
            ?>
        </section>
        
        <footer class="footer">
            <h3>© Midas Collectibles 2023</h3>
            <a href="MidasCollectibles@NoExist.com"> <h3>MidasCollectibles@NoExist.com</h3></a>
            <h3>Yours truly &lt;3 </h3>
        </footer>
    </main>
</body>
</html>