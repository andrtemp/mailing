<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LetterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Письма';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="letter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать письмо', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'content:ntext',
            [
                'label' => 'Отправитель',
                'value' => function($data){
                    return $data->sender->name;
                }
            ],
            [
                'label' => 'Получатель',
                'value' => function($data){
                    return $data->receiver->name;
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
