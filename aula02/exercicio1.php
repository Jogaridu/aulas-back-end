<!doctype html>

<html lang="pt-br">
    <head>
        <title>Aula de PHP</title>
        <style>
            .destaque {
                font-weight: bold;
                color: red;
            }
        </style>
    </head>
    
    <body>
        <form name="frmExercicio1" method="get" action="exercicio1.php">
            Digite seu nome: 
            <input type="text" id="caixaDeTexto" name="txtNome">
            <input type="submit" value="Enviar" name="btnEnviar">
        </form>
        
        <?php
            $nome = $_GET['txtNome'];
        
            // SALVE COMENTARIO
            /* MUITO COMENTARIO */
            # SAUDADES DESSE COMENTARIO
        
            // Uma forma de mostrar o texto na tela + o jeito para concatenar em PHP
            echo("Olá, mundo! Senhor, <spam class='destaque'>" . $nome . "</spam><br>");
        
            // Outra forma de escrever
            print("Outra forma de escrever<br>");
                
            // Mais uma forma de escrever
            print_r("Mais uma forma de escrever");
        ?>
    </body>
</html>