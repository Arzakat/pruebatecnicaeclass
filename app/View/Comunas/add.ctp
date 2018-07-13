<div class="comunas form">
<?php echo $this->Form->create('Comuna'); ?>
	<fieldset>
		<legend><?php echo __('Add Comuna'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Comunas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Región'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
