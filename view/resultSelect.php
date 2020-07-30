<?php
    include "../controller/restritoSession.php";
    include "../controller/selectRegistro.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resultSelect.css">
    <title>Resultado</title>
</head>
<body>

<?php include "header.php"; ?>

<table id="tabela">
    <thead>
        <th id="id">ID</th>
        <th id="desc">Descrição</th>
        <th id="valUni">Valor Unitário</th>
        <th id="qtd">Quantidade</th>
        <th>Valor Total</th>
        <th>Data de Cadastro</th>
        <th colspan="2">Ações</th>
    </thead>
    <tbody id="corpo-tabela">

    <!--Créditos ao Autor das Imagens-->
    <div hidden>Ícones feitos por <a href="https://www.flaticon.com/br/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div>
    <div hidden>Ícones feitos por <a href="https://www.flaticon.com/br/autores/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/br/" title="Flaticon">www.flaticon.com</a></div>   
    <!--Créditos ao Autor das Imagens-->    
    
        <?php retornaLinhas($execSelect, $dadosItem); ?>
    </tbody>
</table>

<?php 
recalculaTotal($execSelectTotal);
?>

</body>
</html>
