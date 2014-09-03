<?php
/* @var $this UnitController */
/* @var $model Unit */

$this->breadcrumbs=array(
	'Частини'=>array('index'),
	'Створення',
);

$this->menu=array(
	array('label'=>'Список Частин', 'url'=>array('index')),
	array('label'=>'Журнал Частин', 'url'=>array('admin')),
);
?>

<h1>Створення Частини</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>