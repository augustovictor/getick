<div class="eventos view">
<h2><?php  echo __('Evento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Path'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atracoes'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['atracoes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Local'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['local']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criado Em'); ?></dt>
		<dd>
			<?php echo h($evento['Evento']['criado_em']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evento'), array('action' => 'edit', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evento'), array('action' => 'delete', $evento['Evento']['id']), null, __('Are you sure you want to delete # %s?', $evento['Evento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eventos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comissarios'), array('controller' => 'comissarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comissario'), array('controller' => 'comissarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingressos'), array('controller' => 'ingressos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingresso'), array('controller' => 'ingressos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comissarios'); ?></h3>
	<?php if (!empty($evento['Comissario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['Comissario'] as $comissario): ?>
		<tr>
			<td><?php echo $comissario['id']; ?></td>
			<td><?php echo $comissario['evento_id']; ?></td>
			<td><?php echo $comissario['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comissarios', 'action' => 'view', $comissario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comissarios', 'action' => 'edit', $comissario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comissarios', 'action' => 'delete', $comissario['id']), null, __('Are you sure you want to delete # %s?', $comissario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comissario'), array('controller' => 'comissarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ingressos'); ?></h3>
	<?php if (!empty($evento['Ingresso'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Lote'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Criado Em'); ?></th>
		<th><?php echo __('Vendido Em'); ?></th>
		<th><?php echo __('Comissario'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($evento['Ingresso'] as $ingresso): ?>
		<tr>
			<td><?php echo $ingresso['id']; ?></td>
			<td><?php echo $ingresso['evento_id']; ?></td>
			<td><?php echo $ingresso['usuario_id']; ?></td>
			<td><?php echo $ingresso['lote']; ?></td>
			<td><?php echo $ingresso['valor']; ?></td>
			<td><?php echo $ingresso['criado_em']; ?></td>
			<td><?php echo $ingresso['vendido_em']; ?></td>
			<td><?php echo $ingresso['comissario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ingressos', 'action' => 'view', $ingresso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ingressos', 'action' => 'edit', $ingresso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ingressos', 'action' => 'delete', $ingresso['id']), null, __('Are you sure you want to delete # %s?', $ingresso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ingresso'), array('controller' => 'ingressos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
