<?php
$servername = "db"; 
$username = "usuario";     
$password = "senha";  
$dbname = "saude_db";   

$conn = new mysqli($servername, $username, $password, $dbname);

// Checar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conectado com sucesso ao banco de dados!";
?>
