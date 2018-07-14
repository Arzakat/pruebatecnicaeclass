<?php echo $this->element('buscador'); ?>

<div class="personas index">
	<h2><?php echo __('Personas'); ?></h2>
	<div class="actions">
		<?php echo $this->Html->link(__('Crear'), array('controller' => 'personas', 'action' => 'add'), array('class' => '')); ?>
	</div>
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
	<?php foreach ($personas as $persona):
		$estiloSinUsuarios = "";
		if(!count($persona['Usuario'])){
			$estiloSinUsuarios = ' style="background-color: grey;"';
		}

		?>
	<tr<?php echo $estiloSinUsuarios; ?>>
	    <td><?php echo h($persona['Persona']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($persona['Persona']['nombre']. ' '.$persona['Persona']['apellido_paterno']. ' '.$persona['Persona']['apellido_materno'], array('action' => 'view', $persona['Persona']['id'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($persona['Persona']['numero_documento'], array('action' => 'view', $persona['Persona']['id'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($persona['Persona']['fecha_nacimiento'], array('action' => 'view', $persona['Persona']['id'])); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($persona['Persona']['email'], array('action' => 'view', $persona['Persona']['id'])); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Usuarios'), array('action' => 'usuarios_persona', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Direcciones'), array('action' => 'direcciones_persona', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Telefonos'), array('action' => 'telefonos_persona', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $persona['Persona']['id'])); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $persona['Persona']['id']), array('confirm' => __('¿Estás seguro que deseas eliminar esta persona?', $persona['Persona']['id']))); ?>
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