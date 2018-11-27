<?php
include 'conexao.php';
$sql= "SELECT * FROM usuario;";
$consulta= $conn->prepare($sql);
$consulta->execute();
$registros = $consulta->fetchAll(PDO::FETCH_OBJ);
 ?>
<h1>Registros da Tabela Usuario</h1>
<table border="1px">
  <tr>
    <th>Cod.</th>
    <th>Usuario</th>
    <th>Senha</th>
    <th>Opções</th>
  </tr>

    <?php foreach ($registros as $registro) {
    ?>
      <tr>
      <td><?php echo $registro->idusuario ?></td>
      <td><?php echo $registro->usuario ?></td>
      <td><?php echo $registro->senha ?></td>
      <td>
        <a href="atualizar.php?id=<?=$registro->idusuario ?>"> Alterar</a>
        <a href="deletar.php?id=<?=$registro->idusuario ?>"> Deletar</a>

      </td>
    </tr>
    <?php
    } ?>
</table>
 </table>