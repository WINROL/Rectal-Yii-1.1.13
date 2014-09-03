<?php
/* @var $this PrizovnykController */
/* @var $model Prizovnyk */

$this->breadcrumbs=array(
	'Призовники'=>array('index'),
	'Створення',
);

$this->menu=array(
	array('label'=>'Список Призовників', 'url'=>array('index')),
	array('label'=>'Журнал Призовників', 'url'=>array('admin')),
);
?>

<h1>Додати Призовника</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>