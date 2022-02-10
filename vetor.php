<?php


if(isset($_POST['hobbies'])) {
    echo '<h4 style=" display:flex; justify-content:center;">'."Os hobbies escolhidos foram:<br>".'</h4>';
    foreach($_POST['hobbies'] as $hobby) {
        echo '<h4 style=" display:flex; justify-content:center;">'. $hobby . "<br>";
    }
}
else {
    echo '<h4 style=" display:flex; justify-content:center;">'."Nenhum hobby foi escolhido! <br><br>";
}

if(isset($_POST['carros'])) {
    echo '<h4 style=" display:flex; justify-content:center;">'."Os tipos de carros escolhidos foram:<br>";
    foreach($_POST['carros'] as $carro) {
        echo '<h4 style=" display:flex; justify-content:center;">'.$carro . "<br>";
    }
}
else {
    echo '<h4 style=" display:flex; justify-content:center;">'."Nenhum tipo de carro foi escolhido! <br><br>";
}

if(isset($_POST['esportes'])) {
    echo '<h4 style=" display:flex; justify-content:center;">'."Você selecionou a modalidade de esporte:<br/>";
    foreach($_POST['esportes'] as $esporte) {
        echo '<h4 style=" display:flex; justify-content:center;">'.$esporte . "<br>";
    }
}
else {
    echo '<h4 style=" display:flex; justify-content:center;">'."Nenhuma modalidade esportiva foi selecionada! <br/>";
}
?>