<?php
/* @var $this PrizovnykController */
/* @var $model Prizovnyk */

$this->breadcrumbs=array(
	'Призовники'=>array('index'),
	'Журнал',
);

$this->menu=array(
	array('label'=>'Список Призовників', 'url'=>array('index')),
	array('label'=>'Додати Призовника', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#prizovnyk-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал Призовників</h1>


<?php echo CHtml::link('Розширений пошук','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'prizovnyk-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_prizovnyk',
		'name',
		'address',
		'birthday',
		'education',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
