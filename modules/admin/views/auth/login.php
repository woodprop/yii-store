<div class="login-box">
    <div class="login-logo">
        <a href="<?= \yii\helpers\Url::to(['/admin']) ?>"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <?php $form = \yii\widgets\ActiveForm::begin(); ?>
                    <?= $form->field($model, 'username', ['template' => "<div class='input-group mb-3'> {input} <div class=\"input-group-append\"><div class=\"input-group-text\"><span class=\"fas fa-user\"></span></div></div></div><div class=\"text-danger\">{error}</div>",])->textInput(['class'=> 'form-control', 'placeholder' => 'Имя']) ?>
                    <?= $form->field($model, 'password', ['template' => "<div class='input-group mb-3'> {input} <div class=\"input-group-append\"><div class=\"input-group-text\"><span class=\"fas fa-lock\"></span></div></div></div><div class=\"text-danger\">{error}</div>",])->passwordInput(['class'=> 'form-control', 'placeholder' => 'Пароль']) ?>

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <?= $form->field($model, 'rememberMe')->checkbox(['template' => "{label}{input}"]) ?>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <?= \yii\helpers\Html::submitButton('Вход', ['class' => 'btn btn-primary btn-block']) ?>
                    </div>
                    <!-- /.col -->
                </div>
            <?php \yii\widgets\ActiveForm::end(); ?>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
