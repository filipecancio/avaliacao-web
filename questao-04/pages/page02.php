<?php 
    $valor = filter_input(INPUT_POST, 'avaliacao');
    $conn = dbConnect();
    dbClose($conn);

    $sql = "select C.nome,A.dataHorario from Cliente C inner join Avaliacao A on C.id = A.idCliente where A.nivel='".$valor."';";
    $result -> $mysqli -> query($sql);
    $row = $result -> fetch_array(MYSQLI_ASSOC);
?>

<h1>Questão 04</h1>
<h2>Avaliações (<?php echo $valor ?>)</h2>
    <div class="sq-container-list">
    <table style="width:100%">
    <thead>
      <tr>
        <th>Cliente</th>
        <th>Data/Hora</th>
      </tr>
      </thead>
    <tbody>
    <?php foreach($row as $res):?>	
      <tr>
        <td><?php echo $res['nome']?></td>
        <td><?php echo $res['dataHorario']?></td>
      </tr>
  	<?php endforeach; ?>
      <tfoot>
        <tr>
            <th scope="row">Percentual em relação ao total de avaliações</th>
            <td>13,79%</td>
        </tr>
    </tfoot>
    </table>
    </div>

    <a href="index.php">Voltar</a>