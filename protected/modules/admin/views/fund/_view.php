<?php
/* @var $this FundController */
/* @var $data Fund */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_fund')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_fund), array('view', 'id'=>$data->id_fund)); ?>
	<br />

	<b><?php
     echo CHtml::encode($data->getAttributeLabel('id_prizovnyk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->p->name),'/admin/prizovnyk/view/id/'.$data->id_prizovnyk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateUnfitness')); ?>:</b>
	<?php echo CHtml::encode($data->dateUnfitness); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('why')); ?>:</b>
	<?php echo CHtml::encode($data->why); ?>
	<br />

</div>