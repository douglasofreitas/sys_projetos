<div class="empresaConfigs index">
	<h2><?php echo __('Empresa Configs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('empresa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dias_chamado_vencimento'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_username'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_password'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_host'); ?></th>
			<th><?php echo $this->Paginator->sort('mail_tsl'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($empresaConfigs as $empresaConfig): ?>
	<tr>
		<td><?php echo h($empresaConfig['EmpresaConfig']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresaConfig['Empresa']['id'], array('controller' => 'empresas', 'action' => 'view', $empresaConfig['Empresa']['id'])); ?>
		</td>
		<td><?php echo h($empresaConfig['EmpresaConfig']['dias_chamado_vencimento']); ?>&nbsp;</td>
		<td><?php echo h($empresaConfig['EmpresaConfig']['created']); ?>&nbsp;</td>
		<td><?php echo h($empresaConfig['EmpresaConfig']['modified']); ?>&nbsp;</td>
		<td><?php echo h($empresaConfig['EmpresaConfig']['mail_username']); ?>&nbsp;</td>
		<td><?php echo h($empresaConfig['EmpresaConfig']['mail_password']); ?>&nbsp;</td>
		<td><?php echo h($empresaConfig['EmpresaConfig']['mail_host']); ?>&nbsp;</td>
		<td><?php echo h($empresaConfig['EmpresaConfig']['mail_tsl']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empresaConfig['EmpresaConfig']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empresaConfig['EmpresaConfig']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empresaConfig['EmpresaConfig']['id']), null, __('Are you sure you want to delete # %s?', $empresaConfig['EmpresaConfig']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Empresa Config'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
