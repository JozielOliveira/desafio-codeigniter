// Quando o usuario clicar em Novo compromisso, abre o modal 
function activeModal(titulo_modal, id, data) {

	
	
	if(titulo_modal != "Editar Compromisso"){
		document.getElementById('id_compromisso').value = ultimo_registro + 1
		document.getElementById('Modal_add').style.display = "block"
		
	}else{
		document.getElementById('id_compromisso1').value = id
		document.getElementById('Modal_update').style.display = "block"
	}
}

// Quando o usuario clicar "Voltar", fecha o modal
function close_modal_add() {
	document.getElementById('Modal_add').style.display = "none"
}
function close_modal_up() {
	document.getElementById('Modal_update').style.display = "none"
}

// Funcao de confirmacao de deletar
function verificacao_del(id){

	document.getElementById('id_delete').innerHTML = id
	document.getElementById('Modal_delete').style.display = "block"

}
function result_del(res){

	let id = document.getElementById('id_delete').innerHTML

	if(res)
		location.href = '/desafio-codeigniter/index.php/compromisso/delete_compromisso/'+id
	else
		document.getElementById('Modal_delete').style.display = "none"
}





