<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Framework */

$this->title = 'Update Framework: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Frameworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="framework-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
