<?php 
session_start();
require_once('db_connect.php');
?>
<html>

<head>
    <title>Prijzen</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="background-test">
    <div class="banner">
        <header>
            <div class="navbar">
                <a href="homepage.html"><img src="./images/logo.png" class="logo"></a>
                <div class="navbar-menu">
                    <ul>
                        <li><a href="homepage.html">Home</a></li>
                        <li><a href="shoppagina.php">Bestel Nu</a></li>
                        <li><a href="informatie.html">Informatie</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="./loginsystem/login.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
            <section class="body-container" cellspacing="4">
                <div class="container2">
                    <?php
                    $show_products = $pdo->prepare("SELECT * FROM `artikel`");
                    $show_products->execute();
                    if ($show_products->rowCount() > 0) {
                        while ($fetch_products = $show_products->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                            <div class="price-column">
                    <div class="product">
                        <img class="image-size" src="uploaded_img/<?= $fetch_products['foto']; ?>" alt="photo">
                        <div class="name"><?= $fetch_products['artikel']; ?></div>
                        <div class="product-price"><p>€</P><?= $fetch_products['prijs']; ?><p>,00-</p></div>
                        <div class="description"><?= $fetch_products['omschrijving']; ?></div>
                        <button class="add-to-cart">Voeg Toe!</button>
                    </div>
                        </div>
                            <?php
                        }
                    } else {
                        echo '<p class="empty">Nog geen producten toegevoegd</p>';
                    }
                    ?>
                </div>
            </section>
        </main>
    </div>
    <footer>
        <div class="footer">
            <div class="column">
                <div class="title">Mijn gegevens</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
            <div class="column">
                <div class="title">Service</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
            <div class="column">
                <div class="title">Contact</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
            <div class="column">
                <div class="title">Informatie</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
            <div class="column">
                <div class="title">Categorie&#235;n</div>
                <ul>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                    <li>Ipsum</li>
                </ul>
            </div>
        </div>
    </footer>
    </div>

</body>

</html>
