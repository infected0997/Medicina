<?php
$servername = "mysql";  // Nome do link do MySQL
$username = "usuario";  // O nome de usuário definido no MySQL
$password = "senha";    // A senha definida no MySQL
$dbname = "meu_banco";  // O nome do banco de dados definido no MySQL

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conectado ao banco de dados com sucesso!";
}
?>
