<?php 
  if(!isset($_COOKIE["AMS-DS"] )){
      // criar estado de cookie
     setcookie("AMS-DS","Aula de Segurança !!");
     echo "Cookies Criado !!!";
  }else{
    echo $_COOKIE["AMS-DS"];
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATVPHP</title>
</head>
<body>
    
</body>
</html>