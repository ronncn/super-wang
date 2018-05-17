<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, minimum-scale = 1.0, maximum-scale=1.0, userscalable = no" />
    <meta http-equiv="Content-Language" content="zh-CN" />
    <meta name="Author" content="王龙" />
    <meta name="Copyright" content="wanglong.work" />
    <meta name="keywords" content="个人网站，区块链，计算机技术，PHP，站长，技术博客，博客，个人博客,博客,王龙,程序员,软件开发,区块链,以太坊,ethku.com" />
    <meta name="description" content="王龙的个人博客空间，我是一个技术宅，对新鲜的计算机技术感兴趣！" />
    <!--<link rel="Shortcut Icon" href="网站.ico图标路径" />-->
    <link type="text/css" rel="stylesheet" href="css/index.css" />
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
<div class="top">
    <div class="center">
        <br><br>
        <br><br>
        <h1 style="font-size: 30px; color: #fff;">王龙的个人网站</h1>
        <br>
        <p style="font-size: 16px; color:#fff;">人不要等明天，因为没有人知道自己有没有明天。</p>
    </div>
</div>
<div class="main">
    <div class="center" style="font-size: 16px; margin: 20px auto">
		<p>
        <?php
            $ip = $_SERVER["REMOTE_ADDR"];
            $name = $_SERVER['HTTP_HOST'];
            echo "Hello Dear({$ip})! Welcome to {$name}";
        ?></p>
        <p><a href="location.html">HTML5显示地理位置定位</a></p>
        <p><a href="css3-3d/">HTML5 3D线条旋转动态</a></p>
		<p><a href="downfile.php">京东区块链技术实践白皮书pdf-点击下载</a></p>
		<p><a href="css-switch.html">HTML5开灯关灯显示</a></p>
    </div>
</div>
<div class="foot">
    <div class="center">
        <p>Copyright © 2017-2018 wanglong.work 版权所有 鲁ICP备12044334号-1</p>
    </div>
</div>
</body>
</html>
