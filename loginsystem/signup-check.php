<?php

session_start();
include "db_connect.php";

//extra data dit keer, test

$name = ($_POST['name']);
$prefixes = ($_POST['prefixes']);
$surname = ($_POST['surname']);
$email = ($_POST['email']);
$adress = ($_POST['adress']);
$postalcode = ($_POST['postalcode']);
$place = ($_POST['place']);
$birthdate = ($_POST['birthdate']);
$uname = ($_POST['uname']);
$pass = ($_POST['password']);
$re_pass = ($_POST['re_password']);

//


$user_data = 'name=' . $name . '& prefixes=' . $prefixes . '& surname=' . $surname . '& email=' . $email . '& adres=' . $adress . '& postalcode=' . $postalcode . '& place=' . $place . '& uname=' . $uname;


if (empty($name)) {
    header("Location: signup.php?error=Voornaam is vereisd&$user_data");
    exit(); 
} else if (empty($surname)) {
    header("Location: signup.php?error=Achternaam is vereisd&$user_data");
    exit(); 
} else if (empty($email)) {
    header("Location: signup.php?error=E-mail is vereisd&$user_data");
    exit();
} else if (empty($adress)) {
    header("Location: signup.php?error=Adres is vereisd&$user_data");
    exit();
} else if (empty($postalcode)) {
    header("Location: signup.php?error=Postcode is vereisd&$user_data");
    exit();
} else if (empty($place)) {
    header("Location: signup.php?error=Woonplaats is vereisd&$user_data");
    exit();
} else if (empty($birthdate)) {
    header("Location: signup.php?error=Geboortedatum is vereisd&$user_data");
    exit();
} else if (empty($uname)) {
    header("Location: signup.php?error=Gebruikersnaam is vereisd&$user_data");
    exit();
} else if (empty($pass)) {
    header("Location: signup.php?error=Wachtwoord is vereisd&$user_data");
    exit();
} else if (empty($re_pass)) {
    header("Location: signup.php?error=Wachtwoord controleren is vereisd&$user_data");
    exit();
} else if ($pass !== $re_pass) {
        header("Location: signup.php?error=Het controle wachtwoord komt niet overeen&$user_data");
        exit();
} else {
    $sql = "SELECT * FROM klanten WHERE gebruikersnaam='$uname' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: signup.php?error=Deze gebruikersnaam is al in gebruik&$user_data");
        exit();
    } else {
        $sql2 = "INSERT INTO klanten(voornaam, tussenvoegsels, achternaam, email, adres, postcode, woonplaats, geboortedatum, gebruikersnaam, wachtwoord) 
                 VALUES ('$name', '$prefixes', '$surname', '$email', '$adress', '$postalcode', '$place', '$birthdate', '$uname', '$pass')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2) {
            header("Location: signup.php?success=Je account is succesvol aangemaakt");
            exit();
        } else {
            header("Location: signup.php?error=Onverwachtse fout. Probreer het later opnieuw&$user_data");
            exit();
        }
    }
}
?>
