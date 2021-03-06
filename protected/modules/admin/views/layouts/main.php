<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
       <div id="logo">
           <img src="/images/san2.JPG" alt="" width="50" height="50">
           <?php echo CHtml::encode(Yii::app()->name); ?>
       </div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Головна', 'url'=>array('/site/index')),
				array('label'=>'Авторизація', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Адмінка', 'url'=>array('/admin'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Типи військ', 'url'=>array('/admin/troop'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Частини', 'url'=>array('/admin/unit'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Призовники', 'url'=>array('/admin/prizovnyk'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Воєннозобов\'язані', 'url'=>array('/admin/vzabovyazanyj'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Непридатні', 'url'=>array('/admin/fund'), 'visible'=>!Yii::app()->user->isGuest),

				array('label'=>'Вихід ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by <strong>SAnO</strong><br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
