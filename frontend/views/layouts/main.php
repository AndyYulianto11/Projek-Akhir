<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="site-header">
        <div class="container">
            <div class="main-header">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-10">
                        <div class="logo">
                            <a href="#">
                                <img src="images/logo.png" alt="travel html5 template" title="travel html5 template">
                            </a>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-2">
                        <div class="main-menu">
                            <ul class="visible-lg visible-md">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                            <a href="#" class="toggle-menu visible-sm visible-xs">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div class="row">
                <div class="col-md-12 visible-sm visible-xs">
                    <div class="menu-responsive">
                        <ul>
                            <li class="active"><a href="index.html">Home</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div> <!-- /.menu-responsive -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-header -->
    
    <?= $content ?>

<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="footer-logo">
                    <a href="index.html">
                        <img src="images/logo.png" alt="">
                    </a>
                </div>
            </div> <!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-4">
                <div class="copyright">
                    <span>
                        
                        Copyright &copy; 2014 <a href="#">Company Name</a>
                    
                    
                    <!--
                    | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a>
                    -->
                    
                    </span>
                </div>
            </div> <!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-4">
                <ul class="social-icons">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                    <li><a href="#" class="fa fa-flickr"></a></li>
                    <li><a href="#" class="fa fa-rss"></a></li>
                </ul>
            </div> <!-- /.col-md-4 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.site-footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
