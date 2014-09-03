<?php
/* @var $this VzabovyazanyjController */
/* @var $model Vzabovyazanyj */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vzabovyazanyj-form',
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_prizovnyk'); ?>
        <?php echo $form->dropDownList($model,'id_prizovnyk',Prizovnyk::allV()); ?>
		<?php echo $form->error($model,'id_prizovnyk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateIn'); ?>
		<?php echo $form->textField($model,'dateIn'); ?>
		<?php echo $form->error($model,'dateIn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateOut'); ?>
		<?php echo $form->textField($model,'dateOut'); ?>
		<?php echo $form->error($model,'dateOut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'term'); ?>
		<?php echo $form->textField($model,'term',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'term'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_troop'); ?>
        <?php echo $form->dropDownList($model,'id_troop',Troop::all()); ?>
		<?php echo $form->error($model,'id_troop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_unit'); ?>
        <?php echo $form->dropDownList($model,'id_unit',Unit::all()); ?>
		<?php echo $form->error($model,'id_unit'); ?>
	</div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Додати' : 'Зберегти'); ?>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->