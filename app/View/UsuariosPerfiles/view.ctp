<div class="usuariosPerfiles view">
<h2><?php echo __('Usuarios Perfiles'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuariosPerfile['UsuariosPerfile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Usuario'); ?></dt>
		<dd>
			<?php echo h($usuariosPerfile['UsuariosPerfile']['id_usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Perfil'); ?></dt>
		<dd>
			<?php echo h($usuariosPerfile['UsuariosPerfile']['id_perfil']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuarios Perfiles'), array('action' => 'edit', $usuariosPerfile['UsuariosPerfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Usuarios Perfiles'), array('action' => 'delete', $usuariosPerfile['UsuariosPerfile']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $usuariosPerfile['UsuariosPerfile']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios Perfiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuarios Perfiles'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Perfiles'), array('controller' => 'perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Perfiles'), array('controller' => 'perfiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($usuariosPerfile['usuario'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $usuariosPerfile['usuario']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
	<?php echo $usuariosPerfile['usuario']['username']; ?>
&nbsp;</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
	<?php echo $usuariosPerfile['usuario']['password']; ?>
&nbsp;</dd>
		<dt><?php echo __('Id Persona'); ?></dt>
		<dd>
	<?php echo $usuariosPerfile['usuario']['id_persona']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Editar Usuario'), array('controller' => 'usuarios', 'action' => 'edit', $usuariosPerfile['usuario']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Perfiles'); ?></h3>
	<?php if (!empty($usuariosPerfile['Perfile'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $usuariosPerfile['Perfile']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
	<?php echo $usuariosPerfile['Perfile']['nombre']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Editar Perfiles'), array('controller' => 'perfiles', 'action' => 'edit', $usuariosPerfile['Perfile']['id'])); ?></li>
			</ul>
		</div>
	</div>
	