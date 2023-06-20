<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM fluxo_caixa WHERE id=$id";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Excluido com sucesso<br>";
    else
        echo "Erro ao Excluir<br>". mysqli_error($con)."!";
        
?>
    <a href="listar_fluxo_caixa.php">Voltar</a>