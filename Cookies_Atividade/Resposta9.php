<?php
// Tentativa de criar cookie com 5KB (será truncado)
$valorGrande = str_repeat("a", 5000);
setcookie("cookie_grande", $valorGrande, time() + 3600);
?>