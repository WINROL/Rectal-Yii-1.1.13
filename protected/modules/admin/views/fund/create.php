<?php
/* @var $this FundController */
/* @var $model Fund */

$this->breadcrumbs=array(
	'Непридатні'=>array('index'),
	'Додати',
);

$this->menu=array(
	array('label'=>'Список Непридатних', 'url'=>array('index')),
	array('label'=>'Журнал Непридатних', 'url'=>array('admin')),
);
?>

<h1>Додати Непридатного</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>