<?php
/* @var $this VzabovyazanyjController */
/* @var $data Vzabovyazanyj */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vzabovyazanyj')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_vzabovyazanyj), array('view', 'id'=>$data->id_vzabovyazanyj)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_prizovnyk')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->p->name),'/admin/prizovnyk/view/id/'.$data->id_prizovnyk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateIn')); ?>:</b>
	<?php echo CHtml::encode($data->dateIn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateOut')); ?>:</b>
	<?php echo CHtml::encode($data->dateOut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('term')); ?>:</b>
	<?php echo CHtml::encode($data->term); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_troop')); ?>:</b>
	<?php echo CHtml::encode($data->troop->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit->title); ?>
	<br />


</div>