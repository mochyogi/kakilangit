<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Portofolio */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Portofolios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portofolio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_portofolio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_portofolio], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_portofolio',
            'title',
            'deskripsi:ntext',
            'gambar',
        ],
    ]) ?>

</div>
