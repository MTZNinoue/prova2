<?php
    include('conexao.php');
    $fluxo = $_GET['fluxo_de_caixa'];
    $sql = "DELETE FROM agenda where fluxo_caixa=$fluxo";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: ". mysqli_error($con)."!";
?>
    <a href="listar_fluxo_caixa.php">Voltar</a>