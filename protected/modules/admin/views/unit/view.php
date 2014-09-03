<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs=array(
	'Частини'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Список Частин', 'url'=>array('index')),
	array('label'=>'Створити Частину', 'url'=>array('create')),
	array('label'=>'Зміна Частини', 'url'=>array('update', 'id'=>$model->id_unit)),
	array('label'=>'Видалити Частину', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_unit),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Журнал Частин', 'url'=>array('admin')),
);
?>

<h1>Перегляд Частин #<?php echo $model->id_unit; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_unit',
		'title',
		'disposition',
	),
)); ?>
