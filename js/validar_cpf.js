function validacaoCpf(field) {
var cpf = field.value;
var strCPF = cpf.replace(/[\s.-]*/igm, '')

var Soma;
var Resto;
Soma = 0;
if (strCPF == "00000000000") {
document.getElementById("msgcpf").innerHTML="<font color='red'>CPF inválido </font>";
 document.getElementById("ok").value = "";
};

  for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
  Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) ){
document.getElementById("msgcpf").innerHTML="<font color='red'>CPF inválido </font>";
 document.getElementById("ok").value = "";
};

  Soma = 0;
    for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;

    if ((Resto == 10) || (Resto == 11))  Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) ) {
document.getElementById("msgcpf").innerHTML="<font color='red'>CPF inválido </font>";
 document.getElementById("ok").value = "";
}else {
  document.getElementById("msgcpf").innerHTML="CPF válido";
  document.getElementById("ok").value = "true";

 }
    ;
    

    
 

}
