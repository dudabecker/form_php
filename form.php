<?php

$user = addslashes($_POST['User']);
$password = addslashes($_POST['Password']);

if($user == "aluno" && $password == "1234"){
    echo '<h3 style="color:gold; 
          display:flex;
          justify-content:center;
          height:330px;
          background-color:cadetblue;
          padding: 165px;">'
          ."Login realizado com sucesso!".'</h3>';
}
else
    echo "<script>alert('Usuário ou senha incorretos');location= './index.html';</script>";
?>