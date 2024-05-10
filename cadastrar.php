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
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
    </header>
    <section>
        <h2>Lista de contatos</h2>
        <form action="" methood="POST">
            <label for="nome">Nome</label>
            <input type="text" name= "nome" required>

            <label for="sobrenome">Sobrenome</label>
            <input type="text" name= "sobrenome" required>

            <label for="nascimento">Nascimento</label>
            <input type="date" name= "nascimento" required>

            <label for="endereco">Endereço</label>
            <input type="text" name= "endereco" required>

            <label for=telefone">Telefone</label>
            <input type="text" name= "telefon" required>

            <button type="submit">Salvar</button>
        </form>
    </section>
</body>
</html>