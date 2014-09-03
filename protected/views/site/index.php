<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<?php
    if(Yii::app()->user->isGuest):
?>

    <h1>Для перегляду даних Вам потрібно авторизуватись!</h1>

 <?php
    else:
?>
    <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php
    endif;
?>