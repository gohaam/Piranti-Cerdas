<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pirdasmod4";

if (isset($_GET['ldr_value'])) {
    $ldr_value = $_GET['ldr_value'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO data_cahaya (ldr_value) VALUES ('$ldr_value')";

    if ($conn->query($sql) === TRUE) {
        echo "DATA LDR VALUE BERHASIL DITAMBAH";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "No 'ldr_value' provided in the GET request.";
}
exit();

?>
