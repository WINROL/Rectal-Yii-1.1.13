<?php
/* @var $this FundController */
/* @var $model Fund */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fund-form',
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_prizovnyk'); ?>
		<?php echo $form->dropDownList($model,'id_prizovnyk',Prizovnyk::allV()); ?>
		<?php echo $form->error($model,'id_prizovnyk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateUnfitness'); ?>
		<?php echo $form->textField($model,'dateUnfitness'); ?>
		<?php echo $form->error($model,'dateUnfitness'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'why'); ?>
		<?php echo $form->textField($model,'why',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'why'); ?>
	</div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Додати' : 'Зберегти'); ?>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->