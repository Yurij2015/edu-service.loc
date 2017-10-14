<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = Yii::t('frontend', 'Articles')
?>
<div id="article-index">

	<?php echo \common\widgets\DbCarousel::widget( [
		'key'     => 'article',
		'options' => [
			'class' => 'slide', // enables slide effect
		],
	] ) ?>

    <h1><?// echo Yii::t('frontend', 'Articles') ?></h1>
    <?php echo \yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider,
        'pager'=>[
            'hideOnSinglePage'=>true,
        ],
        'itemView'=>'_item'
    ])?>
</div>