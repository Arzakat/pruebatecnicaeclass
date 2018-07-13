<div class="tiposTelefonos form">
<?php echo $this->Form->create('TiposTelefono'); ?>
	<fieldset>
		<legend><?php echo __('Editar Tipos Teléfono'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('TiposTelefono.id')), array('confirm' => __('Estás seguro que quieres eliminar?', $this->Form->value('TiposTelefono.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Tipos Teléfono'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Teléfonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Teléfono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
