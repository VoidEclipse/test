<?php 
	
	include ('dbconnect.php'); //подключение к БД

//принимаем данные с полей и записываем в переменные
$login      = $_POST['login'];
$password   = $_POST['password'];
$firstName  = $_POST['firstName'];
$secondName = $_POST['secondName'];
$patronymic = $_POST['patronymic'];
$birthdate  = $_POST['birthdate'];
$email 	    = $_POST['email'];
$phone  	= $_POST['phone'];
$photo 		= $_POST['photo'];

$link_back 	  = "registration.php"; // переменная хранит ссылку на возврат
$link_forward = "index.php"; 


	if (($login AND $password AND $firstName AND $secondName AND $patronymic AND $birthdate AND $email AND $phone) == false){

		exit("Не все поля заполнены!<br>" . "<a href='".$link_back."'>Назад!</a>");

	}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   // echo "E-mail ($email) указан верно.\n";
} else {
    exit("E-mail ($email) указан неверно.\n");
}


 // проверяем, есть ли такой пользователь в БД
    $checkUser = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");
    $checkRows = mysqli_fetch_array($checkUser);

// если логин или почта совпадают с уже существующим юзером - выводим ошибку
    if (!empty($checkRows['login'] == $login) OR ($checkRows['email'] == $email)) {

    exit ("Пользователь с таким логином или паролем уже существует!<br>" . "<a href='".$link_back."'>Вернуться!</a>");
   
    }


 // если нет пользователя с такими данными, то добавляем его в БД
    $insertUser = mysqli_query($connection, "INSERT INTO `users` (login, password, firstName, secondName, patronymic, birthdate, email, phone, photo) VALUES('$login', '$password', '$firstName', '$secondName', '$patronymic', '$birthdate', '$email', '$phone', '$photo') ");
   
    if ($insertUser == 1)  // проверка на ошибки
    {
    echo "Новый пользователь  $login  успешно зарегистрирован!<br>";
    echo "<a href='".$link_forward."'>Вперед!</a>";
    }
 else {
    echo "Ошибка Регистрации!";
    echo "<a href='".$link_back."'>Вернуться!</a><br>";
    }

?>

