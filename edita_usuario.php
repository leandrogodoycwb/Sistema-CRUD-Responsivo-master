<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM pessoa WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 0px)" href="small.css">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1000px)" href="medium.css?version=1">
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 1350px)" href="large.css">
        <title>CRUD - Editar</title>
    </head>
    <body>
    <div>    
        <h1>Editar Usuário</h1>
        <a id="a"href="index.php">Lista de usuários</a><br>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?>
        <form method="POST" action="proc_edit_usuario.php">
            <input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
        <br><label>Nome: </label><br>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $row_usuario['nome']; ?>"><br><br>
            <label>Email: </label><br>
            <input type="email" name="email" placeholder="exemplo@hotmail.com" value="<?php echo $row_usuario['email']; ?>"><br><br>
            <label>Telefone: </label><br>
            <input type="text" name="telefone" placeholder="41 - 4444 - 4444" value="<?php echo $row_usuario['telefone']; ?>"><br><br>
            <label>Data de Nascimento: </label><br>
            <input type="date" name="data_nasc" placeholder="00/00/0000" value="<?php echo $row_usuario['data_nasc']; ?>"><br><br>
            <label>Endereço: </label><br>
            <input type="text" name="endereco" placeholder="Nome da rua" value="<?php echo $row_usuario['endereco']; ?>"><br><br>
            <label>Cidade: </label><br>
            <input type="date" name="cidade" placeholder="cidade" value="<?php echo $row_usuario['cidade']; ?>"><br><br>
            <label>Estado: </label><br>
            <input type="text" name="estado" placeholder="estaado" value="<?php echo $row_usuario['estado']; ?>"><br><br>
            
            <input type="submit" value="Atualizar">
         </form>   
    </div>  
    </body>
</html>