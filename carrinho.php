<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="carrinho.css">
  <link rel="shortcut icon" href="fotos/android-chrome-192x192.png" type="image/x-icon">
  <title>QUICKFOOD</title>
</head>

<body background="./fotos/carrinho.png">
<nav class="menu">
            <img src="./fotos/Main Logo.png">
    
            <a href="produtos.php">Home</a>
            <a href="sobre.html">Sobre</a>
            <a href="contato.html">Contato</a>
            
        </a>
        </nav>

  <div class="wrapper">
    <div class="section">
      <div class="container">
        <?php
        session_start();

        foreach ($_SESSION['carrinho'] as $key => $item) {
          echo "<div class='produto'>";
          echo "<div class='info'>";
          echo "<p>Nome: " . $item['nome'] . "</p>";
          echo "<p>Preço Unid: R$" . number_format($item['preco'], 2, ',', '.') . "</p>";
          echo "<p>Qtd: " . $item['quantidade'] . "</p>";
          echo "<p>Total: R$" . number_format($item['quantidade'] * $item['preco'], 2, ',', '.') . "</p>";
          echo "</div>";
          echo "<form method='POST' action='remover_produto.php'>";
          echo "<input type='hidden' name='produto_key' value='" . $key . "'>";
          echo "<button type='submit'>Remover</button>";
          echo "</form>";
          echo "</div>";
        }
        ?>
      </div>
      <div class="total">
        <?php
        $total = 0;

        foreach ($_SESSION['carrinho'] as $item) {
          $subtotal = $item['preco'] * $item['quantidade'];
          $total += $subtotal;
        }

        echo "Total: R$" . number_format($total, 2, ',', '.');
        ?>
      </div>
    </div>
  </div>
</body>

</html>
