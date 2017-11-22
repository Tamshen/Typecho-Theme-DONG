<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="mdui-m-t-5">
    <div class="mdui-color-theme">
    	<div class="mdui-container">
    		<div class="mdui-text-center">
    			<div class="mdui-col mdui-text-center mdui-p-a-5"> 
    				    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.<span style="color: #e06870;">♥</span>
    

           </div>
    		</div>
    	</div>
    </div>
    
    
</footer>
<?php $this->footer(); ?>
</body>
</html>
