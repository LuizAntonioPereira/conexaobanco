<?PHP
   $host = "localhost";
   $User = "root";
   $Senha = "seguro";
   $DB = "banco";
   
   $con = mysql_connect($host,$User,$Senha) or die("Nao conectou com o Server");
   $con_db = mysql_select_db($DB) or die("Conexao a db erro :" . mysql_error());
?>