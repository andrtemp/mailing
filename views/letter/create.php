<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Letter */
/* @var $addresses app\models\Address[] */

$this->title = 'Создать письмо';
$this->params['breadcrumbs'][] = ['label' => 'Письма', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="letter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'addresses' => $addresses
    ]) ?>

</div>
