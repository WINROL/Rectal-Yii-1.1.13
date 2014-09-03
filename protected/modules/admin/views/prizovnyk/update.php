<?php
/* @var $this PrizovnykController */
/* @var $model Prizovnyk */

$this->breadcrumbs=array(
	'Призовники'=>array('index'),
	$model->name=>array('view','id'=>$model->id_prizovnyk),
	'Зміна Призовника',
);

$this->menu=array(
	array('label'=>'Список Призовників', 'url'=>array('index')),
	array('label'=>'Створити Призовника', 'url'=>array('create')),
	array('label'=>'Перегляд Призовника', 'url'=>array('view', 'id'=>$model->id_prizovnyk)),
	array('label'=>'Журнал Призовників', 'url'=>array('admin')),
);
?>

<h1>Зміна Призовника <?php echo $model->id_prizovnyk; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>