<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReservaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reservas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reserva-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'label' => 'Id Vuelo',
                'value' => function ($model, $key, $index, $column) {
                    return Html::a(
                        $model->vuelo->id_vuelo,
                        ['reservas/crear', 'vuelo_id' => $model->vuelo->id]
                    );
                },
                'format' => 'html',
            ],
            'asiento',
            'fecha_hora:datetime',
        ],
    ]); ?>
</div>
