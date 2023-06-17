<?php
  include('conexao.php');
$login = isset($_POST['login'])? $_POST['login']:'';
$senha = isset($_POST['senha'])? $_POST['senha']:'';

$select = "select nome, login, senha from login where login ='$login' and senha= '$senha'";
$execute = mysqli_query($conexao, $select); //essa função vai executar a seleção dentro do banco de dados
$dados = mysqli_fetch_row($execute); //essa função nativa do php, vai pegar os dados separar os dados por indíce 0, 1 e 2
 if($login == $dados[1] && $senha== $dados[2]){
    session_start();
    $_SESSION['nome'] = $dados[0];
    header('location:index.php');
 }else {
    header('location:login.php');
 }


?>
