<?php
/* @var $this VzabovyazanyjController */
/* @var $model Vzabovyazanyj */

$this->breadcrumbs=array(
    'Воєннозобов\'язані'=>array('index'),
	$model->id_vzabovyazanyj,
);

$this->menu=array(
	array('label'=>'Список Воєннозобов\'язаних', 'url'=>array('index')),
	array('label'=>'Додати Воєннозобов\'язаного', 'url'=>array('create')),
	array('label'=>'Зміна Воєннозобов\'язаного', 'url'=>array('update', 'id'=>$model->id_vzabovyazanyj)),
	array('label'=>'Видалити Воєннозобов\'язаного', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vzabovyazanyj),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Журнал Воєннозобов\'язаних', 'url'=>array('admin')),
);
?>

<h1>Перегляд Воєннозобов'язаного #<?php echo $model->id_vzabovyazanyj; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_vzabovyazanyj',
		'id_prizovnyk',
		'dateIn',
		'dateOut',
		'term',
		'id_troop',
		'id_unit',
	),
)); ?>
