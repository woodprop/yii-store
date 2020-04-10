<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AuthAsset;
use yii\helpers\Html;

AuthAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <base href="adminlte/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->head() ?>
</head>
<body class="hold-transition login-page">
<?php $this->beginBody() ?>
<!-- login-box -->
<?= $content ?>
<!-- /.login-box -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

