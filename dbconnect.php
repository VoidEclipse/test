<?php
            
              	//подключаем бд
                $connection = mysqli_connect( 'localhost', 'root', '', 'testdb');
                 
                 //проверям произошло ли соедениние, если ответ отрицательный - выводим ошибку
                 if ($connection == false) {

                  echo "<br><br> Connection failed! <br><br>";
                  echo mysqli_connect_error();
                  exit();

                 }else  {
                 // echo "Connection successful!<br>";
                 }


?>