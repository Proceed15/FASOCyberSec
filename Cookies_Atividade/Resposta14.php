<?php

setcookie("exemplo", "valor", [
'secure' => true, // Só funciona em HTTPS
'httponly' => true // Não aparece em document.cookie
]);

?>