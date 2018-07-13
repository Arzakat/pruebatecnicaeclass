<div class="tiposTelefonos view">
<h2><?php echo __('Tipos Teléfono'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tiposTelefono['TiposTelefono']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tiposTelefono['TiposTelefono']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Tipos Teléfono'), array('action' => 'edit', $tiposTelefono['TiposTelefono']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Tipos Teléfono'), array('action' => 'delete', $tiposTelefono['TiposTelefono']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $tiposTelefono['TiposTelefono']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos Teléfonos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Tipos Teléfono'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Teléfonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Teléfono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Telefonos'); ?></h3>
	<?php if (!empty($tiposTelefono['Telefono'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Codigo Pais'); ?></th>
		<th><?php echo __('Codigo Area'); ?></th>
		<th><?php echo __('Id Tipo Telefono'); ?></th>
		<th><?php echo __('Id Persona'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tiposTelefono['Telefono'] as $telefono): ?>
		<tr>
			<td><?php echo $telefono['id']; ?></td>
			<td><?php echo $telefono['numero']; ?></td>
			<td><?php echo $telefono['codigo_pais']; ?></td>
			<td><?php echo $telefono['codigo_area']; ?></td>
			<td><?php echo $telefono['id_tipo_telefono']; ?></td>
			<td><?php echo $telefono['id_persona']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'telefonos', 'action' => 'view', $telefono['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'telefonos', 'action' => 'edit', $telefono['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'telefonos', 'action' => 'delete', $telefono['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $telefono['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Teléfono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
