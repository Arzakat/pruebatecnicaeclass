<div class="direcciones form">
<?php echo $this->Form->create('Direccione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Direccione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('direccion');
		echo $this->Form->input('id_comuna');
		echo $this->Form->input('id_pais');
		echo $this->Form->input('id_region');
		echo $this->Form->input('id_persona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Direccione.id')), array('confirm' => __('Estás seguro que quieres eliminar?', $this->Form->value('Direccione.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Dirección'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
