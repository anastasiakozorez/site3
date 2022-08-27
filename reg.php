<?php
// Переменные с формы

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'lsite'; // Имя БД
$db_table = "user"; // Имя Таблицы БД

try {
    // Подключение к базе данных
   $db = mysqli_connect('localhost','root','','lsite');
mysqli_select_db($db,'lsite');

} catch (PDOException $e) {
    // Если есть ошибка соединения, выводим её
    print "Ошибка!: " . $e->getMessage() . "<br/>";
}
// Собираем данные для запроса
$data=array('login'=>$login,'password'=>$password,'email'=>$email); 
// Подготавливаем SQL-запрос
mysqli_query($db,$data);
?>
