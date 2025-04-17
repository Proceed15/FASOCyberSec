<?php
if (isset($_COOKIE["preferencias"])) {
$dados = json_decode($_COOKIE["preferencias"], true);
echo "Tema: " . $dados["tema"];

// Saída: "Tema: escuro"
}
?>