<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../style.css">

<head>
    <title>Login</title>
</head>

<body>
    <header>
        <div class="banner">
        <div class="navbar">
            <a href="../homepage.html"><img src="../images/logo.png" class="logo"></a>
            <ul>
                <li><a href="../homepage.html">Home</a></li>
                <li><a href="../reservering.html">Reserveer Nu</a></li>
                <li><a href="../prijzen.html">Prijzen</a></li>
                <li><a href="../informatie.html">Informatie</a></li>
                <li><a href="loginpage.php">Login</a></li>
            </ul>
        </div>
    </header>
    
        <main>
        <div class="container-login">
            <form action="login.php" method="POST">
                <div class="row">
                    <h2 style="text-align:center">Login met Social Media of Handmatig</h2>

                    <div class="col">
                        <a href="https://www.facebook.com/" class="fb btn">
                            <i class="fa fa-facebook fa-fw"></i> Login met Facebook
                        </a>
                        <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoibmwifQ%3D%3D%22%7D"
                            class="twitter btn">
                            <i class="fa fa-twitter fa-fw"></i> Login met Twitter
                        </a>
                        <a href="https://accounts.google.com/signin/v2/identifier?ltmpl=mobNH&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                            class="google btn">
                            <i class="fa fa-google fa-fw"></i> Login met Google+
                        </a>
                    </div>

                    <div class="col">
                        <div class="hide-md-lg">
                            <p>Or sign in manually:</p>
                        </div>
                        <form action="login.php" method="POST">
                            <div class="login-form">
                                <div class="form_input">
                                    <?php 
                                    if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>
                                    <input type="text" name="uname" placeholder="Gebruikersnaam" required>
                                </div>
                                <div>
                                    <input type="password" name="password" placeholder="Wachtwoord" required>
                                </div>
                                <input type="submit" value="Log in">
                            </div>
                        </form>
                    </div>

                </div>
            </form>
        </div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="signup.php" style="color:white" class="btn">Account aanmaken</a>
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
