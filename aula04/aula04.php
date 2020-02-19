<?php
    setlocale(LC_ALL, "pt_BR");

    // Declaração de variáveis
    $valor1 = (float) 0;
    $valor2 = (float) 0;
    $operador = (string) null;
    $resultado = (double) 0;

    $checkedSubt = (string) null;
    $checkedDivi = (string) null;
    
    // Constantes
    define("ERRO_CAIXA_VAZIA", "<span class='msg'>Por favor inserir dados válidos nas caixas de texto, não é possível realizar cálculos vazio!</span>");
    const ERRO_CAIXA_STRING = "<span class='msg'>Por favor digite apenas números de 0 a 9!</span>";
    const ERRO_SEM_OPERACAO = "<span class='msg'>Caixa de operação não selecionada</span>";

    if (isset($_POST['btnCalc'])) {
        // Recebendo dados do formulário
        $valor1 = str_replace(",", ".", $_POST['txtValor1']);
        $valor2 = str_replace(",", ".", $_POST['txtValor2']);
        
        
        if(!isset($_POST['rdoOperador']))
            echo(ERRO_SEM_OPERACAO);
        
        else {
            $operador = strtolower($_POST['rdoOperador']);


            if (empty($valor1) || empty($valor2))
                echo(ERRO_CAIXA_VAZIA);

            elseif(!is_numeric($valor1) || !is_numeric($valor2)) 
                echo(ERRO_CAIXA_STRING);

            else {
                    // Convertendo as variáveis que viraram string em numero
                    settype($valor1, "float");
                    settype($valor2, "float");


                    if ($operador === "soma")
                        $resultado = $valor1 + $valor2;
                        
                        
                    elseif ($operador === "subt") {
                        $checkedSubt = 'checked';
                        $resultado = $valor1 - $valor2;
                    }
                        

                    elseif ($operador === "mult") {
                        $checkedMult = 'checked';
                        $resultado = $valor1 * $valor2;
                    }
                        

                    elseif ($operador === "divi") {
                        
                        $checkedDivi = 'checked';
                        
                        if ($valor2 != 0)
                            $resultado = $valor1 / $valor2;
                        else
                            $resultado = 0;
               
                    }
                }
            }
        }

?>

<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Aula de PHP - Calculadora simples</title>
        
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
                height: 30px;
                width: 650px;
                
                font-size: 18px;
            }
            
            #caixaCentralizada {
                height: 300px;
                width: 650px;
                
                background-color: white;
                
                border-radius: 20px;
                margin-left: auto;
                margin-right: auto;
                
                box-sizing: border-box;
            }
            
            #entradaDados {
                height: 300px;
                width: inherit;
                
                border-radius: 20px;
                
                padding-top: 50px;
                box-sizing: border-box;
            }
            
            
            #operadores {
                height: 100px;
                width: 325px;
                
                text-align: left;
                
                margin-top: 20px;
                padding-left: 10px;
                
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
            
            .msg {
                width: 100%;
                height: 30px;
                border: solid 2px black;
                background-color: darkkhaki;
                text-align: center;
                color: red;
                font-family: verdana;
                
            }
        
        </style>
    </head>
    <body>
        <h1>Calculadora Simples</h1>
        <div id="caixaCentralizada">
            <div id="entradaDados">
                <form name="formEntradaValores" action="aula04.php" method="post">
                    <div class="formatarInputs">Valor #1: <input type="text" name="txtValor1" value="<?=$valor1 ?>"></div>
                    <div class="formatarInputs">Valor #2: <input type="text" name="txtValor2" value="<?=$valor2 ?>"></div>
                    
                    <div id="operadores">
                        <input type="radio" name="rdoOperador" value="soma" <?php if($operador == "soma") echo("checked") ?>> Somar <br>
                        <input type="radio" name="rdoOperador" value="subt" <?=$checkedSubt?>> Subtrair <br>
                        <input type="radio" name="rdoOperador" value="mult" <?php echo $operador == "mult"? "checked" : "" ?>> Multiplicar <br>
                        <input type="radio" name="rdoOperador" value="divi" <?=$checkedDivi?>> Dividir <br>
                    </div>
                    
                    <input type="submit" name="btnCalc" value="Calcular">
                </form>
            </div>
            
            
        </div>
        
        <div id="resultado">
            <p><?php echo(round($resultado, 2))?></p>
        </div>
    </body>
</html>