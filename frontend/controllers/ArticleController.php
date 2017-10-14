<?php

namespace frontend\controllers;

use common\models\Article;
use common\models\ArticleAttachment;
use frontend\models\search\ArticleSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


class ArticleController extends Controller {

	//ограничение доступа к материалам не авторизированным пользователям
	public function behaviors() {
		return [
			'access' => [
				'class' => \yii\filters\AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'roles' => [ '@' ],
					],
				],
			],
		];
	}


	/**
	 * @return string
	 */
	public function actionIndex() {
		$searchModel        = new ArticleSearch();
		$dataProvider       = $searchModel->search( Yii::$app->request->queryParams );
		$dataProvider->sort = [
			'defaultOrder' => [ 'created_at' => SORT_DESC ]
		];

		return $this->render( 'index', [ 'dataProvider' => $dataProvider ] );
	}

	/**
	 * @param $slug
	 *
	 * @return string
	 * @throws NotFoundHttpException
	 */
	public function actionView( $slug ) {
		$model = Article::find()->published()->andWhere( [ 'slug' => $slug ] )->one();
		if ( ! $model ) {
			throw new NotFoundHttpException;
		}

		$viewFile = $model->view ?: 'view';

		return $this->render( $viewFile, [ 'model' => $model ] );
	}

	/**
	 * @param $id
	 *
	 * @return $this
	 * @throws NotFoundHttpException
	 * @throws \yii\web\HttpException
	 */
	public function actionAttachmentDownload( $id ) {
		$model = ArticleAttachment::findOne( $id );
		if ( ! $model ) {
			throw new NotFoundHttpException;
		}

		return Yii::$app->response->sendStreamAsFile(
			Yii::$app->fileStorage->getFilesystem()->readStream( $model->path ),
			$model->name
		);
	}
}
