<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Controle de Gastos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/loginUser.css">
</head>
<body>

    <?php
    include "header.php";
    ?>

    <!--Inicio do Conteúdo Principal-->
    <main>

        <h1>Entre com sua conta</h1>

        <form action="../controller/login.php" method="POST">

            <div><input type="email" id="email" name="email" placeholder="E-mail"></div>

            <div><input type="password" id="senha" name="senha" placeholder="Senha"></div>

            <div><input type="submit" id="btnLog" value="Logar"></div>
            
            <div><p>Não possui uma conta?</p><a href="cadastroUser.php" id="newAccount">Crie aqui!</a></div>

        </form>
    </main>
    <!--Fim do Conteúdo Principal-->
    
    <?php
    include "footer.php";
    ?>
    
</body>
</html>