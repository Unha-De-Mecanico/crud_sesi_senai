<?php 
    include_once "conexao.php";

    $conexaoComBanco = abrirBanco();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Agenda de contatos</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="cadastrar.php">cadastrar</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h2>Lista de contatos</h2>
        <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Nascimento</th>
                <th>Endereço</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Carol</td>
                <td>Mendes</td>
                <td>10/02/2007</td>
                <td>Rua D turmalina</td>
                <td>(65)99302-4022</td>
            </tr>
        </tbody>
        </table>
    </section>
</body>
</HTML>