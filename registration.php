<!DOCTYPE html>
<html>
     <body>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		Школа английского языка
	</title>
     <link rel="stylesheet" href="assets/css/main5.css">
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
         </style>
  </head>
   </div>
   <header class="header">
    <nav style="position: relative;left: 50px; " class="nav">
     <a style="position: relative;top: 0px; left: 60px;" class="nav_link" href="Main_menu.html">Главная</a>
     <a  style="position: relative;top: 0px; left: 60px;" class="nav_link" href="tovari.php"> Товары</a>
   </div>
         <nav class="nav_link1">
           <div>
               <p style=" position: relative; left: -340%; top: 21px; font-size: 20px;color: rgb(245, 245, 245);"> Школа Английского Языка</p>
           </div>
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

<div style="position: relative;top: 100px; left: 65%;font-size: 20px;">
<h2>Авторизация</h2>
</div>
<div style="position: relative;top: -1100px; left: 45%;">
<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
</div>
<form style="position: relative; left:58%; top: 180px;" action="vendor/signin.php" method="post">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label>Пароль</label>
    <input type="password" name="pass" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
        У вас нет аккаунта? - <a style="position: relative; left: 180px;top: -45px;color:black" href="/register.php">зарегистрируйтесь</a>
    </p>
    <?php
        if ($_SESSION['message'])
				{
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
    ?>
</form>


</div>
<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     <div style="position: relative;background-color: #C0C0C0">
     	<hr>
     	<p style=" position: relative; left: 2%; font-size: 13px;"> Школа Английского Языка</p>
     	<p style=" position: relative; left: 2%; font-size: 13px;"> Адрес: Россия, Г. Липецк, Кривенова д.29 кв.45</p>
     	<p style=" position: relative; left: 2%; font-size: 13px;"> Тел: 8(800)555-35-35</p>
     	<p style=" position: relative; left: 2%; font-size: 13px;"> Email: <a href="#0">natanbayrakov02@mail.ru</a></p>
     	<p style=" position: relative; left: 2%; font-size: 13px;"> Факс: +7661-21-21-4322</p>
     	<br> -->
     </div>
</body>
</html>
