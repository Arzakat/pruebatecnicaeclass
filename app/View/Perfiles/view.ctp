<div class="perfiles view">
<h2><?php echo __('Perfile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($perfile['Perfile']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Perfile'), array('action' => 'edit', $perfile['Perfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Perfile'), array('action' => 'delete', $perfile['Perfile']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $perfile['Perfile']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Perfiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perfile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios Perfiles'), array('controller' => 'usuarios_perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuarios Perfile'), array('controller' => 'usuarios_perfiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Usuarios Perfiles'); ?></h3>
	<?php if (!empty($perfile['UsuariosPerfile'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Id Usuario'); ?></th>
		<th><?php echo __('Id Perfil'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($perfile['UsuariosPerfile'] as $usuariosPerfile): ?>
		<tr>
			<td><?php echo $usuariosPerfile['id']; ?></td>
			<td><?php echo $usuariosPerfile['id_usuario']; ?></td>
			<td><?php echo $usuariosPerfile['id_perfil']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'usuarios_perfiles', 'action' => 'view', $usuariosPerfile['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'usuarios_perfiles', 'action' => 'edit', $usuariosPerfile['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'usuarios_perfiles', 'action' => 'delete', $usuariosPerfile['id']), array('confirm' => __('Are you sure you want to delete # %s?', $usuariosPerfile['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Usuarios Perfile'), array('controller' => 'usuarios_perfiles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
