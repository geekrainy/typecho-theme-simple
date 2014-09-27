<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</section><!-- end #articlelist -->
<footer id="footer" role="contentinfo">
    <div class="container">&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by <a href="http://www.typecho.org">Typecho</a>'); ?>. Designed by <a href="http://rainylog.com">Rainy.</a>
	</div>
	<div id="toTop"><a href="javascript:;">Top</a></div>
</footer><!-- end #footer -->
<script>
	$(document).ready(function(){
	$(function(){
    $("#toTop").click(function(){
        $("html,body").animate({scrollTop:0},"normal");
        return false;
    });    
	});
	});
</script>
<?php $this->footer(); ?>
</div>
</body>
</html>
