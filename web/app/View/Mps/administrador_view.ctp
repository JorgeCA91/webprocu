<div class="mps view">
<h2><?php echo __('Mp'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mp['Mp']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($mp['Mp']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($mp['Mp']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mp['Region']['nombre'], array('controller' => 'regiones', 'action' => 'view', $mp['Region']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitud'); ?></dt>
		<dd>
			<?php echo h($mp['Mp']['longitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitud'); ?></dt>
		<dd>
			<?php echo h($mp['Mp']['latitud']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mp'), array('action' => 'edit', $mp['Mp']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mp'), array('action' => 'delete', $mp['Mp']['id']), null, __('Are you sure you want to delete # %s?', $mp['Mp']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mp'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regiones'), array('controller' => 'regiones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regiones', 'action' => 'add')); ?> </li>
	</ul>
</div>
