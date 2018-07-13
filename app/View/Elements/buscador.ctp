<div class="actions">
	<h2><?php echo __('Buscador'); ?></h2>
	<?php echo $this->Form->create('Buscador', array(
		'url' => array(
			'controller' => 'personas',
			'action' => 'buscador'
		)
	)); ?>
		<fieldset>
			<p><?php echo __('Escribe tus criterios de búsqueda para comenzar a buscar en el listado de personas.'); ?></p>
		<?php
			echo $this->Form->input('nombre');
			echo $this->Form->input('apellido_paterno');
			echo $this->Form->input('apellido_materno');
			echo $this->Form->input('email');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Buscar')); ?>
</div>