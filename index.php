<?php
include 'common.php';
$stat = Typecho_Widget::widget('Widget_Stat');
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台管理-Jack'Blog</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/font.css">
	<link rel="stylesheet" href="./css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="./lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="./index.php">Jack'Blog</a></div>
        <div class="left_open">
            <i title="展开左侧栏" class="iconfont">&#xe699;</i>
        </div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">shimian</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a onclick="x_admin_show('个人信息','/shimian/profile.php')">个人信息</a></dd>
              
              <dd><a href="<?php $options->logoutUrl(); ?>"><?php _e('登出'); ?></a></dd>
            </dl>
          </li>
          <li class="layui-nav-item to-index"><a href="/">网站</a></li>
        </ul>
        
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
     <!-- 左侧菜单开始 -->
    <div class="left-nav">
      <div id="side-nav">
        <ul id="nav">
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>控制台</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="/shimian/profile.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>个人设置</cite>
                            
                        </a>
                    </li >
                    <li>
                        <a _href="/shimian/plugins.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>插件</cite>
                            
                        </a>
                    </li>
					<li>
                        <a _href="/shimian/themes.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>外观</cite>
                            
                        </a>
                    </li>
					<li>
                        <a _href="/shimian/backup.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>备份</cite>
                            
                        </a>
                    </li>
                    <li>
                        
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="iconfont">&#xe723;</i>
                    <cite>撰写</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                                <a _href="/shimian/write-post.php">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>撰写新文章</cite>
                                    
                                </a>
                            </li>
							<li>
                                <a _href="/shimian/write-page.php">
                                    <i class="iconfont">&#xe6a7;</i>
                                    <cite>创建新页面</cite>
                                    
                                </a>
                            </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe726;</i>
                    <cite>管理员管理</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="/shimian/manage-posts.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理文章</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="/shimian/manage-pages.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>独立页面</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="/shimian/manage-comments.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理评论</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="/shimian/manage-categories.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理分类</cite>
                        </a>
                    </li >
					<li>
                        <a _href="/shimian/manage-tags.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理标签</cite>
                        </a>
                    </li >
					<li>
                        <a _href="/shimian/manage-medias.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理文件</cite>
                        </a>
                    </li >
					<li>
                        <a _href="/shimian/manage-users.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理用户</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6ce;</i>
                    <cite>设置</cite>
                    <i class="iconfont nav_right">&#xe697;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="/shimian/options-general.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>基本设置</cite>
                        </a>
                    </li >
                    <li>
                        <a _href="/shimian/options-discussion.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>评论</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="/shimian/options-reading.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>阅读</cite>
                        </a>
                    </li>
                    <li>
                        <a _href="/shimian/options-permalink.php">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>永久连接</cite>
                        </a>
                    </li>
                    
                </ul>
            </li>
            
                </ul>
            </li>
        </ul>
      </div>
    </div>
    <!-- <div class="x-slide_left"></div> -->
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
          <ul class="layui-tab-title">
            <li class="home"><i class="layui-icon">&#xe68e;</i>网站概要</li>
          </ul>
          <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='./welcome.html' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
          </div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
	
    <!-- 底部开始 -->
    <div class="footer">
        <div class="copyright">Copyright ©2018 隔壁老王 All Rights Reserved</div>
<div class="copyright">本后台由隔壁老王·基于<b><a href="http://x.xuebingsi.com/"><font color="White ">X-admin</font></b></a>开发</div>		
    </div>
    <!-- 底部结束 -->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?9f736c47e7fd46b402c6307bbff88eaf";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</body>
</html>
<?php include 'footer.php'; ?>