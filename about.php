<?php
/**
 * About
 *
 * @package custom
 */
 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 	<h2 class="outline">About</h2>
	<article class="postin">
		<div id="about">
		<!-- 添加关于项目标题使用<h3></h3>标签 -->
		<!-- 授权协议开始 -->
		<h3>CONTENT</h3>
		<p>采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/cn/">知识共享署名-非商业性使用-禁止演绎 3.0 中国大陆许可协议</a>进行许可，转载请务必署名并注明原文链接，未经允许不得用于商业用途。</p><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/cn/80x15.png">
		<!-- 授权协议结束 -->

		<!-- 读者列表开始，需安装 Avatars 插件 -->
		<?php if (isset($this->options->plugins['activated']['Avatars'])) : ?>
		<h3>READER</h3>
		<div  class="avatar clearfix">
		<?php Avatars_Plugin::output('div','mostactive'); ?>
		</div>
		<?php endif; ?>
		<!-- 读者列表结束 -->

		<!-- 友情链接开始，需安装友情链接插件 Links -->
		<?php if (isset($this->options->plugins['activated']['Links'])) : ?>
		<h3>LINKS</h3>
		<div class="links"><ul><?php Links_Plugin::output(); ?></ul></div>
		<?php endif; ?>
		<!-- 友情链接结束 -->

		</div>
		<div class="post-content">
		<?php $this->content(); ?>
		</div>
	</article>
	<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>