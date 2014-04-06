<div class="identificaciones view">
<h2><?php echo __('Identificacion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($identificacion['Identificacion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($identificacion['Identificacion']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Denunciante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($identificacion['Denunciante']['id'], array('controller' => 'denunciantes', 'action' => 'view', $identificacion['Denunciante']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extraviado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($identificacion['Extraviado']['id'], array('controller' => 'extraviados', 'action' => 'view', $identificacion['Extraviado']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Identificacion'), array('action' => 'edit', $identificacion['Identificacion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Identificacion'), array('action' => 'delete', $identificacion['Identificacion']['id']), null, __('Are you sure you want to delete # %s?', $identificacion['Identificacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Identificaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Identificacion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Denunciantes'), array('controller' => 'denunciantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Denunciante'), array('controller' => 'denunciantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extraviados'), array('controller' => 'extraviados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extraviado'), array('controller' => 'extraviados', 'action' => 'add')); ?> </li>
	</ul>
</div>
