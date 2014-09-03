<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs=array(
	'Частини'=>array('index'),
	$model->title=>array('view','id'=>$model->id_unit),
	'Зміна Частини',
);

$this->menu=array(
	array('label'=>'Список Частин', 'url'=>array('index')),
	array('label'=>'Створити Частину', 'url'=>array('create')),
	array('label'=>'Перегляд Частин', 'url'=>array('view', 'id'=>$model->id_unit)),
	array('label'=>'Журнал Частин', 'url'=>array('admin')),
);
?>

<h1>Зміна Частини <?php echo $model->id_unit; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>