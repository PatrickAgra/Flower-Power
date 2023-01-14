<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">

<head>
    <title>Sign up</title>
</head>

<body>
    <header>
        <div class="banner">
        <div class="navbar">
            <a href="homepage.html"><img src="../images/logo.png" class="logo"></a>
            <ul>
                <li><a href="../homepage.html">Home</a></li>
                <li><a href="../shoppagina.html">Shop Nu</a></li>
                <li><a href="../prijzen.html">Prijzen</a></li>
                <li><a href="../informatie.html">Informatie</a></li>
                <li><a href="loginpage.php">Login</a></li>
            </ul>
        </div>
    </header>
        <main>
        <div class="container-login">
            <form action="signup-check.php" method="POST">
                <div class="row">
                    <h2 style="text-align:center">Sign up</h2>
                        <form action="signup-check.php" method="POST">
                            <div class="login-form">
                                <div class="form_input">
                            <?php 
                            if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php 
                            if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>

                            <?php 
                            if (isset($_GET['name'])) { ?>
                                <div>
                                    <label class="loginlabels">Voornaam</label>
                                    <input type="text"
                                    name="name"
                                    placeholder="Voornaam"
                                    value="<?php echo $_GET['name']; ?>" >
                                </div>
                            <?php } else { ?>
                                <div>
                                    <label class="loginlabels">Voornaam</label>
                                    <input type="text"
                                    name="name"
                                    placeholder="Voornaam">
                                </div>
                            <?php }?>
                                <div>
                                    <label class="loginlabels">Tussenvoegsels<label>
                                    <input type="text" 
                                    name="prefixes" 
                                    placeholder="Tussenvoegsels">
                                </div>
                            <?php
                            if (isset($_GET['surname'])) { ?>
                                <div>
                                <label class="loginlabels">Achternaam</label>
                                    <input type="text" 
                                    name="surname" 
                                    placeholder="achternaam"
                                    value="<?php echo $_GET['surname']; ?>" >
                                </div>
                            <?php } else { ?>
                                <div>
                                    <label class="loginlabels">Achternaam</label>
                                    <input type="text" 
                                    name="surname" 
                                    placeholder="Achternaam">
                                </div>
                            <?php }?>
                                <div>
                                    <label class="loginlabels">E-mail</label>
                                    <input type="email"
                                    name="email" 
                                    placeholder="E-mail">
                                </div>
                            <?php 
                            if (isset($_GET['adress'])) { ?>
                                <div>
                                    <label class="loginlabels">Adres</label>
                                    <input type="text"  
                                    name="adress" 
                                    placeholder="Adres"
                                    value="<?php echo $_GET['adress']; ?>" >
                                </div>
                            <?php } else { ?>
                                <div>
                                    <label class="loginlabels">Adres</label>
                                    <input type="text" 
                                    name="adress" 
                                    placeholder="Adres">
                                </div>
                            <?php }?>
                            <?php 
                            if (isset($_GET['postalcode'])) { ?>
                                <div>
                                    <label class="loginlabels">Postcode</label>
                                    <input type="text"  
                                    name="postalcode" 
                                    placeholder="Postcode"
                                    value="<?php echo $_GET['postalcode']; ?>" >
                                </div>
                            <?php } else { ?>
                                <div>
                                    <label class="loginlabels">Postcode</label>
                                    <input type="text" 
                                    name="postalcode"
                                    placeholder="Postcode">
                                </div>
                            <?php }?>
                            <?php 
                            if (isset($_GET['place'])) { ?>
                                <div>
                                    <label class="loginlabels">Woonplaats</label>
                                    <input type="text"  
                                    name="place" 
                                    placeholder="Woonplaats"
                                    value="<?php echo $_GET['place']; ?>" >
                                </div>
                            <?php } else { ?>
                                <div>
                                    <label class="loginlabels">Woonplaats</label>
                                    <input type="text" 
                                    name="place" 
                                    placeholder="Woonplaats">
                                </div>
                            <?php }?>
                            <?php
                            if (isset($_GET['place'])) { ?>
                                <div>
                                    <label class="loginlabels">Geboortedatum</label>
                                    <input type="date"  
                                    name="birthdate" 
                                    placeholder="Geboortedatum"
                                    value="<?php echo $_GET['place']; ?>" >
                                </div>
                            <?php } else { ?>
                                <div>
                                    <label class="loginlabels">Geboortedatum</label>
                                    <input type="date" 
                                    name="birthdate" 
                                    placeholder="Geboortedatum">
                                </div>
                            <?php }?>
                            <?php 
                            if (isset($_GET['uname'])) { ?>
                                <div>
                                    <label class="loginlabels">Gebruikersnaam</label>
                                    <input type="text" 
                                    id="uname" 
                                    name="uname" 
                                    placeholder="Gebruikersnaam"
                                    value="<?php echo $_GET['uname']; ?>" >
                                </div>
                            <?php } else { ?>
                                <div>
                                    <label class="loginlabels">Gebruikersnaam</label>
                                    <input type="text" 
                                    id="uname" 
                                    name="uname" 
                                    placeholder="Gebruikersnaam">
                                </div>
                            <?php }?>
                                <div>
                                    <label class="loginlabels">Password</label>
                                    <input type="password" 
                                    name="password" 
                                    placeholder="Wachtwoord">
                                </div>
                                <div>
                                    <label class="loginlabels">Confirm Password<label>
                                    <input type="password" 
                                    name="re_password" 
                                    placeholder="Controleer Wachtwoord">
                                </div>
                                <input type="submit" value="Sign up">
                            </div>
                        </form>
                    </div>

                </div>
            </form>
        </div>


        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="loginpage.php" style="color:white" class="btn">Heb je al een account?</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Wachtwoord vergeten?</a>
                </div>
            </div>
        </div>

    </div>
    </main>
</body>

</html>
