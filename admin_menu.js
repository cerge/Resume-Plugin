jQuery(document).ready(function($){
    

    $("#li_3").hide();
	$('#element_4_1').click(function(){
	    if ($('#element_4_1').attr('checked')) {
	        $("#li_3").show();
	    }else{
	        $("#li_3").hide();
	    }
	}) 


});