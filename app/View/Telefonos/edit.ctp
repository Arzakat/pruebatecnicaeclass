<div class="telefonos form">
<?php echo $this->Form->create('Telefono'); ?>
	<fieldset>
		<legend><?php echo __('Edit Telefono'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero');
		echo $this->Form->input('codigo_pais');
		echo $this->Form->input('codigo_area');
		echo $this->Form->input('id_tipo_telefono');
		echo $this->Form->input('id_persona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Telefono.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Telefono.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos Telefonos'), array('controller' => 'tipos_telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipos Telefono'), array('controller' => 'tipos_telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
