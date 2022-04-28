<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Framework */

$this->title = 'Create Framework';
$this->params['breadcrumbs'][] = ['label' => 'Frameworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="framework-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
