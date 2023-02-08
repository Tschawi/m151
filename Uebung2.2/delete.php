<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully <br> <br>";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "<br>";
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $deleteid = $_GET['id'];
}
$statement = $conn->prepare("DELETE FROM invoices WHERE order_id = :id");
$statement->execute([
    ':id' => $deleteid
]);
