<div class="tiposTelefonos index">
	<h2><?php echo __('Tipos Teléfono'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tiposTelefonos as $tiposTelefono): ?>
	<tr>
		<td><?php echo h($tiposTelefono['TiposTelefono']['id']); ?>&nbsp;</td>
		<td><?php echo h($tiposTelefono['TiposTelefono']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $tiposTelefono['TiposTelefono']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $tiposTelefono['TiposTelefono']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $tiposTelefono['TiposTelefono']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $tiposTelefono['TiposTelefono']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Tipos Teléfono'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Teléfonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Teléfono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
