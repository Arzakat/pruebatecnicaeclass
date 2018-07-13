<div class="telefonos view">
<h2><?php echo __('Teléfono'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Pais'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['codigo_pais']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Area'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['codigo_area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Tipo Telefono'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['id_tipo_telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Persona'); ?></dt>
		<dd>
			<?php echo h($telefono['Telefono']['id_persona']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Teléfono'), array('action' => 'edit', $telefono['Telefono']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Teléfono'), array('action' => 'delete', $telefono['Telefono']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $telefono['Telefono']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Teléfonos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Teléfono'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Tipos Teléfono'), array('controller' => 'tipos_telefonos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Tipos Teléfono'), array('controller' => 'tipos_telefonos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Personas'); ?></h3>
	<?php if (!empty($telefono['Persona'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $telefono['Persona']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
	<?php echo $telefono['Persona']['nombre']; ?>
&nbsp;</dd>
		<dt><?php echo __('Id Documento'); ?></dt>
		<dd>
	<?php echo $telefono['Persona']['id_documento']; ?>
&nbsp;</dd>
		<dt><?php echo __('Numero Documento'); ?></dt>
		<dd>
	<?php echo $telefono['Persona']['numero_documento']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellido Paterno'); ?></dt>
		<dd>
	<?php echo $telefono['Persona']['apellido_paterno']; ?>
&nbsp;</dd>
		<dt><?php echo __('Apellido Materno'); ?></dt>
		<dd>
	<?php echo $telefono['Persona']['apellido_materno']; ?>
&nbsp;</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
	<?php echo $telefono['Persona']['fecha_nacimiento']; ?>
&nbsp;</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
	<?php echo $telefono['Persona']['email']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Editar Persona'), array('controller' => 'personas', 'action' => 'edit', $telefono['Persona']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php echo __('Related Tipos Telefonos'); ?></h3>
	<?php if (!empty($telefono['TiposTelefono'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $telefono['TiposTelefono']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
	<?php echo $telefono['TiposTelefono']['nombre']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Editar Tipos Teléfono'), array('controller' => 'tipos_telefonos', 'action' => 'edit', $telefono['TiposTelefono']['id'])); ?></li>
			</ul>
		</div>
	</div>
	