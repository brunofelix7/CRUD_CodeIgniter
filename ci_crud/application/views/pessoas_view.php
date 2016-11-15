<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilo.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/Bootstrap/css/bootstrap.css"/>
</head>
<body>
    <?php echo form_open('pessoas/inserir', 'id="form-pessoas"'); ?>
 
	<h1>Agenda Telefônica</h1><br/>
    <div class="form-group">
        <label for="exampleInputEmail1">Nome:</label><br/>
        <input class="form-control" type="text" name="nome" value="<?php echo set_value('nome'); ?>"/>
    </div>
        <div class="error"><?php echo form_error('nome'); ?></div>
    <div class="form-group">
        <label for="exampleInputEmail1">Telefone:</label><br/>
        <input class="form-control" type="text" name="telefone" value="<?php echo set_value('telefone'); ?>"/>
    </div>
        <div class="error"><?php echo form_error('telefone'); ?></div>
    <input class="btn btn-success" type="submit" name="cadastrar" value="Cadastrar" />
    <br/>
    <br/>
 
    <?php echo form_close(); ?>
    
    <!-- Lista as Pessoas Cadastradas -->
    <br/>
    <div id="grid-pessoas">
        <ul class="list-group">
        <?php foreach($pessoas as $pessoa): ?>
        <li class="list-group-item">
            <a title="Deletar" href="<?php echo base_url() . 'pessoas/deletar/' . $pessoa->id; ?>" onclick="return confirm('Confirma a exclusão deste registro?')">
                <img src="<?php echo base_url(); ?>assets/img/lixo.png" />
            </a>
            <span> - </span>
            <a title="Editar" href="<?php echo base_url() . 'pessoas/editar/' . $pessoa->id; ?>"><?php echo $pessoa->nome; ?></a>
            <span> - </span>
            <span><?php echo $pessoa->telefone; ?></span>
        </li>
        <?php endforeach ?>
        </ul>
    </div>
    <!-- Fim Lista -->
</body>
</html>