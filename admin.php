<?php

$conn = mysqli_connect("localhost", "root", "", "Hereglegch");
if(mysqli_connect_error())
{
    echo "Database tei holbogdoj chadsangui" . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="burtgel.css">
</head>
<body>
    
<div class="form">
<h2 align='center'>Хэрэглэгчдийн мэдээлэл харах</h2>
<br>
<table width="100%" border="1" style="border-collapse:collapse;"> 
<thead>
<tr>
<th><strong>№</strong></th><th><strong>Хэрэглэгчийн код</strong></th>
<th><strong>Hyyц үг</strong></th>
<th><strong>Oвог</strong></th>
<th><strong>Hэp</strong></th>
<th><strong>Perиcтp</strong></th>
<th><strong>Утас</strong></th>
<th><strong>И-мэйл</strong></th>
<th><strong>Xүйc</strong></th>
<th><strong>буcaд</strong></th>
<th><strong>3acax</strong></th>
<th><strong>Уcтгax</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query= "Select * from hereglegch ORDER BY id;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $count; ?></td> 
<td align="center"><?php echo isset($row['hereglegchCode']) ? $row['hereglegchCode'] : ''; ?></td> 
<td align="center"><?php echo isset($row['pass1']) ? $row['pass1'] : ''; ?></td> 
<td align="center"><?php echo isset($row['ovog']) ? $row['ovog'] : ''; ?></td>
<td align="center"><?php echo isset($row['ner']) ? $row['ner'] : ''; ?></td>
<td align="center"><?php echo isset($row['registr']) ? $row['registr'] : ''; ?></td> 
<td align="center"><?php echo isset($row['utas']) ? $row['utas'] : ''; ?></td> 
<td align="center"><?php echo isset($row['email']) ? $row['email'] : ''; ?></td> 
<td align="center"><?php echo isset($row['huis']) ? $row['huis'] : ''; ?></td> 
<td align="center"><?php echo isset($row['otherInfo']) ? $row['otherInfo'] : ''; ?></td>
<td align="center"><a href="zasah.php?id=<?php echo $row['id']; ?>">заcваpлаx</a></td>
<td align="center"><a href="delete.php?id=<?php echo $row['id']; ?>">устгах</a></td>
</tr> 
<?php $count++; } ?>
</tbody>
</table>
<br /><br />
</body>
</html>
