<?php

$user = addslashes($_POST['User']);
$password = addslashes($_POST['Password']);

if($user == "aluno" && $password == "1234"){
    header('Location: ./vetor.html');
}
else
    echo "<script>alert('Usuário ou senha incorretos');location= './index.html';</script>";
?>