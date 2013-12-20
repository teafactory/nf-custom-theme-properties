<?php
	if($_POST['nfctp_hidden'] == 'Y') {
		//Form data sent
		$nfctp_logo_image = $_POST['nfctp_logo_image'];
		update_option('nfctp_logo_image', $nfctp_logo_image);
		$nfctp_top_image = $_POST['nfctp_top_image'];
		update_option('nfctp_top_image', $nfctp_top_image);

?>
<div class="updated"><p><strong><?php _e('設定が変更されました。' ); ?></strong></p></div>
<?php
	} else {
		//Normal page display
		$nfctp_logo_image = get_option('nfctp_logo_image');
		$nfctp_top_image = get_option('nfctp_top_image');
		//echo 'aaaa';
		//echo $nfctp_logo_image;
	}
?>
	
	

<div class="wrap">
	<?php    echo "<h2>" . __( 'カスタムテーマ設定' ) . "</h2>"; ?>
	<form name="nfctp_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<input type="hidden" name="nfctp_hidden" value="Y">
		<div id="nfctp_wrapper">
			<dl  class="clearfix">
				<dt><?php _e("ロゴ画像：" ); ?></dt><dd><input id="input_nfctp_logo_image" type="text" name="nfctp_logo_image" value="<?php echo $nfctp_logo_image ?>" size="50">
				<a onclick="return false;" title="Add Media" class="thickbox add_image" href="media-upload.php?type=image&amp;TB_iframe=true&amp;width=640&amp;height=105">Upload/Insert <img src="<?php print get_bloginfo('wpurl'); ?>/wp-admin/images/media-button.png?ver=20111005" width="15" height="15"></a><p></p></dd>
				<dt><?php _e("トップページ画像：" ); ?></dt><dd><input type="text" name="nfctp_top_image" value="<?php echo $nfctp_top_image ?>" size="50">
				<a onclick="return false;" title="Add Media" class="thickbox add_image" href="media-upload.php?type=image&amp;TB_iframe=true&amp;width=640&amp;height=105">Upload/Insert <img src="<?php print get_bloginfo('wpurl'); ?>/wp-admin/images/media-button.png?ver=20111005" width="15" height="15"></a><p></p></dd>
			</dl>		
			<p class="submit">
			<input type="submit" name="Submit" value="<?php _e('更新する') ?>" />
			</p>
		</div>	
	</form>
</div>