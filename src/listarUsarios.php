<?php
  require_once('../php/conexao.php');

  $conex = conexaoMysql();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listagem</title>
  <link rel="stylesheet" href="../css/globalStyles.css">
  <link rel="stylesheet" href="../css/listagem.css">
</head>
<body>
  <div id="container-box">
    <div>
      <a href="index.html">Votlar tela de login</a>
    </div>
    <div>
      <table id="tbl-list">
        <tr>
            <td id="tbl-titulo" colspan="5">
                <h1> Lista de Usuarios</h1>
            </td>
        </tr>
        <tr id="linha-titulo">
        <td class="coluna-titulo">identificação</td>
          <td class="coluna-titulo">nome</td>
          <td class="coluna-titulo">cpf</td>
          <td class="coluna-titulo">email</td>
          <td class="coluna-titulo">senha</td>
        </tr>
        <?php 
        
        $sql = "select * from usuario";

        $select = mysqli_query($conex, $sql);

        while($listUsusarios = mysqli_fetch_assoc($select)){
        
        ?>
          <tr class="tbl-linha">
            <td class="tbl-coluna"><?=$listUsusarios['id']?></td>
            <td class="tbl-coluna"><?=$listUsusarios['nome']?></td>
            <td class="tbl-coluna"><?=$listUsusarios['cpf']?></td>
            <td class="tbl-coluna"><?=$listUsusarios['email']?></td>
            <td class="tbl-coluna"><?=$listUsusarios['senha']?></td>
          </tr>
        <?php 
        }
        ?>
        <!-- <tr class="tbl-linha">
          <td class="tbl-coluna">id</td>
          <td class="tbl-coluna">nome</td>
          <td class="tbl-coluna">cpf</td>
          <td class="tbl-coluna">email</td>
          <td class="tbl-coluna">senha</td>
        </tr> -->
      </table>
    </div>
  </div>
</body>
</html>