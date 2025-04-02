<?php
 
if( !isset($_COOKIE["Cookie5"]))
{ echo "Criando um cookie válido somente para www.dominio.com.br...";
    setcookie(name: "Cookie5", value: "Cookie genérico 5", expires_or_options: 0, path: "/",
    domain: "localhost");
} else{
    echo "Cookie5: ". $_COOKIE["Cookie5"] . "";
}
 
?>