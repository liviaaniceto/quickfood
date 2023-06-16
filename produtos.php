<?php

session_start();

// Definir variáveis de sessão
$_SESSION['usuario'] = isset($_POST['nome']);
$_SESSION['produtos'] = [];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloprodutos.css">
    <link rel="shortcut icon" href="fotos/android-chrome-192x192.png" type="image/x-icon">
    <title>QUICKFOOD</title>
</head>

<body style="background-size:cover" background="fotos/fundopgn2.png">

    <nav class="menu">
        <img src="./fotos/Main Logo.png">

        <a href="produtos.php">Home</a>
        <a href="sobre.html">Sobre</a>
        <a href="contato.html">Contato</a>

        </a>
    </nav>
    <br><br><br><br><br>
    <br>

    <div>
        <p class="lanche">
            <a href="lanchonete.php">
                <img style="width: 100px" height="100px" src="fotos/lanche.svg" alt="Ilustração de Almoço ur"> Lanchonetes
        </p>
        </a>
        </p>

        <p class="frios">
            <a href="emporio.php">
                <img style="width: 100px" height="100px" src="fotos/frios.svg" alt="Ilustração de Almoço ur"> Empórios
        </p>
        </a>
        </p>

        <p class="natural">
            <a href="naturais.php">
                <img style="width: 100px" height="100px" src="fotos/comida-natural.svg" alt="Ilustração de Almoço ur">Naturais
        </p>
        </a>
        </p>

        <p class="pizza">
            <a href="pizza.php">
                <img style="width: 100px" height="100px" src="fotos/pizzaria.svg" alt="Ilustração de Almoço ur">Pizzaria
        </p>
        </a>
        </p>
    </div>

    <div>

        <p class="sorvete">
            <a href="sorvete.php">
                <img style="width: 100px" height="100px" src="fotos/sorvete.svg" alt="Ilustração de Almoço ur">Sorveteria
        </p>
        </a>
        </p>

        <p class="bar">
            <a href="bebidas.php">
                <img style="width: 100px" height="100px" src="fotos/bebidas-.svg" alt="Ilustração de Almoço ur">Bebidas
        </p>
        </a>
        </p>

        <p class="oriental">
            <a href="oriental.php">
                <img style="width: 100px" height="100px" src="fotos/comida-oriental.svg" alt="Ilustração de Almoço ur">Oriental
        </p>
        </a>
        </p>

        <p class="hortifrute">
            <a href="hortifrut.php">
                <img style="width: 100px" height="100px" src="fotos/hortifruti.svg" alt="Ilustração de Almoço ur">Hortifruti
        </p>
        </a>
        </p>

    </div>
    <br>

    <br>




</body>

</html>