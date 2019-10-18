<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var yii\widgets\ActiveForm $form
 * @var dektrium\user\models\RecoveryForm $model
 */

$this->title = Yii::t('user', 'Change your password');
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="panel-body">
                <?php $form = ActiveForm::begin([
                    'id' => 'password-recovery-form'
                ]); ?>

                <?= $form->field($model, 'currentPassword')->passwordInput()->label('Current password') ?>
                
                <?= $form->field($model, 'newPassword')->passwordInput()->label('New password') ?>

                <?= $form->field($model, 'confirmPassword')->passwordInput()->label('Confirm password') ?>                

                <?= Html::submitButton(Yii::t('user', 'Save'), ['class' => 'btn btn-success btn-block']) ?><br>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
