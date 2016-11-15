<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/Bootstrap/css/bootstrap.css"/>	
</head>
<body>
	<?php echo form_open('pessoas/atualizar', 'id="form-pessoas"'); ?>
 
	<input type="hidden" name="id" value="<?php echo $dados_pessoa[0]->id; ?>"/>
 
 <h1>Atualizar Contato</h1><br/>
 <div class="form-group">
	<label for="exampleInputEmail1">Nome:</label><br/>
	<input class="form-control" type="text" name="nome" value="<?php echo $dados_pessoa[0]->nome; ?>"/>
	<div class="error"><?php echo form_error('nome'); ?></div>
 </div>
 <div class="form-group">
	<label for="exampleInputEmail1">Telefone:</label><br/>
	<input class="form-control" type="text" name="telefone" value="<?php echo $dados_pessoa[0]->telefone; ?>"/>
	<div class="error"><?php echo form_error('telefone'); ?></div>
 </div>
	<input class="btn btn-warning" type="submit" name="atualizar" value="Atualizar" />

	<?php echo form_close(); ?>
</body>
</html>