<div class="usuarios index">
	<h2><?php echo __('Listado de direcciones de %s', $persona['Persona']['nombre'].' '.$persona['Persona']['apellido_paterno']  );
	?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('comuna'); ?></th>
			<th><?php echo $this->Paginator->sort('region'); ?></th>
			<th><?php echo $this->Paginator->sort('pais'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<div class="actions">
		<?php echo $this->Html->link(__('Crear'), array('controller' => 'direcciones', 'action' => 'add', $persona['Persona']['id'])); ?>
	</div>
	</thead>
	<tbody>
	<?php 
		if(isset($persona['Direccione'])):
			foreach ($persona['Direccione'] as $direccion): ?>
				<tr>
					<td><?php echo h($direccion['id']); ?>&nbsp;</td>
					<td><?php echo h($direccion['direccion']); ?>&nbsp;</td>
					<td><?php echo h($direccion['Comuna']['nombre']); ?>&nbsp;</td>
					<td><?php echo h($direccion['Regione']['nombre']); ?>&nbsp;</td>
					<td><?php echo h($direccion['Paise']['nombre']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('Editar'), array('controller' =>'direcciones', 'action' => 'edit', $direccion['id'], $direccion['id_persona'])); ?>
						<?php echo $this->Form->postLink(__('Eliminar'), array('controller' =>'direcciones', 'action' => 'delete', $direccion['id'], $direccion['id_persona'] ), array('confirm' => __('Estás seguro que deseas eliminar la direccion %s?', $direccion['direccion']))); ?>
					</td>
				</tr>
			<?php 
			endforeach; 
		endif;?>
	</tbody>
	</table>
</div>