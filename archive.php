<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
        <h2 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 "%s" 下的文章'),
            'search'    =>  _t('包含关键字 "%s" 的文章'),
            'tag'       =>  _t('标签 "%s" 下的文章'),
            'author'    =>  _t('"%s" 发布的文章')
        ), '', ''); ?></h2>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
            <article class="postin archli">
    			<h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
    			<ul class="post-meta">
    				<li><?php _e('Author：'); ?><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></li>
    				<li><?php _e('Date：'); ?><?php $this->date('F j, Y'); ?></li>
    				<li><?php _e('Category：'); ?><?php $this->category(','); ?></li>
                    <li><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('Leave a Reply', '1 Comment', '%d Comments'); ?></a></li>
    			</ul>
                <div class="post-content">
        			<?php $this->excerpt('200','……'); ?>
                </div>
    		</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <div class="error-page">
				<p><em>NO</em></p>
            </div>
        <?php endif; ?>

        <?php $this->pageNav('&laquo; ', ' &raquo;'); ?>
<?php $this->need('footer.php'); ?>
