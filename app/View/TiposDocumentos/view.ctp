<div class="tiposDocumentos view">
<h2><?php echo __('Tipos Documento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tiposDocumento['TiposDocumento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($tiposDocumento['TiposDocumento']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Tipos Documento'), array('action' => 'edit', $tiposDocumento['TiposDocumento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Tipos Documento'), array('action' => 'delete', $tiposDocumento['TiposDocumento']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $tiposDocumento['TiposDocumento']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos Documento'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Tipos Documento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Documentos'); ?></h3>
	<?php if (!empty($tiposDocumento['Persona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Id Documento'); ?></th>
		<th><?php echo __('Numero Documento'); ?></th>
		<th><?php echo __('Apellido Paterno'); ?></th>
		<th><?php echo __('Apellido Materno'); ?></th>
		<th><?php echo __('Fecha Nacimiento'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tiposDocumento['Persona'] as $persona): ?>
		<tr>
			<td><?php echo $persona['id']; ?></td>
			<td><?php echo $persona['nombre']; ?></td>
			<td><?php echo $persona['id_documento']; ?></td>
			<td><?php echo $persona['numero_documento']; ?></td>
			<td><?php echo $persona['apellido_paterno']; ?></td>
			<td><?php echo $persona['apellido_materno']; ?></td>
			<td><?php echo $persona['fecha_nacimiento']; ?></td>
			<td><?php echo $persona['email']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'personas', 'action' => 'view', $persona['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'personas', 'action' => 'edit', $persona['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'personas', 'action' => 'delete', $persona['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $persona['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
