<?php
if (!isset($_COOKIE["AMS-DS"])) {
    echo "Criando cookie válido somente por 10 segundos...";
    $value = "Testando....";
    setcookie("AMS-DS", $value, time() + 10, "\pasta");
} else
    echo "O cookie já foi gerado";

echo '<meta http-equiv="refresh" content="2" >';
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