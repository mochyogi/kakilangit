<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
  
    <div class="login-body">
    <div class="login-title"><strong>Log In</strong> to your account</div>
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    <div class="form-group">
        <div class="col-md-12">
            <input type="text" class="form-control" placeholder="E-mail" id="loginform-username" name="LoginForm[username]">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="password" class="form-control" placeholder="Password" id="loginform-password" name="LoginForm[password]">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "{input} {label}\n<div class=\"col-md-8\">{error}</div>",
        ]) ?>  
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
        </div>
        <div class="col-md-6">
            <?= Html::submitButton('Login', ['class' => 'btn btn-info btn-block', 'name' => 'login-button']) ?>
        </div>
    </div>
    <div class="login-subtitle">
        Don't have an account yet? <a href="#">Create an account</a>
    </div>
    <?php ActiveForm::end(); ?>
</div>

</div>


