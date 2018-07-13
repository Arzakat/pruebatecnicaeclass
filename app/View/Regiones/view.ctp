<div class="regiones view">
<h2><?php echo __('Regiones'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($regione['Regione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($regione['Regione']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Regiones'), array('action' => 'edit', $regione['Regione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Regiones'), array('action' => 'delete', $regione['Regione']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $regione['Regione']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Regiones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Región'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('controller' => 'direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Dirección'), array('controller' => 'direcciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Direcciones'); ?></h3>
	<?php if (!empty($regione['Direccione'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Id Comuna'); ?></th>
		<th><?php echo __('Id Pais'); ?></th>
		<th><?php echo __('Id Region'); ?></th>
		<th><?php echo __('Id Persona'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($regione['Direccione'] as $direccione): ?>
		<tr>
			<td><?php echo $direccione['id']; ?></td>
			<td><?php echo $direccione['direccion']; ?></td>
			<td><?php echo $direccione['id_comuna']; ?></td>
			<td><?php echo $direccione['id_pais']; ?></td>
			<td><?php echo $direccione['id_region']; ?></td>
			<td><?php echo $direccione['id_persona']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'direcciones', 'action' => 'view', $direccione['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'direcciones', 'action' => 'edit', $direccione['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'direcciones', 'action' => 'delete', $direccione['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $direccione['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Dirección'), array('controller' => 'direcciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
