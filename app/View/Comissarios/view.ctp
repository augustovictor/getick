<div class="comissarios view">
<h2><?php  echo __('Comissario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comissario['Comissario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comissario['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $comissario['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($comissario['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $comissario['Usuario']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comissario'), array('action' => 'edit', $comissario['Comissario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comissario'), array('action' => 'delete', $comissario['Comissario']['id']), null, __('Are you sure you want to delete # %s?', $comissario['Comissario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comissarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comissario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
