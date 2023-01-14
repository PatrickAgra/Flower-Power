<?php 
session_start();

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
                <a href="homepage.html"><img src="./images/logo.png" class="logo"></a>
                <div class="navbar-menu">
                    <ul>
                        <li><a href="homepage.html">Home</a></li>
                        <li><a href="shoppagina.html">Bestel Nu</a></li>
                        <li><a href="prijzen.html">Prijzen</a></li>
                        <li><a href="informatie.html">Informatie</a></li>
                        <li><a href="./loginsystem/loginpage.php">Login</a></li>
                    </ul>
                </div>
            </div>
    </header>
    
        <main>
        <div class="container-login">
               <h1>Hallo, <?php echo $_SESSION['voornaam'];?></h1>
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
                <a class="hometext" href="../reservering.html">Reserveer hier een fiets<a>

                

        </div>
        

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="logout.php" style="color:white" class="btn">Uitloggen</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Wachtwoord veranderen?</a>
                </div>
            </div>
        </div>

    </div>
</main>
</body>

</html>
