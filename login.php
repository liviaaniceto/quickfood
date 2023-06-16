<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$senha = md5($_POST['senha']);

$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE email = ? AND senha = ?');
$stmt->execute([$email, $senha]);
$login = $stmt->fetch(PDO::FETCH_ASSOC);

switch ($login['permissao']) {
  case 'admin':
    $_SESSION['usuario'] = array();
    $usuario = [
      'nome' => $login['nome'],
      'email' => $login['email'],
      'permissao' => $login['permissao']
    ];
    $_SESSION['usuario'][] = $usuario;
    header('Location: dashboard.php');
    break;

  case 'usuario':
    header('Location: produtos.php');
    break;
    
    default:
    header('Location: produtos.php');
    break;
}  

?>