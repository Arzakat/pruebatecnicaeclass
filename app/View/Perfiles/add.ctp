<div class="perfiles form">
<?php echo $this->Form->create('Perfile'); ?>
	<fieldset>
		<legend><?php echo __('Add Perfile'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Perfiles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios Perfiles'), array('controller' => 'usuarios_perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios Perfile'), array('controller' => 'usuarios_perfiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
