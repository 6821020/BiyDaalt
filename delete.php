<?php
    $conn = mysqli_connect("localhost", "root", "", "Hereglegch");
    if(mysqli_connect_error()){
        echo "database tei holbogdoj chadsangui ". mysqli_connect_error();
    }

    $id= $_REQUEST['id'];
    $query = "DELETE  FROM hereglegch where id=$id";
    $result = mysqli_query($conn, $query) or die (mysqli_error());
    header("location: admin.php");
?>