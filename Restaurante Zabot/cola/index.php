<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro | Agora eu aprendo</title>
</head>
    
<body>

<ul>
 <li><a href="index.php">HOME</a></li>
 <li><a href="cadastrar.php">Cadastrar</a></li>
</ul>

<?php
    include ("config.php");
    $sql = "SELECT * FROM cadastro";

    $res = mysqli_query($conn, $sql);

    echo "<table border=1>";

    while ($registro = mysqli_fetch_array($res)) {
        $id = $registro['id'];
        $nome = $registro['nome'];
        $email = $registro['email'];
        $data = $registro['data_reserva'];
        echo "<tr>";
        echo "<td>".$id."</td>";
	echo "<td>".$nome."</td>";
	echo "<td>".$email."</td>";
	echo "<td>".$data."</td>";
    }
   mysqli_close($conn);
   echo "</table>";
  
?>
</body>

</html>

