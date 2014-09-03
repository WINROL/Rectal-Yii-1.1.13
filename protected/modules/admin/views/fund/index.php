<?php
/* @var $this FundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Непридатні',
);

$this->menu=array(
	array('label'=>'Створити Непридатного', 'url'=>array('create')),
	array('label'=>'Журнал Непридатних', 'url'=>array('admin')),
);
?>

<h1>Непридатні</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
