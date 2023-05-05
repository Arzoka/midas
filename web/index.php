<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yoshi's clothing store is a store created purely out of boredom, any item here isn't real unless you're willing to pay me like 50 bucks">
    <link rel="stylesheet" href="css/styles.css">
    <script src="javascript/main.js"></script>
    <title>Yoshi's epic clothing store</title>
    <link rel="icon" type="image/x-icon" href="img/logo.webp">
</head>
<body>
    <figure class="body-wrap">
        <header>
            <a class="logo-wrap" href="index.php"> <img class="logo" src="img/logo.webp"> </a>
            <div>
                <h1>Yoshi's epic clothing store</h1>
            </div>
        </header>

        <section class="itemtopbar">
            <form method="POST">
                <select onchange="this.form.submit()" name="sortalgo" id="sortalgo">
                    <option value="return">Sort by</option>
                    <option value="return">-</option>
                    <option value="standard">Standard</option>
                    <option value="highlow">High-Low</option>
                    <option value="lowhigh">Low-High</option>
                    <option value="az">A-Z</option>
                </select>
            </form>
        </section>

        <section class="items">
            <?php
                if (!empty($_POST['sortalgo'])) {
                    switch ($_POST['sortalgo']) {
                      case 'standard': 
                        include 'connectstandard.php';
                        break;
                      case 'highlow':
                        include 'connecthl.php';
                        break;
                      case 'lowhigh':
                        include 'connectlh.php';
                        break;
                      case 'az':
                        include 'connectaz.php';
                        break;
                    case 'return';
                        include 'connectstandard.php'; 
                        break;
                      default:
                        echo 'ERROR';
                    }
                }
                else{
                    include 'connectstandard.php'; 
                }
            ?>
        </section>
        <footer class="footer">
            <h3>© BestClothingEver 2023</h3>
            <h3>Yours truly &lt;3 </h3>
        </footer>
    </figure>
</body>
</html>