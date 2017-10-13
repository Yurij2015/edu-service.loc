<?php
/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>
<div class="site-index">

	<?php echo \common\widgets\DbCarousel::widget( [
		'key'     => 'index',
		'options' => [
			'class' => 'slide', // enables slide effect
		],
	] ) ?>

    <div class="jumbotron">
        <h2>Учитесь безопасности с нами</h2>

        <p class="lead">Учась взламывать, учитесь защищать себя</p>

		<?php echo common\widgets\DbMenu::widget( [
			'key'     => 'frontend-index',
			'options' => [
				'tag' => 'p'
			]
		] ) ?>

    </div>

    <div class="body-content">

        <div class="row comprehensive">
            <div class="col-lg-12">
                <h2>Подготовка по безопасности для разработчиков</h2>
                <p>Наш сайт - лучший и самый полный способ для разработчиков узнать об уязвимостях безопасности, которые
                    угрожают вашему бизнесу</p>

                <div class="row features">
                    <div class="col-sm-4 ">
                        <ul>
                            <li>
                                <img src="/img/exercises.png"
                                     alt="Наши интерактивные упражнения охватывают все основные современные уязвимости безопасности">
                            </li>
                            <li class="caption">
                                Наши интерактивные упражнения охватывают все основные современные уязвимости
                                безопасности
                            </li>
                        </ul>
                    </div>

                    <div class="column col-sm-4">
                        <ul>
                            <li>
                                <img src="/img/code-samples.png"
                                     alt="Узнайте, как защищать свои ресурсы настоящими, обновленными образцами кода">
                            </li>
                            <li class="caption">
                                Узнайте, как защищать свои ресурсы настоящими, обновленными образцами кода
                            </li>
                        </ul>
                    </div>

                    <div class="column col-sm-4">
                        <ul>
                            <li>
                                <img src="/img/quizzes.png"
                                     alt="Проверяйте свои знания по мере того, как вы учитесь, проходя тесты по каждой теме">
                            </li>
                            <li class="caption">
                                Проверяйте свои знания по мере того, как вы учитесь, проходя тесты по каждой теме
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>

        <div class="row whattosee">
            <div class="col-lg-12">
                <h3>Хотите посмотреть в действии?
                    <span class="subtle">Читать о...</span>
                </h3>
                <div class="exercise-list">
                    <div class="row">

                        <div class="col-md-3 col-xs-12">
                            <a href="exercises/sql-injection">
                                <div class="exercise-link">

                                    <div class="spacer">


                                        <div class="img"

                                             style="background-color: rgb(255, 255, 255); background-image: url(&quot;/img/sql-injection/icon.gif&quot;);"></div>

                                    </div>

                                    <span class="exercise-label">
SQL-ИНЪЕКЦИЯ  </span>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12">
                            <a href="/exercises/click-jacking">
                                <div class="exercise-link">
                                    <div class="spacer">
                                        <div class="img"
                                             style="background-color: rgb(255, 255, 255); background-image: url(&quot;/img/click-jacking/icon.gif&quot;);"></div>
                                    </div>
                                    <span class="exercise-label">
    Clickjacking
  </span>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12">
                            <a href="/exercises/session-fixation">
                                <div class="exercise-link">
                                    <div class="spacer">
                                        <div class="img"
                                             style=" background-color: rgb(255, 255, 255); background-image: url(&quot;/img/session-fixation/icon.gif&quot;);">
                                        </div>
                                    </div>
                                    <span class="exercise-label">
    ФИКСАЦИЯ сессии
  </span>

                                </div>
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12">
                            <a href="/exercises/xss-stored">
                                <div class="exercise-link">
                                    <div class="spacer">
                                        <div class="img"
                                             style="background-color: rgb(255, 255, 255); background-image: url(&quot;/img/xss-stored/icon.gif&quot;);"></div>
                                    </div>

                                    <span class="exercise-label">
    МЕЖСАЙТОВЫЙ СКРИПТИНГ (XSS)
  </span>

                                </div>
                            </a>
                        </div>
                        <div class="row"><a href="" class="more">Список всех занятий →</a></div>


                    </div>
                </div>

            </div>
        </div>

        <div class="row userssaying">
            <h2>Отзывы</h2>
            <div class="col-lg-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>

            </div>
            <div class="col-lg-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>

            </div>
            <div class="col-lg-4">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>

            </div>
        </div>

    </div>
</div>
