<?php

define('HOST', 'containers-us-west-58.railway.app');
define('USER', 'root');
define('PASS', 'Vb0pX2fa3AlKJ5fFwvJh');
define('BASE', 'railway');
define('PORT', 6561);

$conn = new MySQLi(HOST,USER,PASS,BASE,PORT);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}


?>
