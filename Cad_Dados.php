<?php
$Nome = $_POST['nome'];
$Sobrenome = $_POST['sobrenome'];
$Data = $_POST['data'];
$Nume = $_POST['nume'];
$Email = $_POST['email'];
$Senha = $_POST['senha'];

$Servidor = 'Localhost';
$Usuario_bd ='root';
$Senha_bd ='root';
$Nome_bd= 'Cadastro';
$Porta_bd= 3306;

$conexao = mysqli_connect($Servidor, $Usuario_bd,$Senha_bd,$Nome_bd,$Porta_bd);

if(!$conexao)
{

    die('Problemas com a Conexão');
}

$sql = "INSERT INTO usuario (Nome, Sobrenome, dat, Celular, Email,Senha) VALUES ($Nome,$Sobrenome,$Data,$Nume,$Email,
$Senha);

if (mysqli_query($conexao,$sql))
{
    echo 'Usuario cadastrado com sucesso!';
} 
else{
    echo 'Pro';
}
mysqli_close($conexao);


?>