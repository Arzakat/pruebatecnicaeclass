<div class="tiposDocumentos form">
<?php echo $this->Form->create('TiposDocumento'); ?>
	<fieldset>
		<legend><?php echo __('Editar Tipos Documento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('TiposDocumento.id')), array('confirm' => __('Estás seguro que quieres eliminar?', $this->Form->value('TiposDocumento.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipos Documento'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
