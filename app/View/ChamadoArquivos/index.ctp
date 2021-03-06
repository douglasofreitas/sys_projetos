<div class="chamadoArquivos index">
	<h2><?php echo __('Chamado Arquivos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('chamado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('arquivo_nome'); ?></th>
			<th><?php echo $this->Paginator->sort('arquivo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($chamadoArquivos as $chamadoArquivo): ?>
	<tr>
		<td><?php echo h($chamadoArquivo['ChamadoArquivo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($chamadoArquivo['Chamado']['id'], array('controller' => 'chamados', 'action' => 'view', $chamadoArquivo['Chamado']['id'])); ?>
		</td>
		<td><?php echo h($chamadoArquivo['ChamadoArquivo']['nome']); ?>&nbsp;</td>
		<td><?php echo h($chamadoArquivo['ChamadoArquivo']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($chamadoArquivo['ChamadoArquivo']['arquivo_nome']); ?>&nbsp;</td>
		<td><?php echo h($chamadoArquivo['ChamadoArquivo']['arquivo']); ?>&nbsp;</td>
		<td><?php echo h($chamadoArquivo['ChamadoArquivo']['created']); ?>&nbsp;</td>
		<td><?php echo h($chamadoArquivo['ChamadoArquivo']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $chamadoArquivo['ChamadoArquivo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $chamadoArquivo['ChamadoArquivo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $chamadoArquivo['ChamadoArquivo']['id']), null, __('Are you sure you want to delete # %s?', $chamadoArquivo['ChamadoArquivo']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Chamado Arquivo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Chamados'), array('controller' => 'chamados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chamado'), array('controller' => 'chamados', 'action' => 'add')); ?> </li>
	</ul>
</div>
