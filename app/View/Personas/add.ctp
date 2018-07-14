<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Persona'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido_paterno');
		echo $this->Form->input('apellido_materno');
		echo $this->Form->input('id_documento', array('label' => __('Tipo Documento'), 'type' => 'select', 'options' => $tipos_documentos));
		echo $this->Form->input('numero_documento');
		echo $this->Form->input('fecha_nacimiento', array(
		    'label' => 'Fecha de Nacimiento',
		    'dateFormat' => 'DMY',
		    'minYear' => date('Y') - 50,
		    'maxYear' => date('Y') - 18,
		));
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
	<div class="actions">
		<?php echo $this->Html->link(__('Volver'), array('controller' => 'personas', 'action' => 'index')); ?>
	</div>
</div>