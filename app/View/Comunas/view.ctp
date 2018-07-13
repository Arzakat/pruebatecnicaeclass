<div class="comunas view">
<h2><?php echo __('Comuna'); ?></h2>
	<dl>
		<dt><?php echo __('Regione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comuna['Regione']['nombre'], array('controller' => 'regiones', 'action' => 'view', $comuna['Regione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($comuna['Comuna']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Comuna'), array('action' => 'edit', $comuna['Comuna']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Comuna'), array('action' => 'delete', $comuna['Comuna']['id']), array('confirm' => __('Estás seguro que quieres eliminar?', $comuna['Comuna']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Comunas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Comuna'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Región'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
