<?php
/* @var $this TroopController */
/* @var $model Troop */

$this->breadcrumbs=array(
	'Війська'=>array('index'),
	'Створення Війська',
);

$this->menu=array(
	array('label'=>'Список Військ', 'url'=>array('index')),
	array('label'=>'Журнал Військ', 'url'=>array('admin')),
);
?>

<h1>Створення Війська</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>