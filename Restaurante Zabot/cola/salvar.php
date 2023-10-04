<?php
    
    include("config.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data_reserva"];

    $sql = "INSERT INTO cadastro (nome, email, data_reserva) VALUES ('{$nome}', '{$email}', '{$data}')";
    $res = $conn-> query($sql);

    mysqli_close($conn);

    header("Location: index.php");
    exit();
  
?>
