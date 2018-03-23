<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
	<?php require_once('Lista.php'); ?>

    <!-- Modal Novo Compromisso-->
	<?php require_once('Modal_add.php'); ?>
	<!-- Modal Edita Compromisso-->
	<?php require_once('Modal_update.php'); ?>
	<!-- Modal Deletar Compromisso-->
	<?php require_once('Modal_delete.php'); ?>

</body>
<script src="<?php echo base_url('assets/js/modal.js')?>"></script>
</html>
