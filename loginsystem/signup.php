<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">

<head>
    <title>Sign up</title>
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <a href="homepage.html"><img src="../images/logo.png" class="logo"></a>
            <ul>
                <li><a href="../homepage.html">Home</a></li>
                <li><a href="../reservering.html">Reserveer Nu</a></li>
                <li><a href="../prijzen.html">Prijzen</a></li>
                <li><a href="../informatie.html">Informatie</a></li>
                <li><a href="loginpage.php">Login</a></li>
            </ul>
        </div>
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

                            <label class="loginlabels">Name</label>
                            <?php 
                            if (isset($_GET['name'])) { ?>
                                <input type="text" 
                                name="name" 
                                placeholder="Voornaam"
                                value="<?php echo $_GET['name']; ?>" >
                            <?php } else { ?>
                                <input type="text" 
                                name="name" 
                                placeholder="Voornaam">
                            <?php }?>
                            <?php 
                            if (isset($_GET['uname'])) { ?>
                                <div>
                                    <label class="loginlabels">Username</label>
                                    <input type="text" 
                                    id="uname" 
                                    name="uname" 
                                    placeholder="Gebruikersnaam"
                                    value="<?php echo $_GET['uname']; ?>" >
                                </div>
                            <?php } else { ?>
                                <div>
                                    <label class="loginlabels">Username</label>
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
</body>

</html>
