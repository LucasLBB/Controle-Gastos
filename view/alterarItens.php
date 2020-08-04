<?php
    include "../controller/restritoSession.php";
    require_once "../controller/obterDados.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alterarItens.css">
    <title>Alterar Item</title>
</head>
<body>
    <!--Header-->
    <?php
    include "header.php";
    ?>

    <!--Conteúdo Principal-->
    <main>

        <h1>Cadastrou Errado? É só Alterar!!!</h1>

        <form action="../controller/alterarDados.php" method="POST">
        
            <div><input type="text" name="idItem" placeholder="id" value="<?php echo $idItem ?>" hidden readonly></div>
            <div><input type="text" id="desc" name="descricao" placeholder="Descrição" value="<?php echo $descricao ?>" onkeypress="return somenteLN(event)"></div>
            <div><input type="text" id="val" name="valor" placeholder="Valor Unitário" value="<?php echo $valor ?>" onkeyup="preencher(this)"></div>
            <div><input type="text" id="qtd" name="quantidade" placeholder="Quantidade" value="<?php echo $quantidade ?>" onkeypress="return somenteN(event)"></div>

            <input type="submit" id="btnAlt" value="Alterar Item">
        </form>
    </main>

    <script src="javascript/main.js"></script>
</body>
</html>