<?php
if(isset($_GET['author_name'])) :
$curauth = get_userdatabylogin($author_name);
else :
$curauth = get_userdata(intval($author));
endif;
?>
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
            <header class="main-header author-head">
                <figure class="author-image">
                    <div class="img" style="background-image: url(<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>)"><span class="hidden"></span>
                    </div>
                </figure>
                 <h1 class="author-title"><?php the_author(); ?></h1>
                 <h2 class="author-bio"><?php the_author_description(); ?></h2>
                <div class="author-meta"> <span class="author-stats"><?php the_author_posts(); ?> Posts</span> | <span class="author-stats"><script type="text/javascript">
if (localStorage.pagecount)
{
    localStorage.pagecount=Number(localStorage.pagecount) +1;
}else{
    localStorage.pagecount=1;
}
document.write("" + localStorage.pagecount + " Views");
</script></span>
                </div>
            </header>
<?php get_footer(); ?>