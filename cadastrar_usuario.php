<?php

require_once 'db.php';

  if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $idade = $_POST['idade'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $senha = md5($_POST['senha']);
    $permissao = 'usuario';

    $stmt = $pdo->prepare('INSERT INTO usuarios (nome, email, telefone, idade, uf, cidade, endereco, cep, senha, permissao) VALUES(:nome, :email, 
    :telefone, :idade, :uf, :cidade, :endereco, :cep, :senha, :permissao)');
    $stmt->execute(['nome' => $nome, 'email' => $email, 'telefone' => $telefone, 'idade' => $idade, 'uf' => $uf, 'cidade' => $cidade, 
    'endereco' => $endereco, 'cep' => $cep, 'senha' => $senha, 'permissao' => $permissao]);

    if ($stmt->rowCount()) {
      echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
      header("location: produtos.php");
    } else {
        echo "<script>alert('Erro ao cadastrar o usuário');</script>";
        header("location: index.php");
    }

  }
  ?>