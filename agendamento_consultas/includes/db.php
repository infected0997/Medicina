<?php
$servername = "mysql";  
$username = "usuario";  
$password = "senha";    
$dbname = "meu_banco";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conectado ao banco de dados com sucesso!";
}
?>
