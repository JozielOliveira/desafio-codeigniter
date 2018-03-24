<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    
    <title>Lista</title>
</head>
<body>
    <header>
		<form class="form" action="<?php echo base_url('index.php/Compromisso/search_date_time') ?>" name="form_add" method="post">
			<input name="date1" type="date">
			<button type="submit" class="buscar">Buscar</button>
		</form>
    <button class="novoCompromisso"  id="activeModal" onClick="activeModal('Novo Compromisso')">Novo Compromisso</button>
	</header>
	<!-- Tabela -->	
	<section>
	<?php 
		$ultimo_registro = 0;
	?>
	<script>
		var ultimo_registro = <?php echo $ultimo_registro;?>
	</script>
	<?php
		if($exist_compromisso == 1):
			require_once('Lista.php');
		else:
			echo "<h1>Adicione um compromisso</h1>";
		endif; 
		
	?>
	</section>

    <!-- Modal Novo Compromisso ou Atualizar-->
	<?php require_once('Modal_save.php'); ?>
	<!-- Modal Deletar Compromisso-->
	<?php require_once('Modal_delete.php'); ?>

</body>
<script src="<?php echo base_url('assets/js/modal.js')?>"></script>
</html>
