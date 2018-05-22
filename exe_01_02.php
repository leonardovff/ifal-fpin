<?php 
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    if($_POST['sexo'] == "m"){
        $peso = $_POST['altura'] * 72.7 - 58;
    } else {
        $peso = $_POST['altura'] * 62.1 - 44.7;  
    }
    echo 'Seu peso ideal é: '. $peso;
}   
?>
<?php if(strtoupper($_SERVER['REQUEST_METHOD']) != 'POST'):?>
    <form action="" method="post">
        <legend>Calcule seu peso ideal</legend>
        <input type="text" style="width: 300px;" name="altura" placeholder="Forneça a sua altura em metros. Exemplo: 2.5">
        <select name="sexo">
            <option value="m">Masculino</option>
            <option value="f">Feminino</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
<?php endif;?>