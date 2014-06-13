<div class="comissarios form">
<?php echo $this->Form->create('Comissario'); ?>
	<fieldset>
		<legend><?php echo __('Edit Comissario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('evento_id');
		echo $this->Form->input('usuario_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comissario.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Comissario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Comissarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
