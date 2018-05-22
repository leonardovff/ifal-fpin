<?php 
    function gerar($qtd, $arr = [2], $i = 3){
        if(verificar($i, $arr)){
            array_push($arr, $i);
            $qtd --;
        }
        if($qtd>1){
            return gerar($qtd, $arr, $i + 1);
        }
        return $arr;
    }
    function verificar($number, $arr){
        $found = 0;
        for($i = 0; $i<count($arr)-1; $i++){
            if($number % $arr[$i]  == 0){
                $found++;
            } 
        }
        return $found == 0;
    }
    $primos = gerar(100);
?>
<table style="background: #ebebeb;">
    <tr>
        <th>Número primos</th>
    </tr>
    <?php foreach($primos as $number): ?>
    <tr>
        <td><?= $number ?></td>
    </tr>
    <?php endforeach?>
</table>