<?php
// Criando o cookie inicial
setcookie("usuario", "Joao", time() + 3600);

// Alterando o valor
setcookie("usuario", "Maria", time() + 3600); // Sobrescreve o valor
?>