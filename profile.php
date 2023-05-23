
<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Школа английского языка
	</title>
     <link rel="stylesheet" href="../style2.css">
     <style>
	h {
   font-family: Verdana
  }
	a {
   font-family: Verdana;
   font-size: 18px
  }
  p {
   font-family: Verdana
  }
	#center { position: absolute; right: 0; left: 45%; top: 200px; width: 50%; }
	#left { position: absolute; left: 360px; top: 250px; width: 20%; }
	#right { position: absolute; right: -200px; top: 550px; width: 20%; }
         </style>
</head>
<body>
   </div>
   <header class="header">
    <nav style="position: relative;left: 60px; " class="nav">
     <a class="nav_link" href="Main_menu.html">Главная</a>
     <a class="nav_link" href="tovari.php"> Товары</a>
         <nav class="nav_link1">
<a style="position: relative; left: 640px;" href="registration.php"> Личный кабинет</a>
         </nav>
 </nav>
 </header>
     <br>
     <br>
     </div>
     <style>
body {
font-family: Arial, Helvetica, sans-serif;
}
     </style>
		 <div id="center">


<h2>Учащийся</h2>

<p style="  font-family: Times; font-size: 24px;position: relative ;top: 0px; left: 0px;">Имя:<?= $_SESSION['user']['name']  ?></p>
<p style="  font-family: Times; font-size: 24px;position: relative ;top: 0px; left: 0px;">Фамилия:<?= $_SESSION['user']['surname']  ?></p>
<p style="  font-family: Times; font-size: 24px;position: relative ;top: 0px; left: 0px;">Отчество:<?= $_SESSION['user']['middlename']  ?></p>
<p style="  font-family: Times; font-size: 24px;position: relative ;top: 0px; left: 0px;">Телефон:<?= $_SESSION['user']['phone']  ?></p>
<p style="  font-family: Times; font-size: 24px;position: relative ;top: 0px; left: 0px;">Курс:<?= $_SESSION['user']['kurs']  ?></p>
<p style="  font-family: Times; font-size: 24px;position: relative ;top: 0px; left: 0px;">Группа:<?= $_SESSION['user']['group']  ?></p>



<button style=" position: relative; left: 0%;"><a href="vendor/logout.php" class="logout" >Выход</a></button>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
