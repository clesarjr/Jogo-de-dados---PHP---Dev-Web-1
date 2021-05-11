<!DOCTYPE html>
<?php
    //variáveis
    $pessoa = (isset($_POST['pessoa']) ? $_POST['pessoa'] : '');
    $maquina = "Máquina";

    $pessoaDado1 = 0;
    $pessoaDado2 = 0;
    $maquinaDado1 = 0;
    $maquinaDado2 = 0;

    $somaPessoa = 0;
    $somaMaquina = 0;

    //gerar as faces aleatórias do usuário e somar as mesmas
    $pessoaDado1 = rand(1, 6);
    $pessoaDado2 = rand(1, 6);
    $somaPessoa = $pessoaDado1 + $pessoaDado2;

    //gerar as faces aleatórias da máquina e somar as mesmas
    $maquinaDado1 = rand(1, 6);
    $maquinaDado2 = rand(1, 6);
    $somaMaquina = $maquinaDado1 + $maquinaDado2;

    //função que irá gerar a imagem das faces
    function gerarFaces($face) {
        switch($face) {
            case 1:
                echo "<img src=\"faces_dados/face_nUm.png\" style=\"margin-right: 10px;\" alt=\"\">";
                break;
            case 2:
                echo "<img src=\"faces_dados/face_nDois.png\" style=\"margin-right: 10px;\" alt=\"\">";
                break;
            case 3:
                echo "<img src=\"faces_dados/face_nTres.png\" style=\"margin-right: 10px;\" alt=\"\">";
                break;
            case 4:
                echo "<img src=\"faces_dados/face_nQuatro.png\" style=\"margin-right: 10px;\" alt=\"\">";
                break;
            case 5:
                echo "<img src=\"faces_dados/face_nCinco.png\" style=\"margin-right: 10px;\" alt=\"\">";
                break;
            case 6:
                echo "<img src=\"faces_dados/face_nSeis.png\" style=\"margin-right: 10px;\" alt=\"\">";
                break;
            default:
                echo "<img src=\"\" alt=\"\">";
                break;
        }
    }

    //retorna o vencedor
    function ganhador($somaPessoa, $somaMaquina){
        switch(true){
            case $somaPessoa > $somaMaquina:
                return "Parabéns você ganhou!";
                break;
            case $somaMaquina > $somaPessoa: 
                return "Você perdeu!";
                break;
            case $somaPessoa == $somaMaquina: 
                return "A soma das faces foram iguais, você empatou!";
                break;
        }
    }

    $ganhador = ganhador($somaPessoa, $somaMaquina);

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo dos dados</title>
</head>
<body>
    <main id="container">
		<div class="wrapper">
            <form action="" method="post">
            <fieldset>
                <legend>Digite seu nome</legend>
                <label for="nome">Nome</label>
                <input type="text" name="pessoa" id="pessoa" >
            </fieldset>
            <fieldset>
                <input type="submit" class="jogar" name="gerarFace" id="gerarFace" value="Jogar">
            </fieldset>
            </form>

        <div class="pessoa">
            <?php 
                gerarFaces($pessoaDado1);
                gerarFaces($pessoaDado2);
                echo "<br/>";
                echo "<h2 style=\"color: black;\">Soma das suas faces: $somaPessoa</h2>"
            ?>   
        </div>  
        <div class="maquina">
            <?php 
                gerarFaces($maquinaDado1);
                gerarFaces($maquinaDado2);
                echo "<br/>";
                echo "<h2 style=\"color: black;\">Soma das faces da máquina: $somaMaquina</h2>"
            ?>
        </div>
        <div class="resultado">
            <?php
                echo "<br/>";
                echo "<h2 style=\"color: black;\">$ganhador</h2>"
            ?>
        </div>
        </div>
    </main>
</body>

<style>
    #container {
	    width: 80vw;
	    margin: 0 auto;
    }

    .wrapper {
	    display: flex;
	    flex-direction: column;
	    align-items: center;
	    margin-top: 5rem;
    }
    .pessoa {
        display: inline-block;
        width: 30%;
        position: top;
        left: 5px;
        text-align: left;
    }
    .maquina {
        display: inline-block;
        width: 30%;
        position: top;
        text-align: left;
    }
    .resultado {
        display: inline-block;
        width: 30%;
        position: top;
        text-align: left;
    }
    .resultado p{
        color: black;
        font-size: 100px;
    }
    .jogar {
        display: flex;
        position: center;
    }
</style>