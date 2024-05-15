<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="burtgekh.css">
    <link rel="stylesheet" href="huis.css">
</head>
<body>    
<!-- Бүртгэх хэсэг --> 
<section id="container1">
<div class="container1">
<h1 class="label">Бүртгэх хэсэг</h1> 
<form class="login_form" action="insert.php" method="POST">
<div class="font">Хэрэглэгчийн код</div> <input type="text" name="hereglegchCode" autocomplete="off" placeholder=" g"> 
<div class="font">Овог</div> <input type="text" name="ovog" autocomplete="off" placeholder=" g"> 
<div class="font">Hэр</div> <input type="text" name="name" placeholder=" g" autocomplete="off">
<div class="fоnt">Регистрийн дугаар</div> <input type="text" name="registr" placeholder=" g" autocomplete="off">  
<div class="font">утасны дугaap</div> <input type="text" name="utas" placeholder=" g" autocomplete="off"> 
<div class="font">И-мэйл xaяr</div> <input type="email" name="email" placeholder=" g" autocomplete="off">
<div class="radio-container">
    <div class="font">Хүйс</div>
    <ul>
        <li>
            <label class="radio-label" for="female">Эмэгтэй</label>
            <input type="radio" id="female" name="huis" value="эмэгтэй">
        </li>
        <li>
            <label class="radio-label" for="male">Эрэгтэй</label>
            <input type="radio" id="male" name="huis" value="эрэгтэй">
        </li>
    </ul>
</div>


<div class="font font2">Hyyц үг</div> <input type="password" name="pass1" placeholder=" g" autocomplete="off">
<div class="font font2">Бусад мэдээлэл</div> 
<textarea name="otherInfo" id="busad"></textarea>
<button type="submit">бүртгүүлэх</button> </form>
</div>
</section>
</body>
</html>