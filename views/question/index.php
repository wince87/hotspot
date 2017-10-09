<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\grid\GridView;


$this->title = 'Hotspot questions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hot-question-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add New', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => [
            'class' => 'grid-view table-responsive'
        ],
        
        'columns' => [
            'text',
            'answer_1',
            'answer_2',
            'answer_3',
            'answer_4',
            'correct',
            [
                'header' => 'CRUD options',
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'
            ]
        ]
    ]) ?>
</div>
