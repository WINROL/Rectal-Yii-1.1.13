<?php
/* @var $this VzabovyazanyjController */
/* @var $model Vzabovyazanyj */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'id_prizovnyk'); ?>
        <?php echo $form->dropDownList($model,'id_prizovnyk',Prizovnyk::all()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateIn'); ?>
		<?php echo $form->textField($model,'dateIn'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateOut'); ?>
		<?php echo $form->textField($model,'dateOut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'term'); ?>
		<?php echo $form->textField($model,'term',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_troop'); ?>
        <?php echo $form->dropDownList($model,'id_prizovnyk',Troop::all()); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_unit'); ?>
        <?php echo $form->dropDownList($model,'id_prizovnyk',Unit::all()); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Пошук'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->