<?php  
    include('conexao.php');

   
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
   
    echo "<h1>Alteração de dados </h1>";
    
    $sql = "UPDATE fluxo_caixa SET
            data='$data',
            tipo='$tipo',
            valor='$valor',
            historico='$historico',
            cheque='$cheque',
            WHERE id=$id";
        
    //echo $sql. "<br>";
    $result = mysqli_query($con, $sql);
     if($result)
        echo "Dados alterados com sucesso!<br>";
    else
        echo "Erro ao alterar dados: ". mysqli_error($con)."!";
  
?>
<a href="index.php">Voltar</a>