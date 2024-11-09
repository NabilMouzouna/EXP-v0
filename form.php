<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "PentestingV0";

$con = mysqli_connect($host, $user, $password, $dbname);

if (!$con) {
    echo "Unable to connect to MySQL: " . mysqli_connect_error();
    exit();
}

echo "Successful connection<br>";


$requete = "CREATE TABLE IF NOT EXISTS personne (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50),
    username VARCHAR(50),
    password VARCHAR(50)
)";


if (mysqli_query($con, $requete)) {
    echo "Table 'personne' created successfully.<br>";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $insertQuery = "INSERT INTO personne (username, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($con, $insertQuery)) {
        echo "Data inserted successfully.<br>";
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
