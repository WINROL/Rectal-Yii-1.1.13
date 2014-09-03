<?php
/* @var $this FundController */
/* @var $model Fund */

$this->breadcrumbs=array(
	'Непридатні'=>array('index'),
	'Непридатний '.$model->p->name,
);

$this->menu=array(
	array('label'=>'Список Непридатних', 'url'=>array('index')),
	array('label'=>'Створити Непридатного', 'url'=>array('create')),
	array('label'=>'Зміна Непридатного', 'url'=>array('update', 'id'=>$model->id_fund)),
	array('label'=>'Видалити Непридатного', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_fund),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Журнал Непридатних', 'url'=>array('admin')),
);
?>

<h1>Перегляд Непридатного #<?php echo $model->id_fund; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_fund',
        'id_prizovnyk' =>array(
            'name'=>'id_prizovnyk',
            'value'=>$model->p->name,
        ),
		'dateUnfitness',
		'why',
	),
)); ?>
