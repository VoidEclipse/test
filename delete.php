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
  			<div class="col-lg-12"></div>
  			<br><br>
  			<h1>Удаление пользователя</h1>
  			<br><br>
  			
			<?php

			include ('dbconnect.php');
				
			//делаем выборку с сортировкой по убыванию	
			$result = mysqli_query($connection, "SELECT * FROM users ORDER BY id DESC");
 
 
			echo "<h2>Список пользователей:</h2><br>";
			 
			if ($myrow = mysqli_fetch_array($result)) //если пришел 1, то выполняем дальше
			  {
			//для обновления стр.
			echo "<script>function ReloadButton(){
			location.href=\"delete.php\";}</script>";
			
			//проверка на нажатия для удаления
			if (isset ($_POST['del']))
			  {
			  	//если нажата кнопка - результат запишем в переменную и отправим запрос на удаление
			    $id = intval($_POST['del']);
			    $result_delete = mysqli_query($connection, "DELETE FROM users WHERE id='$id'");
			  }

			do{ 
			//вывожу кнопку для удаления  пользователя
			printf (
			"<br />
			<form name=\"delete_form\" method=\"POST\" action=\"\">

			<input title=\"Удалить пользователя\" class=\"button\" type=\"submit\" id=\"delete\" name=\"del\" value=\"%s\" ONCLICK=\"ReloadButton()\">

			</form>", $myrow['id'] . ' ' . $myrow['login']);
			
			// пока есть юзеры вывожу их, иначе выведу сообщение об их отсутствии
			}while ($myrow = mysqli_fetch_array($result));
 
  			}

			else{

			echo "<br />в базе данных пусто";

			}

			?>

  			</div>
  			</div>
  		<br><br>
  	</div>




</body>
</html>