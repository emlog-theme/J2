<?php 
/**
 * 页面底部信息
 */
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<footer class="footer">
	<div class="container">
		<div class="copyright">
			<ul class="co">
				<li class="fo"><a href="http://blog.jjonline.cn" target=_blank>晶晶的博客</a>&copy;<?php echo date('Y')?></li>
				<li class="fo foh"><i class="fa fa-hand-o-right"></i> 支持国产软件<a href="http://www.emlog.net" target=_blank>emlog</a></li>
				<li class="fo foh"><i class="fa fa-hand-o-right"></i> <a href="http://blog.jjonline.cn/theme/J2.html">勾贰(J2)主题</a></li>
				<?php if(!empty($icp)):?><li class="fo foh"><a href="http://www.miibeian.gov.cn" target="_blank"><?php echo $icp; ?></a></li><?php endif;?>
				<?php if (Option::get('rss_output_num')):?><li class="pull-right"><a href="<?php echo BLOG_URL; ?>rss.php" title="RSS订阅" target=_blank>订阅RSS</a></li><?php endif;?>
			</ul>
		</div>
	</div>
</footer>
<?php doAction('index_footer'); ?>
<div class="scrollTop">
	<button class="fa fa-angle-double-up fadeUp" title="回顶部"><i class="icon-eject icon-white"></i></button>
</div>
<?php echo $footer_info;/*统计代码*/ ?>
<script type='text/javascript'>
 prettyPrint();
 window._info = {
   logid:<?php echo !empty($logid)?$logid:'null';?>,
   url:'<?php echo BLOG_URL; ?>',
   tpl:'<?php echo TEMPLATE_URL; ?>'
 };
</script>
<script type='text/javascript' src='http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?php echo TEMPLATE_URL; ?>static/view.js'></script>
</body>
</html>