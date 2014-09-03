<?php
/* @var $this VzabovyazanyjController */
/* @var $model Vzabovyazanyj */

$this->breadcrumbs=array(
	'Воєннозобов\'язані'=>array('index'),
	'Журнал',
);

$this->menu=array(
	array('label'=>'Список Воєннозобов\'язаних', 'url'=>array('index')),
	array('label'=>'Додати Воєннозобов\'язаного', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vzabovyazanyj-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал Воєннозобов'язаних</h1>


<?php echo CHtml::link('Розширений пошук','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vzabovyazanyj-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_vzabovyazanyj',
        'id_prizovnyk' => array(
            'name' => 'id_prizovnyk',
            'value' => '$data->p->name',
            'filter' => Prizovnyk::all(),
        ),
		'dateIn',
		'dateOut',
		'term',
        'id_troop' => array(
            'name' => 'id_troop',
            'value' => '$data->troop->title',
            'filter' => Troop::all(),
        ),
        'id_unit' => array(
            'name' => 'id_unit',
            'value' => '$data->unit->title',
            'filter' => Unit::all(),
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
