<div class="usuariosPerfiles form">
<?php echo $this->Form->create('UsuariosPerfile'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuarios Perfiles'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_usuario');
		echo $this->Form->input('id_perfil');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('UsuariosPerfile.id')), array('confirm' => __('Estás seguro que quieres eliminar?', $this->Form->value('UsuariosPerfile.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios Perfiles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Perfiles'), array('controller' => 'perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Perfiles'), array('controller' => 'perfiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
