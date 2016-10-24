<?php
/**
 * @package Simple
 * @author Rainy
 * @version 1.3
 * @link http://rainylog.com
 */
 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 	<h2 class="outline">Article List</h2>
		<?php while($this->next()): ?>
		<article class="post">
		<a href="<?php $this->permalink() ?>">
			<h3><?php $this->title() ?></h3>
			<div class="pocontent"><?php $this->excerpt('200','……'); ?></div>
		</a>
		</article>
		<?php endwhile; ?>
	<?php $this->pageNav('&laquo; ', ' &raquo;'); ?>
<?php $this->need('footer.php'); ?>
