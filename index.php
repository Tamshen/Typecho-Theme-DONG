<?php
/**
 * DONG
 * 
 * @package DONG
 * @author DONGYu
 * @version 1.0
 * @link http://www.dongyu.site
 */
 $this->need('header.php');?>

<style>
.post{
max-width: 860px;
margin: 0 auto;
/*background: #fff;*/
}
.topbg{
height: 300px;background-repeat: no-repeat;
background-size: cover;
background-position: center center;
background-origin: border-box;
}
.tag{
font-size: 16px;
padding-bottom:3px ;
}
.g img{
display: inline-block;
width: 18px;
height: 18px;
border-radius: 100%;
margin-bottom:-4px ;
}
.mdui-card-content img{
display: inline-block;
max-width: 100%;
height: auto;
background-color: #F0F2F4;
border: none;
}
#qrcode {
padding-bottom: 0px;
width: 215px;
}
#reward .payqrcode{
	width: 50%;
}
</style>


<div class="mdui-row-xs-1 mdui-row-sm-1 mdui-row-md-3 mdui-row-lg-5 mdui-row-xl-5 mdui-grid-list">
	


<?php while($this->next()): ?>
	
  <div class="mdui-col mdui-p-a-2">
  	<div class="mdui-card">
  <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
  <div class="mdui-card-media">
    <img src="<?php echo showThumb($this,null,true); ?>"/>
    
    
    <!-- 卡片中可以包含一个或多个菜单按钮 -->
    <div class="mdui-card-menu">
      <button class="mdui-btn mdui-btn-icon mdui-text-color-white"><i class="mdui-icon material-icons">share</i></button>
    </div>
  </div>
  <!-- 卡片头部，包含头像、标题、副标题 -->
  <div class="mdui-card-header">
    <img class="mdui-card-header-avatar" src="https://q.qlogo.cn/g?b=qq&nk=774024602@qq.com&s=100"/>
    <div class="mdui-card-header-title"><?php $this->title() ?></div>
    <div class="mdui-card-header-subtitle">DONGYu</div>
  </div>

  <!-- 卡片的内容 -->
  <div class="mdui-card-content"><?php $this->content('Continue Reading...'); ?>	</div>
  
  <!-- 卡片的按钮 -->
  <div class="mdui-card-actions">
    <!-- <button class="mdui-btn mdui-ripple">action 1</button>
    <button class="mdui-btn mdui-ripple">action 2</button>-->
    <button class="mdui-btn mdui-btn-icon mdui-float-right"><i class="mdui-icon material-icons">expand_more</i></button>
  </div>
  
</div>

  </div>
  
  
  <?php endwhile; ?>
  	
  	

</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>