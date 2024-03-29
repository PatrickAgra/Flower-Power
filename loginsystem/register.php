<?php
session_start();

require_once('../db_connect.php');

if (isset($_POST['submit'])) {
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $firstName = trim($_POST['first_name']);
        $prefixes = trim($_POST['prefixes']);
        $lastName = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $adress = trim($_POST['adress']);
        $postalcode = trim($_POST['postalcode']);
        $place = trim($_POST['place']);
        $birthdate = trim($_POST['birthdate']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        $options = array("cost" => 4);
        $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = 'select * from klanten where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email' => $email];
            $stmt->execute($p);
            
            if ($stmt->rowCount() == 0) {
                $sql = "insert into klanten (voornaam, tussenvoegsels, achternaam, email, adres, postcode, woonplaats, geboortedatum, gebruikersnaam, `password`) 
                values(:fname,:pfixes,:lname,:email,:adress,:postalcode,:place,:bdate,:usern,:pass)";
            
                try {
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':fname' => $firstName,
                        ':pfixes' => $prefixes,
                        ':lname' => $lastName,
                        ':email' => $email,
                        ':adress' => $adress,
                        ':postalcode' => $postalcode,
                        ':place' => $place,
                        ':bdate' => $birthdate,
                        ':usern' => $username,
                        ':pass' => $hashPassword
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'User has been created successfully';
                } catch (PDOException $e) {
                    $errors[] = $e->getMessage();
                }
            } else {
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPassword = $password;

                $errors[] = 'Email address already registered';
            }
        } else {
            $errors[] = "Email address is not valid";
        }
    } else {
        if (!isset($_POST['first_name']) || empty($_POST['first_name'])) {
            $errors[] = 'First name is required';
        } else {
            $valFirstName = $_POST['first_name'];
        }
        if (!isset($_POST['last_name']) || empty($_POST['last_name'])) {
            $errors[] = 'Last name is required';
        } else {
            $valLastName = $_POST['last_name'];
        }

        if (!isset($_POST['email']) || empty($_POST['email'])) {
            $errors[] = 'Email is required';
        } else {
            $valEmail = $_POST['email'];
        }

        if (!isset($_POST['password']) || empty($_POST['password'])) {
            $errors[] = 'Password is required';
        } else {
            $valPassword = $_POST['password'];
        }
    }
}
?>

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
    </div>
</header>
        <main>
        <div class="container-login">
	<div class="row h-100 mt-5 justify-content-center align-items-center">
		<div class="col-md-5 mt-3 pt-2 pb-5 align-self-center border bg-light">
			<h1 class="mx-auto w-25" >Register</h1>
			<?php 
            if (isset($errors) && count($errors) > 0) {
                foreach ($errors as $error_msg) {
                    echo '<div class="error">' . $error_msg . '</div>';
                }
            }
                
            if (isset($success)) {
                echo '<div class="success">' . $success . '</div>';
            }
			?>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="form-group">
					<label for="email">First Name:</label>
					<input type="text" name="first_name" placeholder="Enter First Name" class="form-control" value="<?php echo ($valFirstName ?? '')?>">
				</div>
                <div class="form-group">
					<label for="email">prefixes:</label>
					<input type="text" name="prefixes" placeholder="Prefixes" class="form-control">
				</div>
                <div class="form-group">
					<label for="email">Last Name:</label>
					<input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" value="<?php echo ($valLastName ?? '')?>">
				</div>
                <div class="form-group">
					<label for="email">Email:</label>
					<input type="text" name="email" placeholder="Enter Email" class="form-control" value="<?php echo ($valEmail ?? '')?>">
				</div>

                <div class="form-group">
					<label for="email">Adress:</label>
					<input type="text" name="adress" placeholder="Enter Adress" class="form-control">
				</div>
                <div class="form-group">
					<label for="email">Postalcode:</label>
					<input type="text" name="postalcode" placeholder="Enter Postalcode" class="form-control">
				</div>
                <div class="form-group">
					<label for="email">Place:</label>
					<input type="text" name="place" placeholder="Enter Place" class="form-control">
				</div>
                <div class="form-group">
					<label for="email">Birthdate:</label>
					<input type="date" name="birthdate" placeholder="Enter Birthdate" class="form-control">
				</div>
                <div class="form-group">
				<label for="email">Username:</label>
					<input type="text" name="username" placeholder="Enter Username" class="form-control">
				</div>
				<div class="form-group">
				<label for="email">Password:</label>
					<input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo ($valPassword ?? '')?>">
				</div>
                <label for="email">Image:</label>
					<input type="file" name="image" class="form-control" required accept="image/jpg, image/jpeg, image/png">
				</div>

				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				<p class="pt-2"> Back to <a href="login.php">Login</a></p>
				
			</form>
		</div>
	</div>
</div>


        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="login.php" style="color:white" class="btn">Heb je al een account?</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white" class="btn">Wachtwoord vergeten?</a>
                </div>
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
