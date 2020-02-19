<?php
    $contador = (integer) 0;
    $valor1 = (integer) 0;

    if (isset($_POST['btnCalc'])) {
        
        $valor1 = $_POST["txtNumero"];
        
        echo("---- WHILE ----");
        
        while ($contador <= $valor1) {
            echo($contador.", ");
            $contador += 1;
            
        }
        
        echo ("<br>". "----FOR----");
        for ($contador = 0; $contador <= $valor1; $contador++) {
            echo($contador.", ");
            
        }
            
    }
?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Aula de PHP</title>
        <style>
            h1, p, .formatarInputs, #operadores, #resultado {
                font-family: "comic sans ms";
                
            }
            
            body {
                background-color: cornflowerblue;
                margin: 0px;
                padding: 0px;
                
                text-align: center;
                padding-top: 80px;
                
            }
            
            h1 {
                color: white;

            }
            
            p {
                font-size: 30px;
            }
            
            .formatarInputs {
                height: 25px;
                width: 200px;
                
                font-size: 18px;
                border-radius: 20px;
            }
            
            #caixaCentralizada {
                height: 300px;
                width: 650px;
                
                background-color: white;
                
                border-radius: 20px;
                margin-left: auto;
                margin-right: auto;
                padding-top: 50px;
                
                box-sizing: border-box;
            }
            
            #resultado {
                height: 100px;
                width: 650px;
                
                background-color: white;
                
                border-radius: 20px;
                
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
                
                padding-top: 1px;
                
                box-sizing: border-box;
                
            }
            
        </style>
    </head>
    <body>
        <h1>Estrutura de Repetição</h1>
        <div id="caixaCentralizada">
            <form name="formNumero" action="repeticao.php" method="post">
                N°: <input type="text" name="txtNumero" class="formatarInputs">
                <input type="submit" name="btnCalc" value="Calcular">
            </form>
        </div>
        <div id="resultado"></div>
    </body>
</html>