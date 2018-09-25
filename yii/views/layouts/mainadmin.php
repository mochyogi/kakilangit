 <?php
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;
/* @var $this \yii\web\View */
/* @var $content string */



AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="none">

  <?= Html::csrfMetaTags() ?>
  <title>Admin Kaki Langit</title>
  <?php $this->head() ?>
</head>
<body>
  <?php $this->beginBody() ?>
  <div class="page-container">
    <div class="page-sidebar">
      <ul class="x-navigation">
        <li class="xn-logo">
            <a href="<?=Url::base()?>">Kaki Langit</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
          <a href="#" class="profile-mini">
              <img src="<?=Url::base() ?>/themes/joli/assets/images/users/avatar.jpg" alt="John Doe"/>
          </a>
          <div class="profile">
              <div class="profile-image">
                  <img src="<?=Url::base() ?>/themes/joli/assets/images/users/avatar.jpg" alt="John Doe"/>
              </div>
              <div class="profile-data">
                  <div class="profile-data-name">John Doe</div>
                  <div class="profile-data-title">Web Developer/Designer</div>
              </div>
              <div class="profile-controls">
                  <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                  <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
              </div>
          </div>                                                                        
        </li>
        <li class="active">
            <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
        </li>
        <li class="xn-openable">
           <a href="index.html"><span class="fa fa-cogs"></span> <span class="xn-text">Setting</span></a>                        
          <ul>
            <li><a href="<?= Url::to(['setting/portofolio'])?>"><span class="fa fa-heart"></span> Portofolio</a></li>                            
            <li><a href="<?= Url::to(['setting/team'])?>"><span class="fa fa-th"></span> Team</a></li>
            <li><a href="<?= Url::to(['setting/testimoni'])?>"><span class="fa fa-random"></span> Testimony</a></li>
          </ul>                                    
        </li>
      </ul>
    </div>
    <div class="page-content">
      <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
         <li class="xn-icon-button">
            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
        </li>
        <li class="xn-icon-button pull-right">
            <a href="#" class="mb-control" data-box="#mb-signout" onclick="$('#form-logout').submit();return false"><span class="fa fa-sign-out"></span></a>                        
        </li>
        <form method="post" action="<?= Url::to(['site/logout']) ?>" id="form-logout">
            <input type="hidden"name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>">
        </form> 
      </ul>
      <div class="page-content-wrap">
        <?php
            echo Breadcrumbs::widget([
            'links' => [
                ['label' => 'Home', 'url' => ['site/index']],
                ['label' => 'Daftar Skripsi', 'url' => ['site/index']],
                ['label' => 'Penguji Sidang', 'url' => ['site/index']],
                'Tambah Penguji',
            ],
        ]);
        ?>
        <?= $content?>
      </div>
    </div>
  </div>

<!-- START PRELOADS -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
