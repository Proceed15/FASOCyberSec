<?php
setcookie("cookie_seguro", "valor", [
'expires' => time() + 3600,
'secure' => true, // Só envia em HTTPS
'httponly' => true, // Bloqueia acesso via JS
'path' => '/'
]);
?>