<?php echo $this->element('buscador'); ?>

<div class="personas index">
	<h2><?php echo __('Personas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_documento'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($personas as $persona): ?>
	<tr>
	    <td><?php echo h($persona['Persona']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($persona['Persona']['nombre']. ' '.$persona['Persona']['apellido_paterno']. ' '.$persona['Persona']['apellido_materno'], array('action' => 'view', $persona['Persona']['id'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($persona['Persona']['numero_documento'], array('action' => 'view', $persona['Persona']['id'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($persona['Persona']['fecha_nacimiento'], array('action' => 'view', $persona['Persona']['id'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($persona['Persona']['email'], array('action' => 'view', $persona['Persona']['id'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('user'), array('action' => 'usuarios_persona', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $persona['Persona']['id'])); ?>
			<?php echo $this->Form->postLink(_('Delete'), array('action' => 'delete', $persona['Persona']['id']), array('confirm' => _('Are you sure you want to delete # %s?', $persona['Persona']['id']))); ?>
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