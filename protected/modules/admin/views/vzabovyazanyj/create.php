<?php
/* @var $this VzabovyazanyjController */
/* @var $model Vzabovyazanyj */

$this->breadcrumbs=array(
    'Воєннозобов\'язані'=>array('index'),
	'Створення',
);


$this->menu=array(
	array('label'=>'Список Воєннозобов\'язаних', 'url'=>array('index')),
	array('label'=>'Журнал Воєннозобов\'язаних', 'url'=>array('admin')),
);
?>

<h1>Додати Воєннозобов'язаного</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>