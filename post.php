<?php $this->need('header.php'); ?>
<style>
	.post{
	max-width: 860px;
	margin: 0 auto;
	background: #fff;
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
<div class="post mdui-img-rounded mdui-shadow-1">
	<!--顶部-->
	<div class="mdui-grid-tile topbg mdui-shadow-0" style="background-image: url(<?php echo showThumb($this,null,true); ?>);">
 		<div class="mdui-grid-tile-actions">


    <div class="mdui-grid-tile-text">
      <div class="mdui-grid-tile-title"><?php $this->title() ?></div>
      <div class="mdui-grid-tile-subtitle">
      	<span class="g"><?php $this->author->gravatar('36') ?></span>
      	<span><?php $this->author(); ?> · <?php $this->date('Y-m-d'); ?> · </span>
      	<span><?php get_post_view($this); ?> Views</span>
      	
      	</div>
    </div>
    <!--分享-->
  <div class="mdui-grid-tile-buttons">
  <button class="mdui-btn mdui-btn-icon mdui-ripple" mdui-dialog="{target: '#share'}"><i class="mdui-icon material-icons">&#xe80d;</i></button>
  <div class="mdui-dialog mdui-text-center" id="share">
  <ul class="mdui-list">
  <a mdui-dialog-close href="http://service.weibo.com/share/share.php?appkey=&amp;title=<?php $this->title() ?>&amp;url=<?php $this->permalink() ?>&amp;pic=<?php echo showThumb($this,null,true); ?>&amp;searchPic=false&amp;style=simple" target="_blank">
  <li class="mdui-list-item mdui-ripple">
    <div class="mdui-list-item-content">分享到 Weibo</div>
  </li>
  </a>
  <a mdui-dialog-close href="https://twitter.com/intent/tweet?text=<?php $this->title() ?>&amp;url=<?php $this->permalink() ?>&amp;via=<?php $this->author(); ?>" target="_blank">
  <li class="mdui-list-item mdui-ripple">
    <div class="mdui-list-item-content">分享到 Twitter</div>
  </li>
  </a>
  <a mdui-dialog-close href="http://connect.qq.com/widget/shareqq/index.html?site=<?php $this->options->title(); ?>&amp;title=<?php $this->title() ?>&amp;summary=<?php $this->excerpt(30, '...'); ?>&amp;pics=<?php echo showThumb($this,null,true); ?>&amp;url=<?php $this->permalink() ?>" target="_blank">
  <li class="mdui-list-item mdui-ripple">
    <div class="mdui-list-item-content">分享到 QQ</div>
  </li>
  </a>
  <a mdui-dialog-close href="https://telegram.me/share/url?url=<?php $this->permalink() ?>&text=<?php $this->title() ?>" target="_blank">
  <li class="mdui-list-item mdui-ripple">
    <div class="mdui-list-item-content">分享到 Telegram</div>
  </li>
  </a>
  <li class="mdui-list-item mdui-ripple">
    <div class="mdui-list-item-content" mdui-dialog-close>取消</div>
  </li>
  </ul>
  </div>
  </div>

    
   
		</div>
		
	</div>



  
	
	<!--正文-->
		<div class="mdui-card-content mdui-text-color-grey-600 mdui-p-r-5 mdui-p-l-5">
			
			<?php $this->content(); ?>
			 
	<!--音乐-->
	<?php if(isset($this->fields->m163)){
  echo '<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width="100%" height="86" 
		src="https://music.163.com/outchain/player?type=2&amp;id='.$this->fields->m163;
  echo '&amp;auto=1&amp;height=66"></iframe>';}else{}; ?>
    <!--标签-->
    <div class="mdui-typo-caption-opacity mdui-m-t-1">
    	<i class="mdui-icon material-icons tag">loyalty</i>
    	<span>
    	<?php $this->category('&nbsp;', false); ?>
    	<?php $this->tags('&nbsp;', false, ''); ?>
    	</span>
    </div>
    
    
    
    
	</div>
	
    
    
    
    
	<!--分享点赞-->

<div class="mdui-menu-item mdui-text-center mdui-p-a-5">

  
	
	<button class="mdui-btn mdui-btn-icon mdui-ripple mdui-hidden-sm-down" mdui-menu="{target: '#qrcode',align:'left',covered:false}"> <i class="mdui-icon material-icons">phonelink</i></button >
	<div class="mdui-menu mdui-menu-cascade" id="qrcode" style="transform-origin: 100% 0px 0px; position: fixed;">
		

	<li class="mdui-menu-item"> <a class="mdui-text-center" href="javascript:;">在其它设备中阅读本文章</a> </li> 
		<li class="mdui-menu-item"> 
			<img class="mdui-center" src="https://pan.baidu.com/share/qrcode?w=200&amp;h=200&amp;url=<?php $this->permalink() ?>" alt=""> </li> 

</div>

<button class="mdui-btn mdui-btn-icon mdui-ripple" mdui-dialog="{target: '#reward'}"> <i class="mdui-icon material-icons">local_atm</i></button >   	
<div class="mdui-dialog" id="reward">
<div class="mdui-tab mdui-tab-centered mdui-p-a-1" mdui-tab>
<a href="#AliPay" class="mdui-ripple mdui-tab-active">AliPay</a>
<a href="#WeChatPay" class="mdui-ripple">WeChatPay</a></div>
<div id="AliPay" class="mdui-p-a-2"><img class="payqrcode" src="<?php $this->options->themeUrl('images/alipay.svg'); ?>"/></div>
<div id="WeChatPay" class="mdui-p-a-2"><img class="payqrcode" src="<?php $this->options->themeUrl('images/WeChat.svg'); ?>"/></div>
<div class="mdui-p-a-2" mdui-dialog-close><button class="mdui-btn mdui-color-theme-accent mdui-ripple">Close</button></div>
</div>

</div>
	

	

	
	



	
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>