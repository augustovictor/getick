<div class="ingressos index">
	<h2><?php echo __('Ingressos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('evento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lote'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('criado_em'); ?></th>
			<th><?php echo $this->Paginator->sort('vendido_em'); ?></th>
			<th><?php echo $this->Paginator->sort('comissario'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($ingressos as $ingresso): ?>
	<tr>
		<td><?php echo h($ingresso['Ingresso']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ingresso['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $ingresso['Evento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ingresso['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $ingresso['Usuario']['id'])); ?>
		</td>
		<td><?php echo h($ingresso['Ingresso']['lote']); ?>&nbsp;</td>
		<td><?php echo h($ingresso['Ingresso']['valor']); ?>&nbsp;</td>
		<td><?php echo h($ingresso['Ingresso']['criado_em']); ?>&nbsp;</td>
		<td><?php echo h($ingresso['Ingresso']['vendido_em']); ?>&nbsp;</td>
		<td><?php echo h($ingresso['Ingresso']['comissario']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ingresso['Ingresso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ingresso['Ingresso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ingresso['Ingresso']['id']), null, __('Are you sure you want to delete # %s?', $ingresso['Ingresso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ingresso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>
