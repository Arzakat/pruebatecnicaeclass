<div class="usuariosPerfiles index">
	<h2><?php echo __('Usuarios Perfiles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_usuario'); ?></th>
			<th><?php echo $this->Paginator->sort('id_perfil'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuariosPerfiles as $usuariosPerfile): ?>
	<tr>
		<td><?php echo h($usuariosPerfile['UsuariosPerfile']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuariosPerfile['UsuariosPerfile']['id_usuario']); ?>&nbsp;</td>
		<td><?php echo h($usuariosPerfile['UsuariosPerfile']['id_perfil']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $usuariosPerfile['UsuariosPerfile']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $usuariosPerfile['UsuariosPerfile']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $usuariosPerfile['UsuariosPerfile']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $usuariosPerfile['UsuariosPerfile']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Usuarios Perfiles'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Perfiles'), array('controller' => 'perfiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Perfiles'), array('controller' => 'perfiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
