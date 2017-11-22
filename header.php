<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 
    <link rel="stylesheet" href="//cdnjscn.b0.upaiyun.com/libs/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">-->
	
	<link href="<?php $this->options->themeUrl('css/mdui.min.css'); ?>" rel="stylesheet" type="text/css">
	<script src="<?php $this->options->themeUrl('js/mdui.min.js'); ?>" type="text/javascript"></script> 
	<style>body{font-family: "microsoft yahei";background-color: #f4f4f4;}
	a {
	color:#3354AA;
	text-decoration:none;
}
a:hover,a:active {
	color:#444;
}
.postbg{
	  	height: 226px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    background-origin: border-box;
}

</style>
    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class=" mdui-theme-accent-pink mdui-theme-primary-blue" >
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header id="header" class="mdui-hidden-md-down">
<div class="mdui-appbar mdui-appbar-fixed mdui-appbar-scroll-hide mdui-color-white mdui-shadow-0">
  <div class="mdui-container mdui-toolbar ">
  	<a href="<?php $this->options->siteUrl(); ?>">
    <span class="mdui-btn mdui-btn-icon"><img src="https://q.qlogo.cn/g?b=qq&nk=774024602@qq.com&s=100"/></span>
    <span class="mdui-typo-headline "><?php $this->options->title(); ?></span>
    </a>
    <div class="mdui-toolbar-spacer"></div>
    <a<?php if($this->is('index')): ?> class="mdui-text-color-theme-accent"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
    <?php while($pages->next()): ?>
    <a<?php if($this->is('page', $pages->slug)): ?> class="mdui-text-color-theme-accent"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
    <?php endwhile; ?>
<button class="mdui-textfield-icon mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">search</i></button>




  </div>
</div>
</header> 
<!--end #PC header -->

<button class="mdui-hidden-lg-up mdui-btn mdui-btn-icon mdui-m-t-3 mdui-m-l-3" style="position: fixed;z-index: 520;" mdui-drawer="{target: '#left-drawer'}"><i class="mdui-icon material-icons">menu</i></button>
  <div class="mdui-drawer mdui-drawer-close" id="left-drawer">
    手机抽屉
  <button class="mdui-btn" mdui-drawer-close>close</button>
  </div>
<!--end #MB header -->

    
    
