<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="scripts/header.js"></script>
</head>

<body>
  <div class="navbar  navbar-fixed-top">
    <div class="container">
      	<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          		<span class="icon-bar"></span>
          		<span class="icon-bar"></span>
          		<span class="icon-bar"></span>
        	</button>
        <a class="navbar-brand" href="#">TEST</a>
      </div>
      <div class="navbar-collapse collapse">
       			<ul class="nav navbar-nav navbar-right">
					<li class="active"><a id="menuli" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Главная</a></li>
					<li><a id="menuli" href="registration.php"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Регистрация пользователя</a></li>
					<li><a id="menuli" href="change.php"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Изменение пользователя</a></li>
					<li><a id="menuli" href="delete.php"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;Удаление пользователя</a></li>
				</ul>
			</div>
      </div>
    </div>

  <div id="headerwrap">
  	<div class="container">
  	<div class="row lefted">
  		<h1>Тестовое задание</h1>
  	</div>
  	</div>
  	</div>
  	</div>

	<div class="container w">
  		<div class="row centered">
  			<br><br>
  			<div class="col-lg-4">
  				<?php

				include ('dbconnect.php');

				//проверяем введен ли id, если ответ 1 - делаем запрос, и результат его записываем в переменную
				if(isset($_GET['id'])){
				
				$res=mysqli_query($connection, "SELECT * FROM `users` WHERE id='".$_GET['id']."'");
				$data=mysqli_fetch_assoc($res);
					}
				if(isset($_POST['id'])){

				// запрос для редактирования юзера
				mysqli_query($connection,
				"UPDATE `users` SET 
					id		  ='".$_POST['id']."',
					email     ='".$_POST['email']."',
					login	  ='".$_POST['login']."',
					firstName ='".$_POST['firstName']."',
					secondName='".$_POST['secondName']."',
					patronymic='".$_POST['patronymic']."',
					phone     ='".$_POST['phone']."', 
					birthdate ='".$_POST['birthdate']."', 
					password  ='".$_POST['password']."'
				WHERE id      ='".$_POST['id']."' ");
				}

				?>
				<?//GET'ом ищу юзера по id?>
				<form method="get">
				Найти пользователя по ID <input name="id" type="text"> <input type="submit" value="Найти">
				</form>

				<? if(isset($_GET['id'])){ ?>
				Вывод:
				<form method="post"><br>
				
				ID:    		<input type="text" name="id" 		 value="<?=$data['id']?>"><br>
				Email: 		<input type="text" name="email" 	 value="<?=$data['email']?>"><br>
				Login: 		<input type="text" name="login"		 value="<?=$data['login']?>"><br>
				First Name: <input type="text" name="firstName"  value="<?=$data['firstName']?>"><br>
				Second Name:<input type="text" name="secondName" value="<?=$data['secondName']?>"><br>
				Patronymic: <input type="text" name="patronymic" value="<?=$data['patronymic']?>"><br>
				Birthdate:  <input type="text" name="birthdate"  value="<?=$data['birthdate']?>"><br>
				Phone: 		<input type="text" name="phone" 	 value="<?=$data['phone']?>"><br>
				Password:   <input type="text" name="password" 	 value="<?=$data['password']?>"><br>

				<input type="submit" value="Изменить">
			</form>
			<? } ?>
  			</div>
  			</div>
  			</div>
  		<br><br>
  	</div>




</body>
</html>