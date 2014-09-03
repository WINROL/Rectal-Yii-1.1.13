<?php
/* @var $this TroopController */
/* @var $model Troop */

$this->breadcrumbs=array(
	'Війська'=>array('index'),
	$model->title=>array('view','id'=>$model->id_troop),
	'Зміна',
);

$this->menu=array(
	array('label'=>'Список Військ', 'url'=>array('index')),
	array('label'=>'Створити Військо', 'url'=>array('create')),
	array('label'=>'Перегляд Військ', 'url'=>array('view', 'id'=>$model->id_troop)),
	array('label'=>'Журнал Військ', 'url'=>array('admin')),
);
?>

<h1>Зміна Війська <?php echo $model->id_troop; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>