<?php
session_start();
include_once ("conexao.php");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$data_nasc = filter_input(INPUT_POST, 'data_nasc', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "email: $email <br>";
//echo "Telefone: $telefone <br>";
//echo "data_nasc: $data_nasc <br>";
//echo "endereco: $endereco <br>";

$result_usuario = "INSERT INTO pessoa (nome, email, telefone, data_nasc, cidade, estado) VALUES ('$nome', '$email', '$telefone', '$data_nasc', '$cidade', '$estado')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn))
{
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado</p>";
    header("Location: cad_usuario.php");
}