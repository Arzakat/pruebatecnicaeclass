<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Persona'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id_persona']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $usuario['Usuario']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios Perfiles'), array('controller' => 'usuarios_perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuarios Perfiles'), array('controller' => 'usuarios_perfiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Personas'); ?></h3>
	<?php if (!empty($usuario['Persona'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $usuario['Persona']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
	<?php echo $usuario['Persona']['nombre']; ?>
&nbsp;</dd>
		<dt><?php echo __('Id Documento'); ?></dt>
		<dd>
	<?php echo $usuario['Persona']['id_documento']; ?>
&nbsp;</dd>
		<dt><?php echo __('Numero Documento'); ?></dt>
		<dd>
	<?php echo $usuario['Persona']['numero_documento']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
	<?php echo $usuario['Persona']['apellido_paterno']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
	<?php echo $usuario['Persona']['apellido_materno']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
	<?php echo $usuario['Persona']['fecha_nacimiento']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $usuario['Persona']['email']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Editar Persona'), array('controller' => 'personas', 'action' => 'edit', $usuario['Persona']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Usuarios Perfiles'); ?></h3>
	<?php if (!empty($usuario['UsuariosPerfile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id Usuario'); ?></th>
		<th><?php echo __('Id Perfil'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['UsuariosPerfile'] as $usuariosPerfile): ?>
		<tr>
			<td><?php echo $usuariosPerfile['id']; ?></td>
			<td><?php echo $usuariosPerfile['id_usuario']; ?></td>
			<td><?php echo $usuariosPerfile['id_perfil']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'usuarios_perfiles', 'action' => 'view', $usuariosPerfile['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'usuarios_perfiles', 'action' => 'edit', $usuariosPerfile['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'usuarios_perfiles', 'action' => 'delete', $usuariosPerfile['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $usuariosPerfile['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Usuarios Perfiles'), array('controller' => 'usuarios_perfiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
