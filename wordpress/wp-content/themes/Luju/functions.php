<?php

//主题设置开始
add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );
function extra_user_profile_fields( $user ) { ?>
<h3>主题设置</h3>
<table class="form-table">
<tr>
<th><label for="banner_one">Banner第一行文字</label></th>
<td><input type="text" name="banner_one" id="banner_one" value="<?php esc_attr_e( get_the_author_meta( 'banner_one', $user->ID ) ); ?>" class="regular-text"></td>
</tr>
<tr>
<th><label for="banner_two">Banner第二行文字</label></th>
<td><input type="text" name="banner_two" id="banner_two" value="<?php esc_attr_e( get_the_author_meta( 'banner_two', $user->ID ) ); ?>" class="regular-text"></td>
</tr>
<tr>
<th><label for="github">GitHub</label></th>
<td><input type="text" name="github" id="github" value="<?php esc_attr_e( get_the_author_meta( 'github', $user->ID ) ); ?>" class="regular-text"></td>
</tr>
</table>
<?php }
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );
function save_extra_user_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
	//更新
	update_usermeta( $user_id, 'banner_one', $_POST['banner_one'] );
	update_usermeta( $user_id, 'banner_two', $_POST['banner_two'] );
	update_usermeta( $user_id, 'github', $_POST['github'] );
}
//主题设置结束

//自定义摘要开始
function new_excerpt_length($length) {
return 90;
}
add_filter("excerpt_length", "new_excerpt_length");
function new_excerpt_more( $more ) {
return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">»</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
//自定义摘要结束

//注册菜单开始
if (function_exists('register_nav_menus')){
register_nav_menus( array(
   'header_nav' => __('顶部菜单')
) );
}
//注册菜单结束

?>