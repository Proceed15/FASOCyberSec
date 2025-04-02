<?php
 
if( !isset($_COOKIE["Cookie6"]))
{ echo "Criando um cookie válido somente para www.dominio.com.br...";
    setcookie(name: "Cookie6", value: "Cookie genérico 6", expires_or_options: 0, path: "/",
    domain: "localhost");
} else{
    echo "Cookie6: ". $_COOKIE["Cookie6"] . "";
}
 
?>