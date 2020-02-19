<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Aula 04 - PHP: Formularios</title>
        
        <style>
            textarea {
                resize: none;
                
            }
        </style>
        
        <script>
        
        </script>
    </head>
    
    <body>
        <!-- 

        Todos os elementos de formulários, precisam estar entre a tag <form> para conseguir retira-los para o php
        action: Define para qual página será enviado os dados 
        
        method: (get/post) - Define como será a retirado dos itens do form(get envia para URL e post envia por variaveis (ocultas) no proprio navegador)

        -->
        <form name="fmrFormularios" action="aula03.php" method="get">
            Nome: <input type="text" name="txtNome" value="Teste" size="50" maxlength="10"> <br>
            
            Estado:
            <select name="sltEstados">
                <option value="">Selecione um item</option>
                <option value="sp">São Paulo</option>
                <option value="rj" selected>Rio de Janeiro</option>
                <option value="es">Espírito Santo</option>
                <option value="mg">Minas Gerais</option>
            </select> <br>
            
            Sexo:
            <input type="radio" name="rdoSexo" value="M"> Masculino  
            <input type="radio" name="rdoSexo" value="F" checked> Feminino
            <br>
            
            Idiomas:
            <input type="checkbox" name="chkPort" value="pt" checked>Português
            <input type="checkbox" name="chkIng" value="en">Inglês
            <input type="checkbox" name="chkEsp" value="es">Espanhol
            <br>
            
            Observações:
            <textarea name="txtObs" cols="20" rows="7"></textarea>
            <br>
            
            Senha: <input type="password" name="txtSenha">
            <br>
            
            <input type="submit" name="btnMandar" value="Mandar"> 
        </form>
        
        <?php
            
        ?>
    </body>
</html>