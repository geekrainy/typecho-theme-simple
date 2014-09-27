<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
<!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<![endif]-->
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器.还在使用<strong>老迈的IE</strong>吗？, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div id="wrapper">
<header id="header" class="clearfix">
	<h1><a id="logo" href="<?php $this->options->siteUrl(); ?>" title="Rainy的博客"><?php $this->options->title() ?></a></h1>
	<p class="description"><?php $this->options->description() ?></p>
	<nav id="nav-menu" class="clearfix">
		<h2 class="outline">Main Menu</h2>
		<form id="search" method="post" action="./" role="search">
		<input id="search-input" type="text" name="s" class="inputbox" value="Search" onfocus="if (value =='Search'){value =''}" onblur="if (value ==''){value='Search'}">
		</form>
		<ul>
			<li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('HOME'); ?></a></li>
			<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
			<?php while($pages->next()): ?>
			<li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
			<?php endwhile; ?>
		</ul>
	</nav>
</header>
<!-- end #header -->
<section id="main">