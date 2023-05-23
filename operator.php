<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="../style2.css">
    <style type="text/css">
 A:link { font-size: 19px;
  text-decoration: none;
  font-family: Times;
  color: black;
 }
 A:visited {
  text-decoration: none;
  color: black;
 }
 A:active {
  text-decoration: none;
  color: black;
 }
 A:hover {
  color: black;
 }
 th, td {
   font-size: 18px;
   padding: 10px;
 }
 th {
   background: #555;
   color: #D3D3D3;
 }
 td {
   background: #eee;
 }
 a {
   text-decoration: none;
   transition: 0.2s ease;
   color: #3f75c5;
 }
 td:nth-child(7) > a {
   color: #c22a2a;
 }
 a:hover {
   opacity: 0.7;
 }
 input, textarea {
   padding: 10px;
   display: block;
   min-height: 30px;
   width: 250px;
   margin-bottom: 10px;
 }
 textarea {
   resize: vertical;
   height: 80px;
 }
body {
font-family: Times;
}
#center { position: absolute; right: 0; left: 40%; top: 300px; width: 60%; }
.text-justify {
 text-align: justify;
}
   </style>

<body>

    <!-- Профиль -->

    <form>
        <button style=" position: relative; left: 0%;"><a href="vendor/logout.php" class="logout" >Выход</a></button>
    </form>
    <div id="center">
      <?php require_once 'vendor/connect.php';?>
      <table>
        <tr>
          <th>id</th>
          <th>Имя</th>
          <th>Телефон</th>
          <th>&#10006;</th>
        </tr>

        <?php
          $zayavs = mysqli_query($connect, "SELECT * FROM `zayav`");
          $zayavs = mysqli_fetch_all($zayavs);
        foreach ($zayavs as $zayav){
          ?>
          <tr>
            <th><?= $zayav[0] ?></th>
            <th><?= $zayav[1] ?></th>
            <th><?= $zayav[2] ?></th>
            <td><a href="operator/delete.php?id_zayav=<?= $zayav[0] ?>">Удалить</a></td>
        </tr>
        <?php
        }
        ?>
      </table>
      </div>
</body>
</html>
