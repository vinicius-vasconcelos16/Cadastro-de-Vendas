<!-- Arquivo responsável pela edição da venda cadastrada -->



<!--Configuração de conexão ao banco de dados--> 
<?php 

      include('config.php');
      Mysql::conectar();

      
?> 
<!--Fim do comando de conexão ao banco de dados-->

<!DOCTYPE html> <!--Arquivo HTML-->
<html lang="pt-br">
<head>
    <title>Página de Edição - NWSoft</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cadastro.css" rel="stylesheet">
</head>
  <body>

    <!--Menu-->
    <div> 
      <ul id="menu-h">
        <li><a href="consulta.php">Voltar á Consulta</a></li>
      </ul>
    </div> 
    <!--Fim do Menu-->

    <hr> <!--Linha de Divisão-->

    <div class="logo_nw"><img src="logoNW.png" width="300" height="90"></div> <!--Logo NW-->

    <div class="form_pg"> <!--Inicio da tela de cadastro-->

      <!--Inicio do comando PHP que envia informações ao banco de dados-->
      <?php 
        
            if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
                $tipo_do_pagamento = $_POST['tipo_de_pagamento'];
                $data = $_POST['data'];
                $nota_fiscal = $_POST['nota_fiscal'];
                $nome_do_item = $_POST['iten'];
                $quantidade = $_POST['quantidade'];
                $valor = $_POST['valor'];
                $observacoes = $_POST['observacao'];

                if($tipo_do_pagamento == ''){
                  Form::alert ('Erro','Insira o Tipo do Pagamento!');
                }else if($data == ''){
                  Form::alert ('Erro','Insira a Data!');
                }else if($nota_fiscal == ''){
                  Form::alert ('Erro','Insira o Número da Nota Fiscal!');
                }else if($nome_do_item == ''){
                  Form::alert ('Erro','Insira o Nome do Item!');
                }else if($quantidade == ''){
                  Form::alert ('Erro','Insira a Quantidade!');
                }else if($valor == ''){
                  Form::alert ('Erro','Insira o Valor!');
                }else{
                  Form::cadastrar($tipo_do_pagamento,$data,$nota_fiscal,$nome_do_item,$quantidade,$valor,$observacoes);
                  Form::alert('Sucesso','Venda Cadastrada!');
                }
            }
      ?> 
      <!--Fim do comando PHP que envia informações ao banco de dados-->

      <form method="POST"> <!--Inicio da box de cadastramento-->

        <div><strong><label>Tipo do Pagamento </label></strong><input type="text" name="tipo_de_pagamento" placeholder="Ex: À Vista"></div>
        <div><strong><label>Data do Pagamento </label></strong><input type="text" name="data" placeholder="DD/MM/AAAA "></div>
        <div><strong><label>Nota Fiscal </label></strong><input type="text" name="nota_fiscal" placeholder="Número da Nota "></div>
        <div class="form_iten"><strong><label>Nome do Item </label></strong><input type="text" name="iten" placeholder="Nome do Item">
        <strong><label>Quantidade </label></strong><input type="text" name="quantidade" placeholder="Quantidade">
        <strong><label>Valor </label></strong><input type="text" name="valor" placeholder="Valor"></div>
        <div><strong><label>Observações </label></strong><input type="text" name="observacao" placeholder="Opcional "></div>
        <div><input style="color:lightgray" type="submit" name="acao" value="Cadastrar"></div>
        <div><input type="hidden" name="form" value="f_form"></div>

      </form><!--Fim da box de cadastramento-->
    
    </div><!--Fim da tela de cadastro-->
  </body>
</html>
