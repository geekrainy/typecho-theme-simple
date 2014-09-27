RainyWhite
==========

RainyWhite1.3 for Typecho 

使用说明：
---------

1. 主题适用于Typecho0.9、1.0版本。
2. 主题需要的插件支持：
   - [Avatars](https://github.com/jzwalk/Avatars)(jzwalk)
   - [Links](http://www.imhan.com/typecho/)(hanny)
   - [Smilies](https://github.com/jzwalk/Smilies)(jzwalk)  
3. 请使用about.php建立关于页面，；archives.php为归档页；music.php为博客音乐页面，实际为引用的音乐分类列表，需修改第17行`<?php $this->widget('Widget_Archive@myCustomCategory', 'pageSize=500&type=category', 'mid=18')->to($categoryPosts); ?>`的mid=`18`为自己的音乐分类的mid值,即为后台分类管理中分类链接中的mid。

License:
--------
MIT
