<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa where id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--http://localhost/PRW/Banco%20de%20dados/Aulas/altera_usuario?id_usuario=1 -->
    <h1>Cadastro Fluxo de Caixa</h1>
    <form action="altera_fluxo_caixa_exe.php" method="POST" >
        <input name="id" type="hidden"
            value="<?php echo $row['id'] ?>"> 
    <div>
            <label>Data</label>
            <input type="date" name="data"
            value="<?php echo $row['data'] ?>">
        </div>
        <div>
        <p>Tipo:</p>
            <input type="radio" name="tipo" value="Entrada">
            <label for="Entrada">Entrada</label>
            <input type="radio" name="tipo" value="Saida">
            <label for="Saida">Saida</label
            value="<?php echo $row['tipo'] ?>">
            
        </div>
        <div>
            <label for="valor">Valor:</label>
	        <input type='number' id='valor' name='valor' required
            value="<?php echo $row['valor'] ?>">
        </div>
        <div>
        <label for="historico">Historico:</label>
	    <input type='text' id='historico' name='historico' required
            value="<?php echo $row['historico'] ?>">
        </div>
        <div>
        <label for="cheque">Cheque:</label>
	<select id="cheque" name="cheque">
		<option value="sim">Sim</option>
		<option value="nao">Não</option
            value="<?php echo $row['cheque'] ?>">
        </div>
        <div>
            <input type="submit" value="Salvar">
        </div>
    </form>
</body>
</html>