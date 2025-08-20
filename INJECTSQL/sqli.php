<?php include "conecta.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="GET">
            Nome do usuário: <input type="text" name="nome">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if (isset($_GET["nome"])) {
                $nome = $_GET["nome"];
                $sql = " SELECT * FROM usuarios WHERE nome = '$nome' ";
                //Descomente a linha a seguir para você visualizar como é
                //construída a consulta SQL:
                //Exemplo para a Hackbar: http://localhost/injectsql/sqli.php?nome=%27+ORDER BY 3+%23
                //Exemplo: http://localhost/inject_sql/sqli.php?nome='+UNION ALL SELECT 1,2,3,4,login,senha FROM pentestweb.usuarios+%23
                echo $sql . "<br>";
                $dados = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
                while ($linha = mysqli_fetch_assoc($dados)) {
                    $login = $linha["login"];
                    $senha = $linha["senha"];
                    $endereco = $linha["endereco"];
                    $telefone = $linha["telefone"];
                    echo "<pre>Login: {$login}<br />Senha: {$senha}<br />Endereco: {$endereco}<br />Telefone: {$telefone}</pre>";
                }
                mysqli_close($conexao);
            }
        ?>
    </body>
</html>