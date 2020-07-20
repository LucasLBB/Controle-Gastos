<?php
    require "../controller/restritoSession.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área Restrita</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/restrito.css">
</head>
<body>

    <!--Header-->
    <?php
    include "header.php";
    ?>

    <!--Caso o js esteja desabilitado-->
    <noscript>
        <p><b>Para completo funcionamento do sistema, por favor ative o JavaScript.</b></p>
    </noscript>

    <main>
        <h1>Novos Gastos? Insira-os abaixo!</h1>

        <form action="../controller/salvaRegistro.php" method="POST">

            <nav id="nav-lisTwo">
                <ul>
                    <li><a href="#" class="add">Adicionar Campo</a></li>
                    <li><a href="#" class="remover" onclick="removerLinha()">Remover Campo</a></li>
                    <li><a href="consultarGastos.php">Consultar Gastos</a></li>
                    <li><a href="../controller/logout.php" id="sair">Sair</a></li>
                    <li><input id="enviar" type="submit" value="Salvar Gastos"></li>
                </ul>
            </nav>
            
            <table id="tabela">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Valor Unitário</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" id="des" name="r1[]" placeholder="Ex: Pão" onkeypress="return somenteLN(event)" required></td>
                        <td><input type="text" id="va" name="r2[]" placeholder="Ex: 0.30" onkeyup="preencher(this)" required></td>
                        <td><input type="text" id="qt" name="r3[]" placeholder="Ex: 10" onkeypress="return somenteN(event)" required></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Campos Obrigatórios</td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </main>

    <footer>
        <nav id="nav-footer-restrito">
            <p>Desenvolvido por Lucas de Lima</p>
        </nav>
    </footer>
    <script src="javascript/main.js"></script>
</body>
</html>