<?php
session_start();
 include('../database/conexao.php'); 

$email =  $_POST['login_email'];
$senha =  $_POST['login_senha'];


 $result = pg_query($conexao, "SELECT nome_cliente FROM cliente where email_cliente = '".$email."' and senha_cliente = '".$senha."';");



  if ($line = pg_fetch_assoc($result)) {

    if ($line['nome_cliente'] === 0) {
     echo json_encode(array(
            "status"=> 400,
            "message"=> "Usuário ou senha inválidos"
        ));
        $_SESSION['nao_autenticado'] = true;
    }
  
  else {
   $_SESSION['usuario'] = $line['nome_cliente'];
            echo json_encode(array(
            "status"=> 200,
            "message"=> "Credenciais corretamente informadas",
          )); 
  }
      
     } 

   /*  $logado = pg_fetch_assoc($result);
  if (!$logado) {
    
  } else
       {
       	  $linha = pg_fetch_row($result);
        
        }*/


//md5('{$senha}')



?>
