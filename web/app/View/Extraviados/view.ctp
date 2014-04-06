<div class="extraviados view">
<h2><?php echo __('Extraviado'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaNac'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['fechaNac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['edad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Originario'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['originario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nacionalidad'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['nacionalidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Domicilio'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['domicilio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CorreoElectronico'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['correoElectronico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RedSocial'); ?></dt>
		<dd>
			<?php echo h($extraviado['Extraviado']['redSocial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($extraviado['Localidad']['nombre'], array('controller' => 'localidades', 'action' => 'view', $extraviado['Localidad']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

</div>
