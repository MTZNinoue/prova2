<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Consulta</title>
</head>
<body>
    <h1>Consulta Fluxo de Caixa</h1>
    <?php
        include('conexao.php');

        $tipo = $_POST['tipo'];

        if ($tipo == 'entrada') {
            $sql = "select sum(valor) as valor from fluxo_caixa where tipo = 'entrada'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);

            foreach($result as $key => $row){

                echo "Valor (Entrada): ".$row['valor'];
            }
        
        }else if ($tipo == 'saida') {
            
            $sql = "select sum(valor) as valor from fluxo_caixa where tipo = 'saida'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);

            foreach($result as $key => $row){

                echo "Valor (Saída): ".$row['valor'];
            }

        }else if ($tipo == 'saldo') {

            $sql = "select sum(case when tipo = 'entrada' then valor else 0 end) -
            sum(case when tipo = 'saida' then valor else 0 end) as valor
            from fluxo_caixa ";

            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);

            foreach($result as $key => $row){

                echo "Valor do Saldo (Entrada - Saída): ".$row['valor'];
            }

        }
    ?>
</body>
</html>