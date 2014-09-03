<?php
/* @var $this VzabovyazanyjController */
/* @var $model Vzabovyazanyj */

$this->breadcrumbs=array(
    'Воєннозобов\'язані'=>array('index'),
	$model->id_vzabovyazanyj=>array('view','id'=>$model->id_vzabovyazanyj),
	'Зміна',
);

$this->menu=array(
	array('label'=>'Список Воєннозобов\'язаних', 'url'=>array('index')),
	array('label'=>'Додати Воєннозобов\'язаного', 'url'=>array('create')),
	array('label'=>'Перегляд Воєннозобов\'язаного', 'url'=>array('view', 'id'=>$model->id_vzabovyazanyj)),
	array('label'=>'Журнал Воєннозобов\'язаних', 'url'=>array('admin')),
);
?>

<h1>Зміна Воєннозобов'язаного <?php echo $model->id_vzabovyazanyj; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>