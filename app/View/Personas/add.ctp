<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Add Persona'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('id_documento');
		echo $this->Form->input('numero_documento');
		echo $this->Form->input('apellido_paterno');
		echo $this->Form->input('apellido_materno');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Direcciones'), array('controller' => 'direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direccione'), array('controller' => 'direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
