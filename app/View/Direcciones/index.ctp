<div class="direcciones index">
	<h2><?php echo __('Direcciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('id_comuna'); ?></th>
			<th><?php echo $this->Paginator->sort('id_pais'); ?></th>
			<th><?php echo $this->Paginator->sort('id_region'); ?></th>
			<th><?php echo $this->Paginator->sort('id_persona'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($direcciones as $direccione): ?>
	<tr>
		<td><?php echo h($direccione['Direccione']['id']); ?>&nbsp;</td>
		<td><?php echo h($direccione['Direccione']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($direccione['Direccione']['id_comuna']); ?>&nbsp;</td>
		<td><?php echo h($direccione['Direccione']['id_pais']); ?>&nbsp;</td>
		<td><?php echo h($direccione['Direccione']['id_region']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($direccione['Persona']['nombre'], array('controller' => 'personas', 'action' => 'view', $direccione['Persona']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $direccione['Direccione']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $direccione['Direccione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $direccione['Direccione']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $direccione['Direccione']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Dirección'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
