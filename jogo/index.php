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
                echo "<img src=\"faces_dados/face_nUm.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 2:
                echo "<img src=\"faces_dados/face_nDois.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 3:
                echo "<img src=\"faces_dados/face_nTres.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 4:
                echo "<img src=\"faces_dados/face_nQuatro.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 5:
                echo "<img src=\"faces_dados/face_nCinco.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            case 6:
                echo "<img src=\"faces_dados/face_nSeis.png\" style=\"margin-right: 20px;\" alt=\"\">";
                break;
            default:
                echo "<img src=\"\" alt=\"\">";
                break;
        }
    }

    //definir quem foi o vencedor
    if($somaMaquina > $somaPessoa){
        echo "Você perdeu!";
    }else if($somaPessoa > $somaMaquina){
        echo "Parabéns".$pessoa." você ganhou!";
    }else{
        echo "A soma das faces foram iguais, você empatou!";
    }
    
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo dos dados</title>
</head>
<body>
    <form action="" method="post">
    <fieldset>
    <legend>Digite seu nome</legend>
        <label for="nome">Nome</label>
        <input type="text" name="pessoa" id="pessoa" >
    </fieldset>
    <fieldset>
        <input type="submit" class="jogar" name="gerarFace" id="gerarFace" value="Faces">
    </fieldset>
    </form>

<style>
    .pessoa {
        display: inline-block;
        width: 40%;
        position: relative;
        left: 5px;
        text-align: center;
    }

    .maquina {
        display: inline-block;
        width: 40%;
        position: relative;
        right: -5px;
        text-align: center;
    }

    .resultado {
        display: inline-block;
        width: 15%;
        position: relative;
        top: -75px;
        left: 30px;
    }

    .resultado p{
        color: white;
        font-size: 28px;
    }

    .jogar {
        width: 100px;
        height: 80px;
        position: relative;
        left: 42%;
        font-size: 20px;
    }
</style>