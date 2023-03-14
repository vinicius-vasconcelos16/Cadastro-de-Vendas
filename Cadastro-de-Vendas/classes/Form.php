<?php /* Caracteriza a variável em seu devido local e Mensagem de Adição/Erro no momento do cadastramento*/

    class Form {

      public static function alert($tipo, $mensagem){
       if($tipo == 'Erro'){
        echo '<div style=" height:10%; text-align: center; border-radius: 10px; transform: translate(-50%, -50%); top: 165%; left: 93%; position: absolute; font-size: small; width: 80%; background: black; color:red; font-size: 15px;" >'.$mensagem.'</div>';
        return false;
       }else if($tipo == 'Sucesso'){
        echo '<div style=" height:10%; text-align: center; border-radius: 10px; transform: translate(-50%, -50%); top: 165%; left: 93%; position: absolute; font-size: small; width: 80%; background: black; color: darkgreen; font-size: 15px;" >'.$mensagem.'</div>';
        return true;
       }
      } 
        public static function cadastrar($tipo_do_pagamento,$data,$nota_fiscal,$nome_do_item,$quantidade,$valor,$observacoes){
          $sql = Mysql::conectar()->prepare("INSERT INTO `formulario` VALUES (null,?,?,?,?,?,?,?)");
          $sql->execute(array($tipo_do_pagamento,$data,$nota_fiscal,$nome_do_item,$quantidade,$valor,$observacoes));
        }
    }

?> <!--Final da função caracterizadora da variável em seu devido local-->