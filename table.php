<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hereglegch";
// Өгөгдлийн сантай холбогдох
$conn = new mysqli($servername, $username, $password, $dbname); // Холболтыг шалгах
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE hereglegch (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    hereglegchCode varchar(30) NOT NULL,
    ovog VARCHAR(30) NOT NULL,
    ner VARCHAR(30) NOT NULL,
    registr VARCHAR(30) NOT NULL, 
    utas VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    huis VARCHAR(20) NOT NULL,
    pass1 VARCHAR(30) NOT NULL, 
    otherInfo VARCHAR(50))";
    if ($conn->query($sql) === TRUE) {
    echo "Өгөгдлийн санд бүртгэл хийх хүснэгт амжилттай үүссэн.";
    } else {
    echo "Алдаа гарлаа: " . $conn->error;
    }

$conn->close();
?>