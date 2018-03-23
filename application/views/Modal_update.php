<div id="Modal_update" class="modal">
    <div class="modal-content">
	<form action="<?php echo base_url('index.php/Compromisso/save') ?>" name="form_add" method="post">
		  
			<div class="modal-header">
				<h2 id="titulo_modal">Editar Compromisso</h2>	
			</div>

			<div class="modal-body">
					<table>
							<tbody>
								<tr>
									<td>
									<h4>ID</h4>
									</td>
									<td colSpan="2"> 
										<input name="id" type="text" id="id_compromisso1" readonly="true">
									</td>
									<td></td>
								</tr>
								<tr>
									<td>
										<h4>Título</h4>
									</td>
									<td colSpan="2">
										<input id="title" name="title" type="text" required>
									</td>
									<td></td>
								</tr>
								<tr>
									<td>
										<h4>Data</h4>
									</td> 
									<td> 
										<input id="date" name="date" type="date" required>
									</td>
									<td>
										<input id="time" name="time" type="time" required>
									</td>
								</tr>
							</tbody>
					</table>
			</div>
			
			<div class="modal-footer">
					<button onClick="close_modal_up()" class="closeModal">Voltar</button>
					<button type="submit"class="saveModal">Salvar</button>
			</div>
		</form>
    </div>
</div>
