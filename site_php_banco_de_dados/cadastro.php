<?
include 'config.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";


    if(mysqli_query($conn, $sql)){
        echo "Usuário cadastrado!";
    } else {
        echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuários</title>
</head>
<body>
  <h1>Cadastro de Usuário</h1>
  <form method="post




