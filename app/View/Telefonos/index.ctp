<div class="telefonos index">
	<h2><?php echo __('Teléfonos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_pais'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo_area'); ?></th>
			<th><?php echo $this->Paginator->sort('id_tipo_telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('id_persona'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($telefonos as $telefono): ?>
	<tr>
		<td><?php echo h($telefono['Telefono']['id']); ?>&nbsp;</td>
		<td><?php echo h($telefono['Telefono']['numero']); ?>&nbsp;</td>
		<td><?php echo h($telefono['Telefono']['codigo_pais']); ?>&nbsp;</td>
		<td><?php echo h($telefono['Telefono']['codigo_area']); ?>&nbsp;</td>
		<td><?php echo h($telefono['Telefono']['id_tipo_telefono']); ?>&nbsp;</td>
		<td><?php echo h($telefono['Telefono']['id_persona']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $telefono['Telefono']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $telefono['Telefono']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $telefono['Telefono']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $telefono['Telefono']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Teléfono'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos Teléfonos'), array('controller' => 'tipos_telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Tipos Teléfono'), array('controller' => 'tipos_telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
