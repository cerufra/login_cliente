function validacaoTelefone(field) {
var telefone = field.value;

var regex = new RegExp('^\(?[1-9]{2}\)? ?[0-9]{3}\-?[0-9]{4}$');


if (regex.test(telefone)) { 
    document.getElementById("msgtelefone").innerHTML="Telefone v�lido";
 }
else {
      document.getElementById("msgtelefone").innerHTML="<font color='red'>Telefone inv�lido </font>";
}

}
