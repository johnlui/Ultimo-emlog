<?php 
/*
* 阅读日志页面
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleft">
	<h2><?php topflg($top); ?><a title="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>"><?php echo $log_title; ?></a></h2>
	<p class="date">作者：<?php blog_author($author); ?> 发布于：<?php echo gmdate('Y-n-j G:i l', $date); ?> 
	<?php blog_sort($logid); ?> <?php editflg($logid,$author); ?>
	</p>
	<?php echo $log_content; ?>
	<div class="postmeta_bottom">
		<span class="tag"><?php blog_tag($logid); ?></span>
	</div>
		<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
	<?php doAction('log_related', $logData); ?>
	<?php blog_trackback($tb, $tb_url, $allow_tb); ?>
	<div id="comments">
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	</div>
	<div style="clear:both;"></div>
</div><!--end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>