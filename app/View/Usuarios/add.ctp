<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->hidden('id_persona');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>