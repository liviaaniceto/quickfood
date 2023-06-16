<?php
session_start();

if ($_SESSION['usuario'][0]['permissao'] == 'admin') { ?>
    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem vindo ao Dashboard</h1>
</body>
</html>

<?php } else {
    header("Location: produtos.php");
} ?>