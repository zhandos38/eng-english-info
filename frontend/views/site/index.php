<?php

use common\models\Lifehack;
use yii\helpers\Url;

$this->title = Yii::t('app', 'Главная страница');
?>
<div class="carousel slide" data-ride="carousel" id="carousel-1">
    <div class="carousel-inner" role="listbox">
        <?php /** @var \common\models\Slider $sliders */
        foreach ($sliders as $k => $slider): ?>
            <div class="carousel-item <?= $k === 0 ? 'active' : '' ?>"><a href="<?= $slider->link ?>"><img class="w-100 d-block" src="<?= $slider->getImage() ?>" alt=<?= $slider->img ?>></a></div>
        <?php endforeach; ?>
    </div>
    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
    <ol class="carousel-indicators">
        <?php foreach ($sliders as $k => $slider): ?>
            <li data-target="#carousel-1" data-slide-to="0" class="<?= $k === 0 ? 'active' : '' ?>"></li>
        <?php endforeach; ?>
    </ol>
</div>
<section id="section-offer" class="section section-offer">
    <div class="container">
        <div class="row">
            <div class="section-offer__content">
                <h2><?= Yii::t('app', 'Изучайте Web разработку вместе с нами') ?></h2>
                <p>
                    <?= Yii::t('app', 'Зарегистрируйтесь и пройдите наши бесплатные курсы') ?>
                </p>
                <a class="btn btn-success" href="<?= \yii\helpers\Url::to(['course/index']) ?>">
                    <?= Yii::t('app', 'Посмотреть все курсы') ?>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="section section-feature">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-md-3">
                <a class="feature-card__link-wrapper" href="<?= Url::to(['course/index']) ?>">
                    <div data-aos="fade-left" class="feature-card">
                        <div class="feature-card__image-wrapper"><img class="feature-card__image" src="/img/video.png"></div>
                        <h4 class="feature-card__title"><?= Yii::t('app', 'Онлайн курсы') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <a class="feature-card__link-wrapper" href="<?= Url::to(['lifehack/index']) ?>">
                    <div data-aos="fade-right" data-aos-delay="400" class="feature-card">
                        <div class="feature-card__image-wrapper"><img class="feature-card__image" src="/img/puzzle.png"></div>
                        <h4 class="feature-card__title"><?= Yii::t('app', 'Лайфхаки') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <a class="feature-card__link-wrapper" href="<?= Url::to(['site/signup']) ?>">
                    <div data-aos="fade-down" data-aos-delay="200" class="feature-card">
                        <div class="feature-card__image-wrapper"><img class="feature-card__image" src="/img/book.png"></div>
                        <h4 class="feature-card__title"><?= Yii::t('app', 'Информация') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <a class="feature-card__link-wrapper" href="<?= Url::to(['site/signup']) ?>">
                    <div data-aos="fade-right" data-aos-delay="300" class="feature-card">
                        <div class="feature-card__image-wrapper"><img class="feature-card__image" src="/img/trophy.png"></div>
                        <h4 class="feature-card__title"><?= Yii::t('app', 'Онлайн тестирование') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <a class="feature-card__link-wrapper" href="<?= Url::to(['site/signup']) ?>">
                    <div data-aos="fade-up" data-aos-delay="500" class="feature-card">
                        <div class="feature-card__image-wrapper"><img class="feature-card__image" src="/img/dialogue.png"></div>
                        <h4 class="feature-card__title"><?= Yii::t('app', 'Web Club') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <a class="feature-card__link-wrapper" href="<?= Url::to(['course/index']) ?>">
                    <div data-aos="fade-left" data-aos-delay="600" class="feature-card">
                        <div class="feature-card__image-wrapper"><img class="feature-card__image" src="/img/paper.png"></div>
                        <h4 class="feature-card__title"><?= Yii::t('app', 'Сертификат') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <a class="feature-card__link-wrapper" href="<?= Url::to(['site/signup']) ?>">
                    <div data-aos="fade-up-right" data-aos-duration="700" class="feature-card">
                        <div class="feature-card__image-wrapper"><img class="feature-card__image" src="/img/help.png"></div>
                        <h4 class="feature-card__title"><?= Yii::t('app', '24/7 Поддержка') ?></h4>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3">
                <a class="feature-card__link-wrapper" href="<?= Url::to(['site/signup']) ?>">
                    <div data-aos="fade-down-left" data-aos-delay="800" class="feature-card">
                        <div class="feature-card__image-wrapper"><img class="feature-card__image" src="/img/mobile-app.png"></div>
                        <h4 class="feature-card__title"><?= Yii::t('app', 'Мобильное приложение') ?></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="section-info" class="section section-info">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="info-counter"><span class="info-counter__number count">2021</span>
                    <div class="info-counter__title"><span><?= Yii::t('app', 'Год открытия') ?></span></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-counter"><span class="info-counter__number count">18</span>
                    <div class="info-counter__title"><span><?= Yii::t('app', 'Количество курсов') ?></span></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-counter"><span class="info-counter__number count"><?= Yii::$app->settings->get('app', 'students') ?></span>
                    <div class="info-counter__title"><span><?= Yii::t('app', 'Зарегистрированных учеников') ?></span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-courses">
    <div class="container">
        <h1 data-aos="fade-down" data-aos-duration="300"><?= Yii::t('app', 'Наши курсы') ?></h1>
        <div class="row">
            <?php /** @var \common\models\Course $courses */
            foreach ($courses as $course): ?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img w-100 d-block" src="<?= $course->getImage() ?>">
                        <div class="card-img-overlay">
                            <h4 class="card-title"><?= $course->name ?></h4>
                            <p><?= $course->price ?> тг</p>
                            <a class="card-btn btn btn-primary" href="<?= Url::to(['course/view', 'id' => $course->id]) ?>"><?= Yii::t('app', 'Подробнее') ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="courses__footer">
            <a class="btn btn-primary" href="<?= Url::to(['course/index']) ?>" data-aos="zoom-in" data-aos-delay="300" type="button"><?= Yii::t('app', 'Все курсы') ?></a>
        </div>
    </div>
</section>
<section class="section section-lifehacks">
    <div class="container">
        <h1 data-aos="fade-up" data-aos-duration="300"><?= Yii::t('app', 'Лайфхаки') ?></h1>
        <div class="row">
            <?php
            /** @var Lifehack $lifehacks */
            /** @var Lifehack $lifehack */
            foreach ($lifehacks as $lifehack): ?>
            <div class="col-md-3">
                <div class="life-hack">
                    <div class="card">
                        <img class="card-img w-100 d-block" src="<?= $lifehack->getImage() ?>">
                        <div class="card-img-overlay">
                            <h4 class="card-title"><?= $course->name ?></h4>
                            <a class="card-btn btn btn-primary" href="<?= Url::to(['lifehack/view', 'id' => $lifehack->id]) ?>"><?= Yii::t('app', 'Подробнее') ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="lifehacks__footer"><a class="btn btn-primary" href="<?= Url::to(['lifehack/index']) ?>" data-aos="zoom-in" data-aos-duration="300" type="button"><?= Yii::t('app', 'Все лайфхаки') ?></a></div>
    </div>
</section>