<div class="direcciones view">
<h2><?php echo __('Direccione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($direccione['Direccione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($direccione['Direccione']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Comuna'); ?></dt>
		<dd>
			<?php echo h($direccione['Direccione']['id_comuna']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Pais'); ?></dt>
		<dd>
			<?php echo h($direccione['Direccione']['id_pais']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Region'); ?></dt>
		<dd>
			<?php echo h($direccione['Direccione']['id_region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Persona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($direccione['Persona']['nombre'], array('controller' => 'personas', 'action' => 'view', $direccione['Persona']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Dirección'), array('action' => 'edit', $direccione['Direccione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Dirección'), array('action' => 'delete', $direccione['Direccione']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $direccione['Direccione']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Direcciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Dirección'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
