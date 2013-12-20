var targetInput = '';

jQuery(document).ready(function() {


	jQuery('.add_image').click(function(){ 
		targetInput = jQuery('input' ,jQuery(this).parent());
		formfield = jQuery('#upload_image').attr('name');
		tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
		return false;
	});

	window.send_to_editor = function(html) {
		imgurl = jQuery('img',html).attr('src');
		targetInput.val(imgurl);
		tb_remove();
		if(jQuery('#nfctp_wrapper dd input').length > 0) showTn();
	}
	
	if(jQuery('#nfctp_wrapper dd input').length > 0) showTn();
	
	

});

function showTn(){
	jQuery('#nfctp_wrapper dd input').each(function(i){
		if(jQuery(this).val() != ''){
			var mediaURL = jQuery(this).val();
				jQuery('p', jQuery(this).parent()).html('<img src="' + mediaURL + '" width="150" />');
		}
	});
}