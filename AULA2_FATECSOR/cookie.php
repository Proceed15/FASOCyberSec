<?php
 
if( !isset($_COOKIE["Cookie4"]))
{ echo "Criando um cookie válido somente para www.dominio.com.br...";
    setcookie(name: "Cookie4", value: "Cookie genérico 4", expires_or_options: 0, path: "/",
    domain: "localhost");
} else{
    echo "Cookie4: ". $_COOKIE["Cookie4"] . "";
}
 
?>