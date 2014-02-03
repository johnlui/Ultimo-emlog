<?php 
/*
* 首页日志列表部分
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="content">
<div id="contentleft">
<?php doAction('index_loglist_top'); ?>
<?php foreach($logs as $value): ?>
	<div class="post">
	<div class="title"><h2><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2></div>
	<p class="postmeta"><?php blog_author($value['author']); ?> <?php blog_sort($value['logid']); ?> <?php echo gmdate('Y.n.j', $value['date']); ?> 浏览 <?php echo $value['views']; ?> 次 
	<?php editflg($value['logid'],$value['author']); ?>
	<span class="comments"><a href="<?php echo $value['log_url']; ?>#comments"><?php echo $value['comnum']; ?> 条评论</a></span>
	</p>
	<div class="entry"><?php echo $value['log_description']; ?></div>
	<div class="postmeta_bottom">
	<p class="tag"><?php blog_tag($value['logid']); ?></p>
	<p class="count">
	<!--a href="<?php echo $value['log_url']; ?>#comments">评论(<?php echo $value['comnum']; ?>)</a>
	<a href="<?php echo $value['log_url']; ?>#tb">引用(<?php echo $value['tbcount']; ?>)</a>
	<a href="<?php echo $value['log_url']; ?>">浏览(<?php echo $value['views']; ?>)</a-->
	</p>
	<div style="clear:both;"></div>
	</div><!--end of .postmeta_bottom-->
	</div><!--end of #post-->
<?php endforeach; ?>

<div id="pagenavi">
	<?php echo $page_url;?>
</div>

</div><!-- end #contentleft-->
<?php
 include View::getView('side');
 include View::getView('footer');
?>