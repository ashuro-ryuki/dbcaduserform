<?php

/* Variaveis para amrazenamento de dados do form */

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

/* confima dados informados pelo usuario*/

echo "<h3>Nome: $nome</h3>"
echo "<h3>email: $email</h3>"
echo "<h3>senha: a senha é secreta</h3>";

// string deminsencao no banco 
$cad_usuario = "INSERT INTO usuario(nome, email, senha) VALUES ('$nome, $email, $senha')";
 
//Variáveis que recebem informações da base de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "dbcaduser";
 
//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
 
//Teste de conexão, caso apresente problema, encerra a conexão
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
//Exibe mensagem de êxito para conexão bem sucedida
echo "<script>alert('Conexão bem sucedida')</script>";
 
?>