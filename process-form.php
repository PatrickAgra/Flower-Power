<?php

$naam = $_POST["naam"];
$email = $_POST["email"];
$telefoonnummer = $_POST["telefoonnummer"];
$volwassenen = filter_input(INPUT_POST, "volwassenen", FILTER_VALIDATE_INT);
$kinderen = filter_input(INPUT_POST, "kinderen", FILTER_VALIDATE_INT);
$checkin = $_POST["checkin"];
$checkout = $_POST["checkout"];
$fietsreservering = $_POST["fietsreservering"];
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);

if (! $terms) {
    die("Please Accept the terms");
}

$host = "localhost";
$dbname = "bikeshop";
$username = "root";
$password = "";

$conn = mysqli_connect(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if (mysqli_connect_errno()) {
    die("Connection failed" . mysqli_connect_error());
}

$sql = "INSERT INTO klantinfo (naam, email, telefoonnummer, volwassenen, kinderen, checkin, checkout, fietsreservering)
        Values(?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = mysqli_stmt_init($conn);

if (! mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param(
    $stmt,
    "ssiiissi",
    $naam,
    $email,
    $telefoonnummer,
    $volwassenen,
    $kinderen,
    $checkin,
    $checkout,
    $fietsreservering,
);

mysqli_stmt_execute($stmt);

header("Location: thankyou.html");
exit();
?>
