<div class="tiposTelefonos form">
<?php echo $this->Form->create('TiposTelefono'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipos Telefono'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Tipos Telefonos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
