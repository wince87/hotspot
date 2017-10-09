<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\HotQuestion */

$this->title = 'Create hotspot question';
$this->params['breadcrumbs'][] = ['label' => 'Hot Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hot-question-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
