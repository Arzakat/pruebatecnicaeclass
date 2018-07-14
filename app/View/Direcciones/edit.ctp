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