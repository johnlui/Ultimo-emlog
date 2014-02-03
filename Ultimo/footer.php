<?php 
/*
* 底部信息
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div style="clear:both;"></div>
</div><!--end #content-->
</div><!--end #wrap-->
<div id="footer">
	<div class="footer_wrapper">
 <?php echo $footer_info; ?>
<?php doAction('index_footer'); ?>

		Copyright &copy; <a href="<?php echo BLOG_URL; ?>" title="<?php echo $blogname; ?>"><?php echo $blogname; ?></a> <a href="http://www.miitbeian.gov.cn" target="_blank"><?php echo $icp; ?></a>

		<br />

		Proudly Powered By <a href="http://www.emloog.net" target="_blank">Emlog</a> and <a href="http://lvwenhan.com/blog/create/ultimo" title="lvwenhan.com" target="_blank">Ultimo Theme</a>


	</div>
</div><!--end #footer-->
</body>
</html>