<?php

session_start();
include "db_connect.php";

$uname = ($_POST['uname']);
$pass = ($_POST['password']);


if (empty($uname)) {
    header("Location: loginpage.php?error=Gebruikersnaam is vereisd");
    exit();
} else if (empty($pass)) {
    header("Location: loginpage.php?error=Wachtwoord is vereisd");
    exit();
} else {
    $sql = "SELECT * FROM klanten WHERE gebruikersnaam='$uname' AND wachtwoord='$pass'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['gebruikersnaam'] === $uname && $row['wachtwoord'] === $pass) {
            $_SESSION['gebruikersnaam'] = $row['gebruikersnaam'];
            $_SESSION['voornaam'] = $row['voornaam'];
            $_SESSION['klantcode'] = $row['klantcode'];
            header("Location: home.php");
            exit();
        } else {
            header("Location: loginpage.php?error=Onjuist gebruikersnaam of wachtwoord");
            exit();
        }
    } else {
        header("Location: loginpage.php?error=Onjuist gebruikersnaam of wachtwoord");
        exit();
    }
}
?>
