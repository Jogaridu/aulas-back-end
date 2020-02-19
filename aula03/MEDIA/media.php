<?php
    // Inicializando variáveis
    $n1 = "";
    $n2 = "";
    $n3 = "";
    $n4 = "";
    $media = "";

    // isset - verifica uma existência de uma variavel ou objeto

    if (isset($_GET['btnCalc'])) {
        
        // resgata os valores digitados pelo usuário
        // $_GET[]
        $n1 = $_GET['txtPrimeiroBimestre'];
        $n2 = $_GET['txtSegundoBimestre'];
        $n3 = $_GET['txtTerceiroBimestre'];
        $n4 = $_GET['txtQuartoBimestre'];

        // Processamento do cálculo
        $media = ($n1 + $n2 + $n3 + $n4) / 4;
        
    }
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Aula 04 - PHP</title>
        
<!--
        <style>
            body {
                margin: 0px;
                padding: 0px;
                background-color: cornflowerblue;
                
                padding-top: 100px;
            }
            
            h1, p {
                font-family: "comic sans ms";
                font-size: 26px;
                color: white;
                
                text-align: center;
            }
            
            p {
                font-size: 18px;
                color: black;
            }
            #caixaCentralizada {
                height: 300px;
                width: 700px;
                
                margin-left: auto;
                margin-right: auto;
                padding-top: 50px;
                
                box-sizing: border-box;
                
                background-color: white;
                
                border-radius: 20px;
                text-align: center;
                
            }
            
            #resultado {
                height: 100px;
                width: 700px;
                
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
                padding-top: 15px;
                
                background-color: white;
                border-radius: 20px;
                
                font-weight: bold;
                
            }
        </style>
-->
    </head>
    
    <body>
        
        <div class="caixaCentralizada">
            <h1>Calculo de Médias</h1>
            <form name="formNotas" action="media.php" method="get">
                <p>Nota #1: <input type="text" name="txtPrimeiroBimestre" value="<?=$n1?>"></p>
                <p>Nota #2: <input type="text" name="txtSegundoBimestre" value="<?=$n2?>"></p>
                <p>Nota #3: <input type="text" name="txtTerceiroBimestre" value="<?=$n3?>"></p>
                <p>Nota #4: <input type="text" name="txtQuartoBimestre" value="<?=$n4?>"></p>
                
                <input type="submit" name="btnCalc" value="Calcular">
            </form>
            
            <div id="resultado">
                <p class="formatarTexto">A média é: <?php echo($media)?> </p>
            </div>
        </div>
        
        
    </body>
</html>