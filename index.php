<?php
/**
 * DONG 1.1
 * 
 * @package DONG
 * @author Tamshen
 * @version 1.1
 * @link http://tamshen.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="mdui-container mdui-row-xs-1 mdui-row-sm-1 mdui-row-md-3 mdui-row-lg-4 mdui-row-xl-4 mdui-grid-list mdui-center  mdui-p-t-4">
<?php while($this->next()): ?>
	    <a href='<?php $this->permalink() ?>';">
  <div class="mdui-col mdui-p-x-1  mdui-p-t-4">
  	<div class="mdui-card mdui-shadow-0">
  <div class="mdui-card-media postbg" style="background-image: url(<?php echo showThumb($this,null,true); ?>);">
    
  </div>

      <div class="mdui-card-primary   mdui-p-t-1 mdui-p-b-0">
        <div class="mdui-card-primary-title"><?php $this->title(11, ' ...') ?></div>
        <div class="mdui-card-primary-subtitle"><?php $this->category(',', false); ?></div>
      </div>


  <div class="mdui-card-content  mdui-p-y-1" style="height: 120px;"><?php $this->excerpt(88, ' ...'); ?></div>
  </a>
</div>
  
  </div>
  
  
  <?php endwhile; ?>
  	
  	<!--
      	作者：774024602@qq.com
      	时间：2017-11-18
      	描述：
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>  -->


</div>

<!-- end #post list-->


<?php $this->need('footer.php'); ?>
