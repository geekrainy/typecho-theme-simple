<?php
/**
 * Music
 *
 * @package custom
 */
 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 	<h2 class="outline">MusicBox</h2>
    <article class="postin">
		<h3 class="outline"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
		<div class="musicbox" style="overflow:hidden; width:630px; height:186px; " ><iframe name="iframe_canvas" src="http://douban.fm/partner/baidu/doubanradio" scrolling="no" frameborder="0" width="422" height="186"></iframe><p style="font-size:160px; text-align:center; float:right; display:block; width:180px; height:186px; line-height:100%; letter-spacing:15px; margin:0;">:)</p></div>
        
        <!-- 音乐文章列表开始 -->
        <?php $this->widget('Widget_Archive@myCustomCategory', 'pageSize=500&type=category', 'mid=18')->to($categoryPosts); ?>
        <?php while($categoryPosts->next()): ?>
		<div class="post-content"><?php $categoryPosts->content('Read More...'); ?></div>
        <?php endwhile; ?>
        <!-- 音乐文章列表结束 -->

	</article>
	<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>