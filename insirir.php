<?php
    @include("config.php");
   
   $login = $_POST['usuario'];
   $senha = $_POST['senha'];
   $email = $_POST['email'];
   
   //mysql_real_escape_string para poder acabar com myql inject
   $none = mysql_real_escape_string($login);
   $pin = mysql_real_escape_string($senha);
   $correio = mysql_real_escape_string($email);   
  
	//insirindo os dados no banco
   $code = "INSERT INTO clientes(login,email,senha) VALUES('$none','$correio','$pin')";
   $ex_code = mysql_query($code) or die("Codigo errado");   
   
?>