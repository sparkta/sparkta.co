/**
 * @author CSSJockey
 */
jQuery(document).ready(function(){
	jQuery(".tddesc").addClass("cjhidden");
	jQuery(".tdvalue").addClass("cjhidden");
	jQuery(".heading1").click(function(){
		jQuery(".td1").toggleClass("cjhidden");
	})
	jQuery(".heading2").click(function(){
		jQuery(".td2").toggleClass("cjhidden");
	})
	jQuery(".heading3").click(function(){
		jQuery(".td3").toggleClass("cjhidden");
	})
	jQuery(".heading4").click(function(){
		jQuery(".td4").toggleClass("cjhidden");
	})
	jQuery(".heading5").click(function(){
		jQuery(".td5").toggleClass("cjhidden");
	})
	jQuery(".heading6").click(function(){
		jQuery(".td6").toggleClass("cjhidden");
	})
	jQuery(".heading7").click(function(){
		jQuery(".td7").toggleClass("cjhidden");
	})
	jQuery(".heading8").click(function(){
		jQuery(".td8").toggleClass("cjhidden");
	})
	jQuery(".heading9").click(function(){
		jQuery(".td9").toggleClass("cjhidden");
	})
	jQuery(".heading10").click(function(){
		jQuery(".td10").toggleClass("cjhidden");
	})
	jQuery("#cj_reset").bind("click", function(){
		if(confirm("Are you sure you want to reset all settings? This cannot be undone.")){
			return true;
		}else{
			return false;
		}
	});
	jQuery("#message").fadeOut(500);
	    jQuery('.wysiwyg').wysiwyg(
			{
		css : { fontSize : '9pt', color : '#000000', fontFamily : 'arial'  },
		controls: {
			separator00: {
				visible: true
			},
			insertOrderedList: {
				visible: true
			},
			insertUnorderedList: {
				visible: true
			},
			undo: {
				visible: true
			},
			redo: {
				visible: true
			},
			underline: {
				visible: true
			}}
		});
})