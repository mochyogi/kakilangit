<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Portofolio */

$this->title = 'Update Portofolio: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Portofolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id_portofolio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="portofolio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
