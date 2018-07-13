<div class="usuarios index">
	<h2><?php echo __('Listado de usuarios', $persona['Persona']['nombre'].' '.$persona['Persona']['apellido_paterno']  ); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('id_persona'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php 
		if(isset($persona['Usuario'])):
			foreach ($persona['Usuario'] as $usuario): ?>
				<tr>
					<td><?php echo h($usuario['id']); ?>&nbsp;</td>
					<td><?php echo h($usuario['username']); ?>&nbsp;</td>
					<td><?php echo h($usuario['password']); ?>&nbsp;</td>
					<td><?php echo h($usuario['id_persona']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Edit'), array('controller' =>'usuarios', 'action' => 'edit', $usuario['id'])); ?>
						<?php echo $this->Form->postLink(_('Delete'), array('controller' =>'usuarios', 'action' => 'delete', $usuario['id'], $usuario['id_persona'] ), array('confirm' => __('Estás seguro que deseas eliminar el usuario?', $usuario['username']))); ?>
					</td>
				</tr>
			<?php 
			endforeach; 
		endif;?>
	</tbody>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Usuario'), array('controller' => 'usuarios', 'action' => 'add', $persona['Persona']['id'])); ?></li>
	</ul>
</div>