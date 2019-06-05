<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Letter */
/* @var $addresses app\models\Address[] */

$this->title = 'Редактировать письмо: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Письма', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="letter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'addresses' => $addresses
    ]) ?>

</div>
