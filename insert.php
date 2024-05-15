<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hereglegch";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO hereglegch (hereglegchCode, ovog, ner, registr, utas, email, huis, pass1, otherInfo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssssss", $hereglegchCode, $ovog, $name, $registr, $utas, $email, $huis, $pass1, $otherInfo);

// Set parameters and execute
$hereglegchCode = $_POST['hereglegchCode']; // Assuming you have added a field named 'hereglegchCode' in your HTML form
$ovog = $_POST['ovog'];
$name = $_POST['name'];
$registr = $_POST['registr'];
$utas = $_POST['utas'];
$email = $_POST['email'];
$huis = $_POST['huis'];
$pass1 = $_POST['pass1'];
$otherInfo = $_POST['otherInfo'];

if ($stmt->execute()) {
    echo "Шинэ бичлэг нэмэгдлээ";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
