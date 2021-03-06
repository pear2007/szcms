<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Channel;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '产品信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pd-20">

<!--    <h1><?php //  echo  Html::encode($this->title)  ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <?php //  echo  Html::a('添加产品', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
//            'id',
  //          'pic',
            'title',
//            'content:ntext',
            'auth_key',
 //            'channelid',
            'channelid' => [
                'label' => '所属分类',
                'value' => function ($model, $key, $index, $channelid) {
                 return Html::a(Channel::item( 'pro' ,$model->channelid));
 
                }, 'format' => 'raw',
            ],
            // 'description',
            // 'keyword',
            // 'status',
            // 'created_at',
            // 'updated_at',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
