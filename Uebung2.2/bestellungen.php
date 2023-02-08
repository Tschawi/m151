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
    $customerid = $_GET['id'];
}
echo "<br>Datenausgabe<br><br>";
$statement = $conn->prepare("SELECT * FROM orders WHERE customer_id = :id");
$statement->execute([
    ':id' => $customerid
]);
?>
<table>
    <tr>
        <th>Name</th>
        <th>Bestelldatum</th>
        <th>Lieferdatum</th>
        <th>Adresse</th>
        <th>Stadt</th>
    </tr>
    <?php
    while($row = $statement->fetch()) {

        echo "<tr>";
            echo "<td>{$row['ship_name']}</td>";
            echo "<td>{$row['order_date']}</td>";
            echo "<td>{$row['shipped_date']}</td>";
            echo "<td>{$row['ship_address']}</td>";
            echo "<td>{$row['ship_city']}</td>";
            echo "<td><a href='delete.php?id={$row['id']}'>Löschen</a></td>";
        echo "</tr>";
    }
?>
</table>