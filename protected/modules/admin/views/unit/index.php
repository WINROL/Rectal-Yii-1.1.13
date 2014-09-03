<?php
/* @var $this UnitController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Частини',
);

$this->menu=array(
	array('label'=>'Створити Частину', 'url'=>array('create')),
	array('label'=>'Журнал Частин', 'url'=>array('admin')),
);
?>

<h1>Всі Частини</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
