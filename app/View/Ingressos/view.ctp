<div class="ingressos view">
<h2><?php  echo __('Ingresso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ingresso['Ingresso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Evento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ingresso['Evento']['id'], array('controller' => 'eventos', 'action' => 'view', $ingresso['Evento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ingresso['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $ingresso['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lote'); ?></dt>
		<dd>
			<?php echo h($ingresso['Ingresso']['lote']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($ingresso['Ingresso']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criado Em'); ?></dt>
		<dd>
			<?php echo h($ingresso['Ingresso']['criado_em']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendido Em'); ?></dt>
		<dd>
			<?php echo h($ingresso['Ingresso']['vendido_em']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comissario'); ?></dt>
		<dd>
			<?php echo h($ingresso['Ingresso']['comissario']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ingresso'), array('action' => 'edit', $ingresso['Ingresso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ingresso'), array('action' => 'delete', $ingresso['Ingresso']['id']), null, __('Are you sure you want to delete # %s?', $ingresso['Ingresso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingressos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingresso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('controller' => 'eventos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('controller' => 'eventos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Compras'); ?></h3>
	<?php if (!empty($ingresso['Compra'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Ingresso Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ingresso['Compra'] as $compra): ?>
		<tr>
			<td><?php echo $compra['id']; ?></td>
			<td><?php echo $compra['usuario_id']; ?></td>
			<td><?php echo $compra['ingresso_id']; ?></td>
			<td><?php echo $compra['data']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'compras', 'action' => 'view', $compra['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'compras', 'action' => 'edit', $compra['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'compras', 'action' => 'delete', $compra['id']), null, __('Are you sure you want to delete # %s?', $compra['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
