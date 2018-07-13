<div class="personas index">
	<h2><?php echo __('Personas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('id_documento'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_documento'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_paterno'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido_materno'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($personas as $persona): ?>
	<tr>
		<td><?php echo h($persona['Persona']['id']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['id_documento']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['numero_documento']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apellido_paterno']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['apellido_materno']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['fecha_nacimiento']); ?>&nbsp;</td>
		<td><?php echo h($persona['Persona']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $persona['Persona']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $persona['Persona']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $persona['Persona']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Direcciones'), array('controller' => 'direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direccione'), array('controller' => 'direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Telefonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telefono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
