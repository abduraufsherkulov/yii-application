<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div>
    <a href="<?= \yii\helpers\Url::to(['/article/view', 'slug' => $model->slug]) ?>"><h3><?= Html::encode($model->title) ?></h3></a>
    <div><?= \yii\helpers\StringHelper::truncateWords($model->getEncodedBody(), 40)  ?></div>
    <p class="text-muted text-right">
        <small>Created at: <?= Yii::$app->formatter->asRelativeTime($model->created_at) ?>
            By: <?= $model->createdBy->username ?>
        </small>

    </p>
    <hr>
</div>
