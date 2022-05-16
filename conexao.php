<?php
  
$conn = "";
   
try {
    $servername = "localhost";
    $dbname = "tela_login";
    $email = "root";
    $senha = "";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=tela_login",
        $email, $senha
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?>