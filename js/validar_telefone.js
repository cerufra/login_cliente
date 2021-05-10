function validacaoTelefone(field) {
var telefone = field.value;

var regex = new RegExp('^\(?[1-9]{2}\)? ?[0-9]{3}\-?[0-9]{4}$');


if (regex.test(telefone)) { 
    document.getElementById("msgtelefone").innerHTML="Telefone válido";
 }
else {
      document.getElementById("msgtelefone").innerHTML="<font color='red'>Telefone inválido </font>";
}

}
