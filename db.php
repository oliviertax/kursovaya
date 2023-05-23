<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'eng school');

if ( !isset($_POST['name']) || !isset($_POST['tel']) ) {
    echo 'Не все данные заполнены!!!';
    die;
}

$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$tel = filter_var(trim($_POST['tel']),
FILTER_SANITIZE_STRING);
$mysql = @new mysqli('localhost', 'root', '', 'eng school');
$mysql->query("INSERT INTO `zayav`(`name`,`tel`)
VALUES('$name','$tel')");

if(mb_strlen($name) < 2 || mb_strlen($name) > 255){
//echo"Недопустима длинна";
exit();
}
else if(mb_strlen($tel) < 10 || mb_strlen($tel) > 12) {
echo"Вы ввелии номер не полностью или не по формату";
exit();
}

$mysql->close();
 ?>
