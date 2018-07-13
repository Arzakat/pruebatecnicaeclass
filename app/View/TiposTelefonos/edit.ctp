<div class="tiposTelefonos form">
<?php echo $this->Form->create('TiposTelefono'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipos Telefono'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TiposTelefono.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('TiposTelefono.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipos Telefonos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
