<?php
$conn = mysqli_connect("localhost", "root", "", "Hereglegch");
if(mysqli_connect_error()) {
    echo "Database tei holbogdoj chadsangui" . mysqli_connect_error();
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve user data from the database based on the ID
    $query = "SELECT * FROM hereglegch WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $hereglegchCode = $_POST['hereglegchCode'];
    $pass1 = $_POST['pass1'];
    $ovog = $_POST['ovog'];
    $ner = $_POST['ner'];
    $registr = $_POST['registr'];
    $utas = $_POST['utas'];
    $email = $_POST['email'];
    $huis = $_POST['huis'];
    $otherInfo = $_POST['otherInfo'];

    // Update user data in the database
    $update_query = "UPDATE hereglegch SET 
                     hereglegchCode='$hereglegchCode', 
                     pass1='$pass1', 
                     ovog='$ovog', 
                     ner='$ner', 
                     registr='$registr', 
                     utas='$utas', 
                     email='$email', 
                     huis='$huis', 
                     otherInfo='$otherInfo' 
                     WHERE id='$id'";
    $update_result = mysqli_query($conn, $update_query);

    if($update_result) {
        echo "Өгөгдөл амжилттай шинэчлэгдлээ.";
    } else {
        echo "Алдаа гарлаа: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Өгөгдөл засах</title>
    <link rel="stylesheet" href="burtgel.css">
</head>
<body>
    <div  align='center' class="form">
        <br>
        <h2 align='center'>Өгөгдөл засах</h2>
        <br>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <p><input type="text" name="hereglegchCode" placeholder="Хэрэглэгчийн код" value="<?php echo $row['hereglegchCode']; ?>" /></p>
            <p><input type="text" name="pass1" placeholder="Hyyц үг" value="<?php echo $row['pass1']; ?>" /></p>
            <p>
                <input type="text" name="ovog" placeholder="Овог" value="<?php echo $row['ovog']; ?>" /></p>
            <p><input type="text" name="ner" placeholder="Hэp" value="<?php echo $row['ner']; ?>" /></p>
            <p><input type="text" name="registr" placeholder="Peгucтp" value="<?php echo $row['registr']; ?>" /></p>
            <p><input type="text" name="utas" placeholder="утас" value="<?php echo $row['utas']; ?>" /></p>
            <p><input type="text" name="email" placeholder="И-мэйл" value="<?php echo $row['email']; ?>" /></p>
            <p><input type="text" name="huis" placeholder="Xүйс" value="<?php echo $row['huis']; ?>" /></p>
            <p><input type="text" name="otherInfo" placeholder="бусад" value="<?php echo $row['otherInfo']; ?>" /></p>
            <p><input type="submit" name="update" value="Шинэчлэх" /></p>
            <button><a href="admin.php">Буцах</a></button>
        </form>
    </div>
</body>
</html>
