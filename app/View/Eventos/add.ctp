<div class="eventos form">
<?php echo $this->Form->create('Evento'); ?>
	<fieldset>
		<legend><?php echo __('Add Evento'); ?></legend>
	<?php
		echo $this->Form->input('visible');
		echo $this->Form->input('titulo');
		echo $this->Form->input('path');
		echo $this->Form->input('data');
		echo $this->Form->input('atracoes');
		echo $this->Form->input('local');
		echo $this->Form->input('criado_em');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comissarios'), array('controller' => 'comissarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comissario'), array('controller' => 'comissarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingressos'), array('controller' => 'ingressos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingresso'), array('controller' => 'ingressos', 'action' => 'add')); ?> </li>
	</ul>
</div>
