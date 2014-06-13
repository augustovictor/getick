<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('password');
		echo $this->Form->input('role');
		echo $this->Form->input('telefone');
		echo $this->Form->input('endereco');
		echo $this->Form->input('email');
		echo $this->Form->input('criado_em');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comissarios'), array('controller' => 'comissarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comissario'), array('controller' => 'comissarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingressos'), array('controller' => 'ingressos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingresso'), array('controller' => 'ingressos', 'action' => 'add')); ?> </li>
	</ul>
</div>
