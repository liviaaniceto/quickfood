<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sorvete.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="shortcut icon" href="fotos/android-chrome-192x192.png" type="image/x-icon">
  <title>QUICKFOOD</title>
</head>

<body background="./fotos/sorvete.png">
  <?php
  require_once 'db.php';
  session_start();
  // Verifica se o carrinho de compras está vazio ou não existe na sessão
  if (!isset($_SESSION['carrinho'])) {
    // Se estiver vazio ou não existir, cria um carrinho vazio
    $_SESSION['carrinho'] = array();
  }
  ?>
  <nav class="menu">
    <img src="./fotos/Main Logo.png">
    <a href="produtos.php">Home</a>
    <a href="sobre.html">Sobre</a>
    <a href="contato.html">Contato</a>
    <?php $qtd_carrinho = 0;
    foreach ($_SESSION['carrinho'] as $qtd) {
      $qtd_carrinho += $qtd['quantidade'];
    }; ?>
    <a href="carrinho.php"><?php echo $qtd_carrinho; ?><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
  </nav>

  <div class="container">
    <div class="card-grid">
      <?php
      // Função para adicionar um produto ao carrinho
      function adicionarProdutoAoCarrinho($produto)
      {
        foreach ($_SESSION['carrinho'] as &$item) {
          if ($item['nome'] == $produto['nome']) {
            $item['quantidade']++;
            return;
          }
        }
        // Adiciona o produto ao array do carrinho na sessão
        $produto['quantidade'] = 1;
        $_SESSION['carrinho'][] = $produto;
      }

      // Verifica se foi enviado um formulário
      if (isset($_GET['adicionar'])) {
        // Recupera os valores do formulário
        $nome = $_GET["nome"];
        $preco = $_GET["preco"];

        // Cria um array com as informações do produto
        $produto = [
          'nome' => $nome,
          'preco' => $preco
        ];

        // Adiciona o produto ao carrinho
        adicionarProdutoAoCarrinho($produto);

        header("location: naturais.php");
        return;
      }

      $stmt = $pdo->query("SELECT * FROM produtos WHERE categoria = 'sorvete' ");
      $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

      if (count($produtos) == 0) {
        echo '<p>Nenhum produto cadastrado.</php>';
      } else {

        foreach ($produtos as $produto) {
          echo "<div class='card'>
                  <div><img class='card-img1' src='" . $produto['imagem'] . "'></div>
                    <div class='card-info'>
                      <p class='text-title'>" . $produto['nome'] . "</p>
                      <p class='text-body'>" . $produto['descricao'] . "</p>
                    </div>
                    <div class='card-footer'>
                      <span class='text-price'>R$ " . $produto['preco'] . "</span>
                      <div class='card-button'>
                        <svg class='svg-icon' viewBox='0 0 20 20'>
                          <path d='M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z'></path>
                          <path d='M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z'></path>
                          <path d='M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z'></path>
                        </svg><a id='adicionar' href='?adicionar=" . $produto['id'] . "&nome=" . $produto['nome'] . "&preco=" . $produto['preco'] . "'>Adicionar</a>
                      </div>
                    </div>
                </div>";
        }

        echo '</div>';
        echo '</div>';
      }

      ?>

