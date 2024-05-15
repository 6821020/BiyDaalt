
<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Hereglegch";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Xoлбoгдоx чадсангүй: " . $conn->connect_error);
}

echo "Холбогдсон";

if(isset($_POST["Login"]))
{
$username=$_POST["name"];
$password=$_POST["pass1"];
$query="(select * from hereglegch  where ner='$username' and pass1='$password')";
$result=mysqli_query($conn, $query);
$row=mysqli_fetch_array($result);
if ($row && $row['ner'] == $username && $row['pass1'] == $password) {
    header("location: index.php");
} else {
    echo "<script> alert ('Хэрэглэгчийн нэр эсвэл нууц үг буруу байна!'); </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link>
    <title>Document</title>
    <link rel="stylesheet" href="burtgekh.css">
</head>
<body>
<!-- нэвтрэх хэсэг-->
<section id="container1">
<div class="container1">
<h1 class="label">Нэвтрэx хэсэг</h1>
<form class="login_form" action="newtrekh.php" method="POST">
<div class="font">Нэвтрэх нэр opуyл</div>
<input type="text" name="name" value="" placeholder="Нэрээ оруулна уу" required id="name">
<div class="font font2">Hyyц үг</div>
<input type="password" name="pass1" value="" placeholder="Нууц үгээ оруулна уу" required id="password">
<button type="submit" name="Login">Нэвтрэx</button>
<a class="holboos" href="burtgekh.php"> Та бүртгэлгүй бол энд дарна уу.</a> </form>
</div>
</section>
</body>
</html>