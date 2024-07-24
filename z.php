<?php
  /* Принимаем данные из формы */   
  $name = $_POST["sirname"];    
  $email = $_POST["email"];   
  $message = $_POST["text_message"];   
   
  /* Подключаемся к базе данных */   
  $link = mysqli_connect("localhost", "root", "");   
  mysqli_select_db($link, "base");   
   
  /* Записываем данные */    
  $sql = "INSERT INTO first(name, email, message) VALUES ('$name', '$email', '$message')";   
  $result = mysqli_query($link, $sql);   
   
  /* Делаем редирект на страницу отображения данных */
  header("Location: display.php?sirname=$name&email=$email&message=$message");    
  exit;   
?>
