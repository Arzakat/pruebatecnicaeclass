<div class="direcciones form">
<?php echo $this->Form->create('Direccione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Direcciones'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('direccion');
		echo $this->Form->input('id_pais', array('label' => __('País'), 'type' => 'select', 'options' => $paises));
		echo $this->Form->input('id_region', array('label' => __('Región'), 'type' => 'select', 'options' => $regiones));
		echo $this->Form->input('id_comuna', array('label' => __('Comuna'), 'type' => 'select', 'options' => $comunas));
	?>
	</fieldset>
	<p><?php echo __('Para seleccionar los campos de comuna y región, favor guardar.'); ?></p>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $this->Form->value('Direccione.id')), array('confirm' => __('Estás seguro que quieres eliminar?', $this->Form->value('Direccione.id')))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Dirección'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
