<?php

include "../controller/restritoSession.php";
require_once "../model/conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Gastos</title>
    <link rel="stylesheet" href="css/consultarGAstos.css">
</head>
<body>

    <?php
    include "header.php";
    ?>

    <main>

        <h1>Selecione o Mês desejado!</h1>

        <form action="resultSelect.php" method="POST">

            <select name="mes">
                <option value="#">Consultar Gastos</option>
                <option value="01">Janeiro</option>
                <option value="02">Fevereiro</option>
                <option value="03">Março</option>
                <option value="04">Abril</option>
                <option value="05">Maio</option>
                <option value="06">Junho</option>
                <option value="07">Julho</option>
                <option value="08">Agosto</option>
                <option value="09">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>

            </select>

            <input type="submit" id="btnEnviar" value="Enviar">

        </form>
    </main>

<!--Inicio do Footer-->
<footer>
        <nav id="nav-footer-consulta">
            <p>Desenvolvido por Lucas de Lima</p>
        </nav>
</footer>
    <!--Fim do Footer-->
</body>
</html>
