<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title><?php if ( is_home() ) {
		bloginfo('name'); echo " - "; bloginfo('description');
	} elseif ( is_category() ) {
		single_cat_title(); echo " - "; bloginfo('name');
	} elseif (is_single() || is_page() ) {
		single_post_title();
	} elseif (is_search() ) {
		echo "搜索结果"; echo " - "; bloginfo('name');
	} elseif (is_404() ) {
		echo '页面未找到!';
	} else {
		wp_title('',true);
	} ?></title>
        <meta name="description" content="兴趣是最好的老师" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    </head>
    <body class="home-template">
        <nav class="main-nav clearfix">
            <div class="inner">
                <?php
                    $defaults = array(
                        'theme_location'  =>'header_nav',
                        'container'       => 'false',
                        'menu_class'      => 'nav',//ul 节点的 class 属性值
                        'fallback_cb'     => 'wp_page_menu',//用于没有在后台设置导航时调的回调函数
                    );
                    wp_nav_menu( $defaults );
                    ?>
                <div class="nav-extra">
<form action="/" method="get">          <input name="s" type="text" placeholder="回车用于发现我的PY交易！" id="s" value="<? the_search_query(); ?>" /></form>
                    <section id="results"></section> <a href="/rss">RSS</a>

                </div>
            </div>
        </nav>
        <div class="site-wrapper">
            <header class="main-header">
                <div class="main-header-content inner">
                     <h1 class="page-title"><a><?php the_author_meta('banner_one',1);?></a></h1>

                     <h2 class="page-description"><?php the_author_meta('banner_two',1);?></h2>
                </div>
            </header>