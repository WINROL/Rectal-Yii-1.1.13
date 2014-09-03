<?php
/* @var $this TroopController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Типи військ',
);

$this->menu=array(
	array('label'=>'Створити військо', 'url'=>array('create')),
	array('label'=>'Журнал військ', 'url'=>array('admin')),
);
?>

<h1>Типи військ</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
