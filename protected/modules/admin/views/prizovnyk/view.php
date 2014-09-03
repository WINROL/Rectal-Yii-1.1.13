<?php
/* @var $this PrizovnykController */
/* @var $model Prizovnyk */

$this->breadcrumbs=array(
	'Призовники'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список Призовників', 'url'=>array('index')),
	array('label'=>'Створити Призовника', 'url'=>array('create')),
	array('label'=>'Зміна Призовника', 'url'=>array('update', 'id'=>$model->id_prizovnyk)),
	array('label'=>'Видалити Призовника', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_prizovnyk),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Журнал Призовників', 'url'=>array('admin')),
);
?>

<h1>Перегляд Призовника #<?php echo $model->id_prizovnyk; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_prizovnyk',
		'name',
		'address',
		'birthday',
		'education',
        /*'foto'=>array(
            'name'=>'foto',
            'value'=>htmlspecialchars_decode($foto, ENT_NOQUOTES),
        ),*/
        'foto:html',
	),
)); ?>
