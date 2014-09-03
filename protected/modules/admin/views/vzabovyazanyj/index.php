<?php
/* @var $this VzabovyazanyjController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Воєннозобов\'язані',
);

$this->menu=array(
	array('label'=>'Додати Воєннозобов\'язаного', 'url'=>array('create')),
	array('label'=>'Журнал Воєннозобов\'язаних', 'url'=>array('admin')),
);
?>

<h1>Воєннозобов'язані</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
