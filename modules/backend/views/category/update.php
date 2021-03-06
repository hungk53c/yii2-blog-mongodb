<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model devmustafa\blog\models\Category */

// set used language
$default_language = $module_vars['default_language'];

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Category',
]) . $model->title[$default_language];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'module_vars' => $module_vars,
    ]) ?>

</div>
