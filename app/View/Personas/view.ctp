<div class="personas view">
<h2><?php echo __('Persona'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Documento'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id_documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Documento'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['numero_documento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellido_paterno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellido_materno']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Persona'), array('action' => 'edit', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Persona'), array('action' => 'delete', $persona['Persona']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $persona['Persona']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('controller' => 'direcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Dirección'), array('controller' => 'direcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Teléfonos'), array('controller' => 'telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Teléfono'), array('controller' => 'telefonos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Direcciones'); ?></h3>
	<?php if (!empty($persona['Direccione'])): ?>
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
	<?php foreach ($persona['Direccione'] as $direccione): ?>
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
<div class="related">
	<h3><?php echo __('Related Telefonos'); ?></h3>
	<?php if (!empty($persona['Telefono'])): ?>
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
	<?php foreach ($persona['Telefono'] as $telefono): ?>
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
<div class="related">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($persona['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Id Persona'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['username']; ?></td>
			<td><?php echo $usuario['password']; ?></td>
			<td><?php echo $usuario['id_persona']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $usuario['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
