<?php
   @include("config.php");   

   if (isset($_POST['usuario'])){
      $login = $_POST['usuario'];
      $senha = $_POST['senha'];
    
	//mysql_real_escape_string para poder acabar com myql inject	
   $none = mysql_real_escape_string($login);
   $pin = mysql_real_escape_string($senha);   
   
   //buscando no banco de dados
   $code = "SELECT * FROM clientes WHERE login = '$none' and senha = '$pin'";
   $ex_code = mysql_query($code) or die("Codigo errado");
   
   //conferindo se existe esse login no banco
   $check = mysql_num_rows($ex_code);
   if($check == 1){
      if($ln = mysql_fetch_array($ex_code)){   
         $nome = $ln['login'];
         $sen = $ln['senha'];
         die ("Login aceito");
      }
   }else{      
      echo "Login ou Senha incorretos";   
      }
   }   
   
?>