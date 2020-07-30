<?php

require_once "../model/conexao.php";
require_once "restritoSession.php";

$idItem = $_POST['idItem'];
$descricao = $_POST['descricao'];
$valorUnitario = $_POST['valor'];
$quantidade = $_POST['quantidade'];

//Refaz a multiplicação do valor unitário e a quantidade para atualizar o valor Total caso mude.
$valorTotalModificado = $valorUnitario * $quantidade;

//Seleciona a linha do item selecionado
$sqlSelecionar = "SELECT * FROM tbgastos WHERE id = $idItem";

//Executa a query
$execSelecionar = mysqli_query($conexao, $sqlSelecionar);

//Pega os valores daquela linha
$resultado = mysqli_fetch_row($execSelecionar);

//Verifica se o id do usuário daquela linha selecionada é igual ao id do usuário logado no momento, se for pode alterar
//caso contrário deve retorna uma mensagem de erro.
if($resultado[6] != $_SESSION['id_user']){
    echo '<script type="text/javascript">
              alert("Item não pertencente a este usuário!");
              window.history.go(-3);
            </script>';
      exit;
}

//Alteração dos livros
$sql="UPDATE tbgastos set id = '$idItem', descricao = '$descricao', valor = '$valorUnitario', quantidade = '$quantidade', valorTotal = '$valorTotalModificado' WHERE id = $idItem";

$result = mysqli_query($conexao,$sql);

mysqli_close($conexao);

if($result){
    echo '<script type="text/javascript">
            alert("Item Alterado com Sucesso!");
            window.history.go(-1);
          </script>';
}else{
  echo '<script type="text/javascript">
            alert("Ocorreu um erro! Tente novamente.");
            window.history.go(1);
          </script>';
}
