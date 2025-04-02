<?php
if(!isset($_COOKIE["AMS-DS"])){
    // criar estado de cookie
    // 1 exemplo
    //setcookie("AMS-DS","Aula de Segurança !!");
     
    $VALUE = " 2 EXEMPLO";
    // 2 exemplo
     setcookie("AMS-DS", $VALUE, time() + 1 );
   
    echo "Cookies Criados !!!";
}else{
  //echo $_COOKIE["AMS-DS"];
  echo "Tempo do Cookie Zerado!";
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