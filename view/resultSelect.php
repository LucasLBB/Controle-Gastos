<?php
    include "../controller/restritoSession.php";
    include "../controller/selectRegistro.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    
    <?php 
    include "header.php";
    ?>

    <?php retornaLinhas($execSelect, $dadosItem)?>
</body>
</html>
