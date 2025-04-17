<?php
$dados = ["nome" => "João", "tema" => "escuro"];
setcookie("preferencias", json_encode($dados), time() + 3600);
?>