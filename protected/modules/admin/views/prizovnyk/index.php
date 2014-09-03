<?php
/* @var $this PrizovnykController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Призовники',
);

$this->menu=array(
	array('label'=>'Додати Призовника', 'url'=>array('create')),
	array('label'=>'Журнал Призовників', 'url'=>array('admin')),
);
?>

<h1>Призовники</h1>

<?php

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
