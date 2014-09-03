<?php
/* @var $this UnitController */
/* @var $data Unit */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unit')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_unit), array('view', 'id'=>$data->id_unit)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disposition')); ?>:</b>
	<?php echo CHtml::encode($data->disposition); ?>
	<br />


</div>