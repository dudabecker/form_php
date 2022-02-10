<?php

/*$Nome = $_POST["Nome"];
$Sobrenome = $_POST["Sobrenome"];
$RG = $_POST["RG"];
$CPF = $_POST["CPF"];
$Telefone = $_POST["Telefone"];
$Endereco = $_POST["Endereco"];*/

if(isset($_POST['hobbies'])) {
    echo "Os hobbies escolhidos foram:<br>";
    foreach($_POST['hobbies'] as $hobby) {
        echo $hobby . "<br>";
    }
}
else {
    echo "Nenhum hobby foi escolhido! <br><br>";
}

if(isset($_POST['carros'])) {
    echo "Os tipos de carros escolhidos foram:<br>";
    foreach($_POST['carros'] as $carro) {
        echo $carro . "<br>";
    }
}
else {
    echo "Nenhum tipo de carro foi escolhido! <br><br>";
}

if(isset($_POST['esportes'])) {
    echo "Você selecionou a modalidade de esporte:<br/>";
    foreach($_POST['esportes'] as $esporte) {
        echo $esporte . "<br>";
    }
}
else {
    echo "Nenhuma modalidade esportiva foi selecionada! <br/>";
}
?>