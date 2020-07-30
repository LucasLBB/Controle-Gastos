<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Controle de Gastos</title>
        <link rel="stylesheet" href="css/cadastroUser.css">
    </head>
    <body>

        <?php
            include "header.php";
        ?>

        <main>
            <h1>Cadastre-se</h1>

            <form action="../controller/cadastro.php" method="POST" onsubmit="return verificaAutenticidade()">

                <div><input type="text" id="nome" name="nome" placeholder="Nome" size="25" required></div>
                <div><input type="text" id="email" name="email" placeholder="E-mail" size="25" pattern="^\w*(\.\w*)?@\w*\.[a-z]+(\.[a-z]+)?$" required></div>
                <div><input type="password" id="senha" name="senha" placeholder="Senha" onkeyup="return senhaVerifica(this)" size="25" required></div>

                <input type="submit" id="btnCad" value="Cadastrar">
            
            </form>

            <div id="resultado"></div>  
        </main>

        <!--Inicio do Footer-->
        <footer id="footer-cadastro"> 
            <p>Desenvolvido por Lucas de Lima</p>
        </footer>
        <!--Fim do Footer-->
        <script src="javascript/cad.js"></script>
    </body>
</html>