<div class="comunas index">
	<h2><?php echo __('Comunas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($comunas as $comuna): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($comuna['Regione']['nombre'], array('controller' => 'regiones', 'action' => 'view', $comuna['Regione']['id'])); ?>
		</td>
		<td><?php echo h($comuna['Comuna']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $comuna['Comuna']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $comuna['Comuna']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $comuna['Comuna']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $comuna['Comuna']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Comuna'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Región'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
