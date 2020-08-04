<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contato.css">
    <title>Contato</title>
</head>
<body>

    <?php
    include "header.php";
    ?>

    <main>
    
        <h1>Viu algum Erro &#128531 &#128547???</h1>

        <p>Só preciso que me envie um e-mail explicando o erro,
        dessa forma poderei melhorar cada vez mais o site e a sua experiência &#128521</p>
        
        <form action="../controller/contatoEmail.php" method="POST">

            <input type="text" id="titulo" name="titulo" placeholder="Título">

            <input type="text" id="nome" name="nome" placeholder="Seu nome">

            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Sua mensagem"></textarea>
           
            <input type="submit" id="btnMsg" value="Enviar Mensagem">
        </form>
    </main>

</body>
</html>