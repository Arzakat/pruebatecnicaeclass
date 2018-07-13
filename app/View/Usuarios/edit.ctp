<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->hidden('id_persona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(_('Eliminar'), array('action' => 'delete', $this->Form->value('Usuario.id')), array('confirm' => _('Estás seguro que quieres eliminar?', $this->Form->value('Usuario.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios Perfiles'), array('controller' => 'usuarios_perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuarios Perfiles'), array('controller' => 'usuarios_perfiles', 'action' => 'add')); ?> </li>
	</ul>
</div>