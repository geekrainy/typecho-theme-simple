<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    } 
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
?>
 
<li id="<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->_levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass; 
?>">
    <div class="comment-author">
        <?php $comments->gravatar('32', ''); ?>
		<cite class="fn"><?php $comments->author(); ?></cite>
    </div>
    <div class="comment-meta">
        <a href="<?php $comments->permalink(); ?>"><?php $comments->date('Y-m-d H:i'); ?></a>
		<span class="comment-reply"><?php $comments->reply('Reply'); ?></span>
    </div>
    <div class="comment-content">
    <?php $comments->content(); ?>    
	</div>

    <?php if ($comments->children) { ?>
<div class="comment-children">
    <?php $comments->threadedComments($options); ?>
</div>
<?php } ?>
</li>
<?php } ?>
<div id="comments">
    <h3 class="outline">Comment</h3>
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h4><?php $this->commentsNum(_t('No Comment'), _t('Only 1 Comment'), _t(' %d Comments')); ?></h4>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; ', ' &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h4 id="response"><?php _e('Leave Comment'); ?></h4>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('Login User：'); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout'); ?> &raquo;</a></p>
            <?php else: ?>
            <p>
                <label for="author" class="required"><?php _e('Name'); ?></label>
                <input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
            </p>
            <p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('Email'); ?></label>
                <input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
            </p>
            <p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('Website'); ?></label>
                <input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
            </p>
            <?php endif; ?>
    		<div class="comment-area">
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
                <!-- 评论表情插件开始 -->
                <?php if (isset($this->options->plugins['activated']['Smilies'])) : ?>
                <?php Smilies_Plugin::output(); ?>
                <?php endif; ?>
                <!-- 评论表情插件结束 -->
            </div>
                <button type="submit" class="submit"><?php _e('Submit'); ?></button>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('Comments Off'); ?></h3>
    <?php endif; ?>
</div>