<?php /* Anexo da conexão ao Banco de Dados*/
  $conexao = mysqli_connect('localhost','root','');
  $banco = mysqli_select_db($conexao,'form_cadastro');
  mysqli_set_charset($conexao,'utf8');
  $sql = mysqli_query($conexao,"SELECT * FROM formulario") or die("Erro");
?> <!-- Fim do anexo da conexão ao Banco de Dados -->

<!-- Inicio do código HTML -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <title>Consultar Vendas</title>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="consulta.css">
</head>
<body>
    <div><!--Menu-->
      <ul id="menu-h">
        <li><a href="cadastro.php">Cadastro de Vendas</a></li><li><a>Consultar</a></li>
      </ul>
    </div><!--Fim do Menu-->
    <hr>
    <div>
      <table class="table"> <!-- Inicio da Tabela de Amostra de Dados -->
      <thead><!-- Estilização Nome das Colunas -->
          <tr class="nomes_tab">
              <th scope="col">Tipo do Pagamento</th>
              <th scope="col">Data do Pagamento</th>
              <th scope="col">Produto</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Valor</th>
              <th scope="col">Observações</th>
          </tr>
      </thead> <!-- Fim da Estilização Nome das Colunas -->
      <tbody>
      <div class="dados"> <!-- Estilização das Amostra de Dados -->
      <?php
          while($dados = mysqli_fetch_assoc($sql)) /*Inserção de Dados na tabela para edição*/
          {
            echo "<tr>";
            echo "<td>".$dados['tipo_do_pagamento']."</td>";
            echo "<td>".$dados['data_pag']."</td>";
            echo "<td>".$dados['Item']."</td>";
            echo "<td>".$dados['Quantidade']."</td>";
            echo "<td>"."R$".$dados['Valor']."</td>";
            echo "<td>".$dados['Observações']."</td>";
          }
      ?>
      </div> <!-- Fim da estilização das Amostra de Dados -->
      </tbody>
      </table>
    </div>
    </table>
    </div> <!-- Fim da Tabela de Amostra de Dados -->
</body>
</html> <!-- Fim do código HTML -->










































