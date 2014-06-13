<div class="usuarios view">
<h2><?php  echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Endereco'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['endereco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Criado Em'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['criado_em']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comissarios'), array('controller' => 'comissarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comissario'), array('controller' => 'comissarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Compras'), array('controller' => 'compras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Compra'), array('controller' => 'compras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingressos'), array('controller' => 'ingressos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingresso'), array('controller' => 'ingressos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comissarios'); ?></h3>
	<?php if (!empty($usuario['Comissario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Evento Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($usuario['Comissario'] as $comissario): ?>
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
	<h3><?php echo __('Related Compras'); ?></h3>
	<?php if (!empty($usuario['Compra'])): ?>
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
		foreach ($usuario['Compra'] as $compra): ?>
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
<div class="related">
	<h3><?php echo __('Related Ingressos'); ?></h3>
	<?php if (!empty($usuario['Ingresso'])): ?>
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
		foreach ($usuario['Ingresso'] as $ingresso): ?>
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
