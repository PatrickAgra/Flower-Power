<?php 
session_start();
require_once('../db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">

<head>
    <title>Home</title>
</head>

<body>
        <header>
            <div class="navbar">
                <a href="../homepage.html"><img src="../images/logo.png" class="logo"></a>
                <div class="navbar-menu">
                    <ul>
                        <li><a href="../homepage.html">Home</a></li>
                        <li><a href="../shoppagina.php">Bestel Nu</a></li>
                        <li><a href="../informatie.html">Informatie</a></li>
                        <li><a href="../contact.html">Contact</a></li>
                        <li><a href="home.php">Jouw Profiel</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <main>
             <div class="container-login">
               <h1>Hallo, <?php echo ucfirst($_SESSION['voornaam']);?></h1>
                <br>
                <br>
                <h2>Dit ben jij:</h2>
                <br>
                <h3> Gebruikersnaam: <?php echo $_SESSION['gebruikersnaam'];?> <h3>
                <br>
                <h3> Naam: <?php echo $_SESSION['voornaam'];?> <h3>
                <br>
                <br>
                <br>
                <a class="hometext" href="../informatie.html">Hier vind je alle relevante informatie<a>
                <br>
                <br>
                <a class="hometext" href="../prijzen.html">Bekijk de actuele deals bij jou passen<a>
                <br>
                <br>
                <a class="hometext" href="../productpagina.html">Koop vandaag nog een bosje bloemen<a>
                

        </div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="logout.php?logout=true" style="color:white" class="btn">Uitloggen</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Wachtwoord veranderen?</a>
                </div>
            </div>
        </div>
        </main>

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
       
</body>

</html>
