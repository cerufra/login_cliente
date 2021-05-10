 $('#cadastrar').click(function(){
  var oky = $('#ok').val();

 var ok = Boolean(oky);
var nome_cliente= $('#nome').val();

    if (nome_cliente == "") {
   document.getElementById("msgnome").innerHTML="<font color='red'>O campo Nome deve ser preenchido</font>";
    ok = false;
}
var email_cliente= $('#email').val();

    if (email_cliente == "") {
   document.getElementById("msgemail").innerHTML="<font color='red'>O campo Email deve ser preenchido</font>";
    ok = false;
}
        var cpf_cliente = $('#cpf').val(); 
            if (cpf_cliente == "") {
   document.getElementById("msgcpf").innerHTML="<font color='red'>O campo CPF deve ser preenchido</font>";
    ok = false;
}
        var telefone_cliente = $('#telefone').val();
     /*   if (telefone_cliente === "") {
   document.getElementById("msgtelefone").innerHTML="<font color='red'>O campo Telefone deve ser preenchido</font>";
    ok = false;
}*/

        var senha_cliente = $('#senha').val();	
                if (senha_cliente == "") {
   document.getElementById("msgsenha").innerHTML="<font color='red'>O campo Senha deve ser preenchido</font>";
      ok = false;
}

         if(ok){
           $.ajax({
             type:"POST",
             url:"./class/cadastrar.php",
	           dataType:"json",
             data:{nome_cliente:nome_cliente,email_cliente:email_cliente,telefone_cliente:telefone_cliente,senha_cliente:senha_cliente,cpf_cliente:cpf_cliente},
             success: res => {
                if(res.status == 200) {
                    alert(res.message);
                    window.location.reload(true);

                } else {
                    alert(res.message);
                                        
                     document.getElementById("msgemail").innerHTML="<font color='red'>Email ou CPF ja cadastrado </font>";
                }
            } 
   
            });
        } else{

          alert( "Verifique os campos");
         }


    
   });
   


