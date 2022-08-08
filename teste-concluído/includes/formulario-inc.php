<?php
include_once 'dbh-inc.php';

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$telefone = $_POST['telefone'];
$mensagem = trim($_POST['msg']);


if (!empty($nome) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($telefone)) {
    $sql = "INSERT INTO leads (nome, email, telefone, mensagem) 
            VALUES (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL error";
    } else {
        mysqli_stmt_bind_param($stmt, 'ssss', $nome, $email, $telefone, $mensagem);
        mysqli_stmt_execute($stmt);
    }

}