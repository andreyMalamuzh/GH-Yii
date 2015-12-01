<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'name');?>
<?= $form->field($model, 'email');?>
<?= $form->field($model, 'city')->dropDownList(['Черкассы' => 'Черкассы', 'Киев' => 'Киев', 'Полтава' => 'Полтава'],
    ['prompt' => 'Выберите город...'])?>
<?= $form->field($model, 'phoneNumber');?>
<?= $form->field($model, 'device');?>
<?= $form->field($model, 'discountCard')->radioList(['Yes' => 'Yes', 'No' => 'No']); ?>
<?= $form->field($model, 'call')->checkboxList(['Yes' => 'Yes']);?>
<?= $form->field($model, 'image')->fileInput();?>

    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary'])?>
    </div>

<?php ActiveForm::end();?>