<?php
   include('../database/conexao.php'); 
   
   
   $nome_cliente = $_POST['nome_cliente'];
   $email_cliente = $_POST['email_cliente'];
   $cpf_cliente =  $_POST['cpf_cliente'];
   $telefone_cliente = $_POST['telefone_cliente'];
   $senha_cliente = $_POST['senha_cliente'];
   $status = 0;
   $message = " "; 


$result_email = pg_query($conexao, "SELECT nome_cliente FROM cliente where email_cliente = '".$email_cliente."'or cpf_cliente = '".$cpf_cliente."';");

$line_email = pg_fetch_assoc($result_email);
   
   if($line_email){
     $status = 300;
     $message = "Email ou CPF ja cadastrado";
    }else

    {
     $result = pg_query($conexao,"INSERT INTO public.cliente(nome_cliente, email_cliente, telefone_cliente, senha_cliente, cpf_cliente) values('".$nome_cliente."','".$email_cliente."','".$telefone_cliente."','".$senha_cliente."','".$cpf_cliente."')");
       $salvo= pg_affected_rows($result);
       if(!$salvo){
            $status = 400;
            $message = "Não foi possivel fazer o cadastro";
              
       } else
       {
           $status = 200;
           $message = "Cadastrado com sucesso";       	 	
           
       }
     }
    
         echo json_encode(array(
            "status"=> $status,
            "message"=> $message,
        ));
   
?>


