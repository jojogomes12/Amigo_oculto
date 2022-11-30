# Amigo_oculto
Para usar basta importar o arquivo usando require ou use


<?php
require_once 'index.php';
$pathFile='validar.txt';
$sorteio= new  Sorteio($pathFile);
//Executa o nosso arquivo

$sorteio->escrever('joao');
$sorteio->escrever('rennan');
$sorteio->escrever('robert');
$sorteio->sortear();



?>
