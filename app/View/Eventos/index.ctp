<div class="eventos index">
	<h2><?php echo __('Eventos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('visible'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('path'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('atracoes'); ?></th>
			<th><?php echo $this->Paginator->sort('local'); ?></th>
			<th><?php echo $this->Paginator->sort('criado_em'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($eventos as $evento): ?>
	<tr>
		<td><?php echo h($evento['Evento']['id']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['visible']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['path']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['data']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['atracoes']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['local']); ?>&nbsp;</td>
		<td><?php echo h($evento['Evento']['criado_em']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evento['Evento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evento['Evento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evento['Evento']['id']), null, __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comissarios'), array('controller' => 'comissarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comissario'), array('controller' => 'comissarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingressos'), array('controller' => 'ingressos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingresso'), array('controller' => 'ingressos', 'action' => 'add')); ?> </li>
	</ul>
</div>
