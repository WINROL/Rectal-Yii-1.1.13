<?php
/* @var $this FundController */
/* @var $model Fund */

$this->breadcrumbs=array(
	'Непридатні'=>array('index'),
	'Журнал',
);

$this->menu=array(
	array('label'=>'Список Непридатних', 'url'=>array('index')),
	array('label'=>'Додати Непридатного', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fund-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Журнал Непридатних</h1>


<?php echo CHtml::link('Розширений пошук','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php

    $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'fund-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
            'id_fund' => array(
                'name' => 'id_fund',
                'headerHtmlOptions'=> array(
                    'width'=>50
                )
            ),
            'id_prizovnyk' => array(
                'name' => 'id_prizovnyk',
                'value' => '$data->p->name',
                'filter' => Prizovnyk::all(),
            ),
            'dateUnfitness',
            'why',
            array(
                'class'=>'CButtonColumn',
            ),
        ),
    ));

?>
