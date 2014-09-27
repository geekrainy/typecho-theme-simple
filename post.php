<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <h2 class="outline">Article Content</h2>
    <article class="postin">
        <h3 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
        <ul class="post-meta">
            <li><?php _e('Author：'); ?><?php $this->author(); ?></li>
            <li><?php _e('Date：'); ?><?php $this->date('F j, Y'); ?></li>
            <li><?php _e('Category：'); ?><?php $this->category(','); ?></li>
        </ul>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
        <p class="tags"><?php _e('Tags：'); ?><?php $this->tags(', ', true, 'none'); ?></p>
    </article>
    <?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
