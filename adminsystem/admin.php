<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">

<head>
    <title>Admin</title>
</head>

<body>
        <div class="navbar">
            <a href="../homepage.html"><img src="../images/logo.png" class="logo"></a>
            <ul>
                <li><a href="../homepage.html">Home</a></li>
                <li><a href="../shoppagina.html">Bestel Nu</a></li>
                <li><a href="../prijzen.php">Prijzen</a></li>
                <li><a href="../informatie.html">Informatie</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>
        <div class="container-login">
               <h1>Hallo, <?php echo ucfirst($_SESSION['voornaam']);?></h1>
                <br>
                <br>
                <h2>Hier zijn jouw gegevens:</h2>
                <br>
                <h3> Gebruikersnaam: <?php echo $_SESSION['email'];?> <h3>
                <br>
                <h3> Naam: <?php echo $_SESSION['voornaam'];?> <h3>
                <br>
                <br>
                <br>
                <a class="hometext" href="">Artikelen toevoegen<a>
                <br>
                <br>
                <a class="hometext" href="">Artikelen wijzigen<a>
                <br>
                <br>
                <a class="hometext" href="">Artikelen verwijderen<a>
                <br>
                <br>
                <br>
                <a class="hometext" href="registeradmin.php">Medewerkers toevoegen<a>
                <br>
                <br>
                <a class="hometext" href="">Mederwerkers gegevens wijzigen<a>
                <br>
                <br>
                <a class="hometext" href="">Medewerkers verwijderen<a>
                

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
</body>

</html>
