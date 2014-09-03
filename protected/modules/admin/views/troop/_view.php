<?php
/* @var $this TroopController */
/* @var $data Troop */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_troop')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_troop), array('view', 'id'=>$data->id_troop)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />


</div>