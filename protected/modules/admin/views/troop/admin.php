<?php
/* @var $this TroopController */
/* @var $model Troop */

$this->breadcrumbs=array(
	'Військ'=>array('index'),
	'Журнал Військ',
);

$this->menu=array(
	array('label'=>'Список Військ', 'url'=>array('index')),
	array('label'=>'Створення Війська', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#troop-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал Військ</h1>


<?php echo CHtml::link('Розширений пошук','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'troop-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_troop',
		'title',
		'address',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
