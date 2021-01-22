<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 0px)" href="small.css">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1000px)" href="medium.css?version=1">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1350px)" href="large.css">
        <title>CRUD - Cadastrar</title>
    </head>
    <body>
    <div class="tela">
        <h1>Cadastrar Usuário</h1>
        <a id="aa"href="index.php">Lista de usuários</a><br>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="proc_cad_usuario.php">
        <br><label>Nome: </label><br>
            <input type="text" name="nome" placeholder="Digite seu nome" required><br><br>
            <label>Email: </label><br>
            <input type="email" name="email" placeholder="exemplo@hotmail.com" required><br><br>
            <label>Telefone: </label><br>
            <input type="text" name="telefone" placeholder="41 - 4444 - 4444" required><br><br>
            <label>Data de Nascimento: </label><br>
            <input type="date" name="data_nasc" placeholder="00/00/0000"><br><br>
            <label>Cidade: </label><br>
            <input type="text" name="cidade" placeholder="exemplo: Curitiba"><br><br>
            <label>Estado: </label><br>
            <input type="text" name="estado" placeholder="exemplo: Paraná"><br><br>
            <input type="submit" value="Cadastrar">
         </form>  
    </div>   
    </body>
</html>