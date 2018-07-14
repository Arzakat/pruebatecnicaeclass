<div class="direcciones form">
<?php echo $this->Form->create('Direccione'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Direcciones'); ?></legend>
	<?php
		echo $this->Form->input('direccion');
		echo $this->Form->input('id_pais', array('label' => __('País'), 'type' => 'select', 'options' => $paises));
		echo $this->Form->input('id_region', array('label' => __('Región'), 'type' => 'select', 'options' => $regiones));
		echo $this->Form->input('id_comuna', array('label' => __('Comuna'), 'type' => 'select', 'options' => $comunas));
		echo $this->Form->hidden('id_persona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Direcciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
