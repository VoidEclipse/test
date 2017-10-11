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
					//коннектим нашу БД
					include('dbconnect.php')

				?>

				<!-- POST'ом отправляем заполненные данные на обработчик -->
				<form method="POST" action="reg.php">
					<h3>Добавление нового пользователя:</h3>
					<hr>
<input type="text"  	name="login" 	  placeholder="Логин"  title="Только буквы и цифры"><br>
<input type="password"  name="password"   placeholder="Пароль" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Не менее восьми символов, содержащих хотя бы одну цифру и символы из верхнего и нижнего регистра" ><br>
<input type="text"  	name="firstName"  placeholder="Имя"><br>
<input type="text"  	name="secondName" placeholder="Фамилия"><br>
<input type="tex"   	name="patronymic" placeholder="Отчество"><br>
<input type="text"  	name="birthdate"  placeholder="Дата рождения (гггг.мм.дд.)" pattern="[0-9]{4}.[0-9]{2}.[0-9]{2}" title="Формат дд.мм.гггг" ><br>
<input type="text"  	name="email" 	  placeholder="Email"><br>
<input type="tel"   	name="phone"      placeholder="Телефон 8-xxx-xxx-xx-xx" pattern="8-[0-9]{3}-[0-9]{3}-[0-9]{4}" minlength="14" maxlength="14"><br>
<input type="file" name="photo"><br> 
					
					<input type="submit" value="Зарегистрировать пользователя"><br>
				</form>
  			</div>
  			</div>
  			</div>
  		<br><br>
  	</div>




</body>
</html>