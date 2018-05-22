<?php 
function convertBinario($valor){
    $rest = [];
    do {
        array_push($rest, $valor % 2);
        $valor = intval($valor / 2);

    } while($valor != 1);
    return array_reverse($rest);
}
switch($_GET['acao']){
    case 'binario':
        $valor = convertBinario($_GET['valor']); 
        echo "O valor em binario é: " . implode($valor);
    break;
    case 'linha':
        $valor = explode(' ', $_GET['valor']); 
        echo '<table style="background: red;">';
        for($i = 0; $i<count($valor); $i++){
            echo '<tr><td>'.$valor[$i].'</td></tr>';
        }
        echo '</table>';
    break;
    case 'calculadora':
        $_GET['valor'] =  str_replace(' ', '+', $_GET['valor']);
        $valor = eval('return '.$_GET['valor'].';');
        echo 'o valor do calculo é: '. $valor;
    break;
} 
?>
<br>
Opções disponiveis: <br>
acao=binario || linha || calculadora<br>
valor=2 || frase || 2 + 2