<div class="paises form">
<?php echo $this->Form->create('Paise'); ?>
	<fieldset>
		<legend><?php echo __('Editar Paises'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Paise.id')), array('confirm' => __('Estás seguro que quieres eliminar?', $this->Form->value('Paise.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Paises'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('controller' => 'direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Dirección'), array('controller' => 'direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
