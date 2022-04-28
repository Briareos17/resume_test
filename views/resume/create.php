<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\Models\Resume */
/* @var $frameworks app\Models\Framework[] */

$this->title = 'Create Resume';
$this->params['breadcrumbs'][] = ['label' => 'Resumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resume-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', compact('model', 'frameworks')) ?>

</div>
