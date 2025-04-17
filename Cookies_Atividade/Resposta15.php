<?php
// Cookie acessível apenas em /admin/
setcookie("admin_token", "12345", time() + 3600, "/admin/");
?>