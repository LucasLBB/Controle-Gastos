<?php
include "../controller/restritoSession.php";
require_once "../model/conexao.php";
require_once "obterDados.php";

//Exclui o item selecionado
$dadosItem = $_GET['id'];

//Seleciona a linha do item selecionado
$sqlSelecionar = "SELECT * FROM tbgastos WHERE id = $idItem";

//Executa a query
$execSelecionar = mysqli_query($conexao, $sqlSelecionar);

//Pega os valores daquela linha
$resultado = mysqli_fetch_row($execSelecionar);

//Verifica se o id do usuário daquela linha selecionada é igual ao id do usuário logado no momento, se for pode excluir
//caso contrário deve retorna uma mensagem de erro.
if($resultado[6] != $_SESSION['id_user']){
    echo '<script type="text/javascript">
              alert("Item não pertencente a este usuário!");
              window.history.go(-3);
            </script>';
      exit;
}

if (!isset($_SESSION['logado'])){
  header("Location: ../view/loginUser.php");
}else{
  $sql = "DELETE from tbgastos WHERE id = $dadosItem";
      
  $resultado = mysqli_query($conexao, $sql);
}
if($resultado){
    echo '<script type="text/javascript">
            alert("Item Excluído!");
            window.history.go(-2);
          </script>';
    exit;
}

mysqli_close($conexao);

