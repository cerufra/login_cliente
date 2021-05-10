 $('#login').click(function(){
 var ok = true;
 var login_email= $('#email_login').val();
if (login_email == "") {
   document.getElementById("msglgemail").innerHTML="<font color='red'>O campo Email deve ser preenchido</font>";
    ok = false;
}
     
    var login_senha = $('#senha_login').val();	
                if (login_senha == "") {
   document.getElementById("msglgcpf").innerHTML="<font color='red'>O campo Senha deve ser preenchido</font>";

    ok = false;
}
         if(ok) {
               $.ajax({
                   type:"POST",
                    url:"./class/login.php",
	                  dataType:"json",
                   data:{login_email:login_email,login_senha:login_senha},
	                 success: res => {
                if(res.status == 200) {
                    alert(res.message);
                    window.location.href = "./layout/painel.php";
                } else {
                    alert(res.message);
                      window.location.href = "../index.php";
                }
            }
   
  });
    }


    
   });
   


