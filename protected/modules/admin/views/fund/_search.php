<?php
/* @var $this FundController */
/* @var $model Fund */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_fund'); ?>
		<?php echo $form->textField($model,'id_fund'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_prizovnyk'); ?>
        <?php echo $form->dropDownList($model,'id_prizovnyk',Prizovnyk::all()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateUnfitness'); ?>
		<?php echo $form->textField($model,'dateUnfitness'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'why'); ?>
		<?php echo $form->textField($model,'why',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Пошук'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->