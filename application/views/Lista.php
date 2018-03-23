        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Horário</th>
                    <th>Ação</th>
                </tr>
            </thead>
			<?php
				
				$titulo_modal = "'Editar Compromisso'";
				foreach($compromissos as $compromisso){
					echo '<tr>';
						echo '<td>'.$compromisso->Id.'</td>';
						echo '<td>'.$compromisso->Titulo.'</td>';
						echo '<td>'.$compromisso->Data_Compromisso.'|'.$compromisso->Hora_Compromisso.'</td>';
						echo '<td>
								<button onclick="activeModal('.$titulo_modal.','.$compromisso->Id.')">Editar</button> 
								<button onclick="verificacao_del('.$compromisso->Id.')" title="Apagar produtos" title="Apagar produtos">Apagar</button>
								</td>';
					echo '</tr>';
					$ultimo_registro = $compromisso->Id;	
				}
			?>
		</table>
		<script>
			ultimo_registro = <?php echo $ultimo_registro;?>
		</script>

