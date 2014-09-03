<?php
/* @var $this PrizovnykController */
/* @var $model Prizovnyk */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prizovnyk-form',
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthday'); ?>
		<?php echo $form->textField($model,'birthday'); ?>
		<?php echo $form->error($model,'birthday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'education'); ?>
		<?php echo $form->textField($model,'education',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'education'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'foto'); ?>
        <?php $this->widget('application.extensions.ckeditor.CKEditor', array(
        'model'=>$model,
        'attribute'=>'foto',
        'language'=>'uk',
        'editorTemplate'=>'full',
    )); ?>
        <?php echo $form->error($model,'foto'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Додати' : 'Зберегти'); ?>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->