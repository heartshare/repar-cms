<?php
use themes\flat\FlatAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

FlatAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="<?= Yii::$app->charset ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="header">
  <a class="svg-logo">
       <!--[if lt IE 9 ]>
       <span class="image-logo"></span>
       <![endif]-->
       <!--[if !IE]><!-->
       <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" xml:space="preserve">
         <g>
		  <path d="M68.3,27.9c0,0,9.1-12,17.4-1.2c0,0,21.6-3.7,1.9,6.5c0,0-3.3,24.9-34.2,20c0,0-8.2-1.5-12.5-5.4
				c0,0-7.3-6,2.6-2.4c0,0,2.5,0.9,0.6-1.6c0,0-2.5-3.3,2.2-1.8c0,0,11.6,1.8,11.5-5.5L56,17c0,0-1.4-14.7,7.4,1.8
				C63.4,18.8,68,27.1,68.3,27.9z"/>
		  <path d="M44.6,22.9l7.6,15.2c0,0,4.1,6.4,3.5-8.2c0,0,0-2.9-5.1-7C50.6,22.9,41.2,16.1,44.6,22.9z"/>
         </g>
         <g>
	      <path d="M116.9,45l-2.4-1.4c1.9-5.7,3.5-10.9,4.9-15.6c1.3-4.7,2.3-8.6,2.9-11.7l3.4-1c-0.8,3.2-1.7,6.8-2.8,10.6
		c-1.1,3.8-2.4,8-3.8,12.4c3.8-8.4,7.1-14.4,9.9-18c2.9-3.6,5.7-5.5,8.5-5.5c1.5,0,2.8,0.5,3.8,1.4c1,0.9,1.5,2.1,1.5,3.6
		c0,1.9-0.7,3.7-2.1,5.5c-1.4,1.7-3.5,3.3-6.2,4.8c-1.8,1-3.7,1.8-5.8,2.6c-2.1,0.8-3.1,1.3-3.1,1.5c0,0.4,1,1.4,3,3.1
		s4.6,3.6,7.6,5.7l-1.6,2.1c-3.5-2.3-6.2-4.3-8.3-6.2c-2-1.8-3.1-3.1-3.1-3.9c0-0.5,0.9-1.2,2.8-2.1c1.9-0.8,3.5-1.7,4.7-2.4
		c3-1.8,5.3-3.7,7-5.7c1.6-2,2.4-4,2.4-5.9c0-1-0.3-1.8-0.8-2.4c-0.5-0.6-1.3-0.9-2.1-0.9c-2.8,0-5.9,2.5-9.2,7.4
		C124.3,27.9,120.7,35.2,116.9,45z"/>
	      <path d="M146.4,42.4l0.2,0.4c-1,0.8-1.9,1.4-2.8,1.8c-0.9,0.4-1.7,0.6-2.5,0.6c-1,0-1.8-0.3-2.4-0.8
		c-0.6-0.6-0.8-1.4-0.8-2.4c0-1.5,0.7-3,2.2-4.3c1.4-1.3,3-2,4.8-2c0.9,0,1.6,0.2,2.1,0.6c0.5,0.4,0.8,1,0.8,1.7
		c0,1-0.6,1.8-1.8,2.6c-1.2,0.7-3.1,1.4-5.6,2c0,0.6,0.2,1,0.5,1.3c0.3,0.3,0.7,0.4,1.3,0.4c0.6,0,1.3-0.2,2-0.5
		C144.9,43.4,145.6,42.9,146.4,42.4z M140.4,41.8c1.7-0.3,3.1-0.9,4.1-1.8c1.1-0.8,1.6-1.7,1.6-2.7c0-0.4-0.1-0.7-0.3-0.9
		c-0.2-0.2-0.5-0.3-0.8-0.3c-0.9,0-1.8,0.5-2.7,1.6C141.5,38.7,140.8,40.1,140.4,41.8z"/>
	      <path d="M148.8,54.2l-2.4,0.2l4.9-18.4l2.7-0.5l-2.6,8.8c1.2-2.9,2.4-5.1,3.7-6.6c1.3-1.5,2.5-2.3,3.8-2.3
		c0.7,0,1.3,0.2,1.7,0.7c0.4,0.5,0.7,1.1,0.7,1.8c0,1.7-0.7,3.3-2.1,4.8c-1.4,1.5-2.9,2.2-4.6,2.2c-0.2,0-0.5,0-0.7-0.1
		c-0.3,0-0.6-0.2-0.9-0.3l0.2-0.7c0.1,0,0.2,0.1,0.3,0.1c0.6,0.2,1.1,0.3,1.3,0.3c0.9,0,1.8-0.7,2.6-2c0.8-1.3,1.2-2.8,1.2-4.4
		c0-0.4-0.1-0.7-0.2-0.9c-0.2-0.2-0.4-0.3-0.7-0.3c-1.2,0-2.6,1.6-4.3,4.9C151.6,45,150.1,49.1,148.8,54.2z"/>
	      <path d="M171.1,39.3c-1,2-2,3.4-3,4.4c-1,0.9-2,1.4-3.1,1.4c-0.8,0-1.4-0.2-1.9-0.7c-0.5-0.5-0.7-1.1-0.7-1.9
		c0-1.8,0.8-3.4,2.3-4.8c1.6-1.4,3.4-2.1,5.4-2.1c0.3,0,0.5,0,0.7,0c0.2,0,0.4,0.1,0.6,0.1l-0.4,1c-0.3-0.2-0.6-0.4-0.9-0.5
		c-0.3-0.1-0.5-0.1-0.7-0.1c-1,0-2,0.7-3,2.1c-1,1.4-1.5,2.8-1.5,4.1c0,0.5,0.1,0.9,0.3,1.1c0.2,0.3,0.5,0.4,0.9,0.4
		c0.8,0,1.7-0.6,2.6-1.8c0.9-1.2,2-3.3,3.4-6.2l2.7-0.1l-2.4,6.9c-0.1,0.2-0.1,0.4-0.2,0.6s-0.1,0.3-0.1,0.4c0,0.2,0.1,0.3,0.2,0.4
		c0.1,0.1,0.2,0.1,0.4,0.1c0.3,0,0.6-0.1,1.1-0.4c0.5-0.3,1-0.7,1.7-1.3l0.2,0.4c-0.7,0.7-1.5,1.3-2.2,1.7c-0.7,0.4-1.4,0.6-2,0.6
		c-0.6,0-1-0.1-1.3-0.4c-0.3-0.3-0.5-0.7-0.5-1.2c0-0.2,0.1-0.6,0.3-1.3l0-0.1L171.1,39.3z"/>
	      <path d="M176.2,45l2.3-8.8l2.5-0.4l-1.7,5.8c1.1-2,2.1-3.5,3.1-4.4c1-1,1.8-1.5,2.6-1.5c0.5,0,0.8,0.1,1,0.4
		c0.2,0.3,0.3,0.7,0.3,1.3c0,0.3,0,0.6-0.1,0.9c-0.1,0.3-0.1,0.7-0.2,1.2l-2,0.3l0-0.1c0.3-1.1,0.4-1.8,0.4-2.1c0-0.2,0-0.3-0.1-0.4
		c-0.1-0.1-0.2-0.2-0.3-0.2c-0.6,0-1.5,0.7-2.5,2.2c-1,1.5-2.1,3.5-3.1,5.9H176.2z"/>
        </g>
      </svg>
      <!--<![endif]-->
  </a> <!-- svg-logo -->

  <span class="snav-toggle">
    <i class="cla3"></i>
    <i class="cla1"></i>
    <i class="cla2"></i>
  </span> <!-- snav-toggle -->


  <div class="nav-main">
    <a selected><i class="icon-home"></i>首页</a>
    <a><i class="icon-bars22"></i>内容</a>
    <a><i class="icon-newtab"></i>扩展</a>
    <a><i class="icon-screen"></i>系统</a>
  </div>

  <div class="user">
     <span>hello, administrator</span>
     <span class="avatar"></span>
     <span class="icon-arrow-down6"></span>
  </div><!-- user -->
</div><!-- header -->

<div class="body snav-mini">

   <div class="nav-slide">

      <div class="snav-wrapper">
         <div class="nav">
           <a class="bar"><i class="icon-desktop-windows"></i><span>用户设置</span></a>
             <ul>
               <a href=""><i class="icon-desktop-windows"></i>分组管理</a>
               <a href=""><i class="icon-desktop-windows"></i>威望管理</a>
               <a href=""><i class="icon-desktop-windows"></i>积分管理</a>
               <a href=""><i class="icon-desktop-windows"></i>权限管理</a>
             </ul>
          </div> <!-- nav -->

	      <div class="nav">
	         <a class="bar"><i class="icon-desktop-windows"></i><span>系统设置</span></a>
	         <ul>
	           <a href="">水印管理</a>
	           <a href="">缩略图管理</a>
	         </ul>
	      </div> <!-- nav -->

	      <div class="nav">
	         <a class="bar"><i class="icon-desktop-windows"></i><span>数据库设置</span></a>
	         <ul>
	           <a href="">在线备份</a>
	           <a href="">SQL命令</a>
	           <a href="">恢复最近状态</a>
	         </ul>
	      </div> <!-- nav -->


	      <div class="nav">
	         <a class="bar"><i class="icon-desktop-windows"></i><span>管理员设置</span></a>
	         <ul>
	           <a href="">在线备份</a>
	           <a href="">SQL命令</a>
	           <a href="">恢复最近状态</a>
	         </ul>
	      </div> <!-- nav -->

      </div> <!-- snav-wrapper -->

      <div class="bottom">
          <a class="icon-contract2 flex-btn"></a>
          <div class="copyright hidden">CopyRight &copy; 2014 56HM Designer</div>
      </div>

   </div> <!-- nav-slide -->



   <div class="content">
     <iframe src="http://localhost/phpcms_v9/"></iframe>
   </div>

</div><!-- body -->





<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>