<?php
$hostname = "localhost";  
$username = "root";  
$password = "root";    
$dbname = "saude_db";

// Criar a conexão
$conn = new mysqli($hostname, $username, $password, $dbname);

// Verificar se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conectado ao banco de dados com sucesso!";
}
?>
