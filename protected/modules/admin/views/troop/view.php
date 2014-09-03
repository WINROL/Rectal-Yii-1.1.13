<?php
/* @var $this TroopController */
/* @var $model Troop */

$this->breadcrumbs=array(
	'Війська'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Список Військ', 'url'=>array('index')),
	array('label'=>'Створити Військо', 'url'=>array('create')),
	array('label'=>'Зміна Війська', 'url'=>array('update', 'id'=>$model->id_troop)),
	array('label'=>'Видалити Військо', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_troop),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Журнал Військ', 'url'=>array('admin')),
);
?>

<h1>Перегляд Військ #<?php echo $model->id_troop; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_troop',
		'title',
		'address',
	),
)); ?>
