/* JavaScript Document */
var result = "";
//Criar Array - Coleção

var ListaCursos = [] ;

function CarregarLista(obj){
	/* Se objeto for zero, salvar no array */
	/* Se objeto for um, listar os itens do array */
	
	result = document.getElementById('Resultado');
	
	if(obj == 0){
	var strCurso = document.getElementById('txtCurso').value;
    var strTurma = document.getElementById('txtTurma').value;
	
	ListaCursos.push({curso:strCurso,turma:strTurma});
	//serve para resetar os dados do campo cursos
	document.getElementById('frmCurso').reset();
	document.getElementById('txtCurso').focus();
//	alert(obj.value);
	}
	else{
		var strLista = "<ul>";
		//Através de um loop será efetuada a lista
		for(var i=0;i < ListaCursos.length;i++){
			strLista += "<li>" + ListaCursos[i].turma + ' - ' + ListaCursos[i].curso + "</li>";
		}
		strLista += "</ul>";
		result.innerHTML = strLista + '<input type="button" name="btnFechar" value="Fechar" onclick="FecharPopup()" />';
		document.getElementById('Resultado').style.display='block';
	}
}  

function FecharPopup(){
	document.getElementById('Resultado').style.display='none';
}

function CarregarPopup(obj){
	/*se o valor for 1 - esconder o formulário e carregar o Popup
	se o valor for 0 - fechar o Poup e carregar o formulário */
	result = document.getElementById('Resultado');
 
 var strNome = document.getElementById('txtNome').value;
 
	if (obj==0)
 {
	 
	 document.getElementById('frmContato').style.display='none';
	 document.getElementById('Resultado').style.display='block';
	
     //Se strNome é diferente de vazio//	
	 if(strNome !='')
	 { 
 
	 result.innerHTML = strNome + ', agradecemos o seu contato, em breve retornaremos.<input type="button" name="btnFechar" value="Fechar" onclick="CarregarPopup(1)" />';
	 }
	 
	else {
		 result.innerHTML = 'Favor preencha os campos.<input type="button" name="btnFechar" value="Fechar" onclick="CarregarPopup(1)" />';
		 
	 }
 }
	else {
	 document.getElementById('frmContato').reset();
	 document.getElementById('frmContato').style.display='block';
	 document.getElementById('Resultado').style.display='none';
 }
 
}