<?php

/**
 * The registration form.
 */

use app\core\form\Form;
use app\models\RegisterModel;

$form = new Form();
$model = new RegisterModel();
?>

<h1>Register</h1>

<?php $form = Form::begin('', 'post') ?>
    <div class="row">
        <div class="col-md-6">
            <?php echo $form->field($model, 'firstname') ?>
        </div>
        <div class="col-md-6">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
        <?php echo $form->field($model, 'email') ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        <?php echo $form->field($model, 'password')->passwordField() ?>
        </div>
        <div class="col-md-6">
        <?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>
        </div>
    </div>
    <button class="btn btn-success mt-3">Submit</button>
<?php Form::end() ?>
