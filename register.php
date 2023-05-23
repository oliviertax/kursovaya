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
               <p style=" position: relative; left: -340%; top: 20px; font-size: 20px;color: rgb(245, 245, 245);"> Школа Английского Языка</p>
           </div>
  <a style="position: relative;top: -25px; left: 750px;" href="registration.html"> Регистрация</a>
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



<form style="position: relative; left:60%; top: 120px;" action="vendor/signup.php" method="post" enctype="multipart/form-data">
		<label>Имя</label>
		<input type="text" name="name" placeholder="Введите свое имя">
		<label>Фамилия</label>
		<input type="text" name="surname" placeholder="Введите свое фамилию">
		<label>Отчество</label>
		<input type="text" name="middlename" placeholder="Введите свое отчество">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите свой логин">
		<label>Телефон</label>
		<input type="phone" name="phone" placeholder="Введите свой номер телефона">
		<label>Курс</label>
		<select type="text" name="kurs">
		<option value disabled selected>Введите курс при его наличии</option>
		<option></option>
		<option>Beginner</option>
		<option>Elementary</option>
		<option>Pre-Intermediate</option>
		<option>Intermediate</option>
		<option>Upper-Intermediate</option>
		<option>Advanced</option>
		</select>
		<label>Пароль</label>
		<input type="password" name="pass" placeholder="Введите пароль">
		<label>Подтверждение пароля</label>
		<input type="password" name="pass_confirm" placeholder="Подтвердите пароль">
		<button type="submit">Зарегистрироваться</button>
		<p>
			У вас уже есть аккаунт? - 
		</p>
		<div style="top: 30px;">
		<a style="position: relative; left: 215px;top: -46px;color:black" href="/register.php">авторизуйтесь</a>
		</div>
		<?php
		session_start();
				if ($_SESSION['message']) {
						echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
				}
				unset($_SESSION['message']);
		?>
		<div style="position: relative;top: -825px; left: 20%; font-size: 20px;">
<h2>Авторизация</h2>
</div>
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
