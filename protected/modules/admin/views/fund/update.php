<?php
/* @var $this FundController */
/* @var $model Fund */

$this->breadcrumbs=array(
	'Непридатні'=>array('index'),
    'Непридатний '.$model->p->name=>array('view','id'=>$model->id_fund),
	'Зміна',
);

$this->menu=array(
	array('label'=>'Список Непридатних', 'url'=>array('index')),
	array('label'=>'Створити Непридатного', 'url'=>array('create')),
	array('label'=>'Перегляд Непридатного', 'url'=>array('view', 'id'=>$model->id_fund)),
	array('label'=>'Журнал Непридатних', 'url'=>array('admin')),
);
?>

<h1>Зміна Непридатного <?php echo $model->id_fund; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>