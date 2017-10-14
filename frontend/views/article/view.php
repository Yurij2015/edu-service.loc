<?php
/* @var $this yii\web\View */

/* @var $model common\models\Article */

use yii\helpers\Html;

$this->title                   = $model->title;
$this->params['breadcrumbs'][] = [ 'label' => Yii::t( 'frontend', 'Articles' ), 'url' => [ 'index' ] ];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
    <article class="article-item">
        <!-- Вывод названия категории статьи -->
        <span class="article-category">
            Материал из категории:
                <?php echo Html::a(
	                $model->category->title,
	                [ 'index', 'ArticleSearch[category_id]' => $model->category_id ]
                ) ?>
            </span>

        <h1><?php echo $model->title ?></h1>

		<?php if ( $model->thumbnail_path ): ?>
			<?php echo \yii\helpers\Html::img(
				Yii::$app->glide->createSignedUrl( [
					'glide/index',
					'path' => $model->thumbnail_path,
					'w'    => 200
				], true ),
				[ 'class' => 'article-thumb img-rounded pull-left' ]
			) ?>
		<?php endif; ?>

		<?php echo $model->body ?>

		<?php if ( ! empty( $model->articleAttachments ) ): ?>
            <h3><?php echo Yii::t( 'frontend', 'Attachments' ) ?></h3>
            <ul id="article-attachments">
				<?php foreach ( $model->articleAttachments as $attachment ): ?>
                    <li>
						<?php echo \yii\helpers\Html::a(
							$attachment->name,
							[ 'attachment-download', 'id' => $attachment->id ] )
						?>
                        (<?php echo Yii::$app->formatter->asSize( $attachment->size ) ?>)
                    </li>
				<?php endforeach; ?>
            </ul>
		<?php endif; ?>

    </article>
</div>