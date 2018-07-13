<div class="regiones form">
<?php echo $this->Form->create('Regione'); ?>
	<fieldset>
		<legend><?php echo __('Editar Regiones'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Regione.id')), array('confirm' => __('Estás seguro que quieres eliminar?', $this->Form->value('Regione.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Regiones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('controller' => 'direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Dirección'), array('controller' => 'direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
