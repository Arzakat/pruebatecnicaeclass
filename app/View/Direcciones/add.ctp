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
<?php echo $this->Form->end(__('Guardar')); ?>
</div>