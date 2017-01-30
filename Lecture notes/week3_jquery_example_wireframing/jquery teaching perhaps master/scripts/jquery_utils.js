/* 
	jquery_utils
	javascript utilities for intro to javascript class
	demonstrates how to create a jquery object

	copyright brian macmillan 2013

*/

(function($){

$.fn.utils = function() {};

$.extend({utils : {
	HTTP_REQUEST : undefined,
	setRequestObject : function() {
		if ($.bm_ui.browser=="IE"){
			$.bm_utils.HTTP_REQUEST =  new ActiveXObject("Microsoft.XMLHTTP");
		} else {$.bm_utils.HTTP_REQUEST = new XMLHttpRequest()}
	},

	gotoFirstInputControl : function(){
		$("input:text:visible:first").focus();
	},
	load : function(psElement,psFilename){	
		//attach filename to element
		$(psElement).load(psFilename,
			function (responseText, textStatus, XMLHttpRequest) {
				if (textStatus=="success") {
				} else {
					$.bm_utils.$.bm_utils.errorHandler("Error in utils loadFile: failed to load "+psFilename+" status: "+textStatus,0);
					return;
				}
			}
		);
	},

	loadFile : function (psFileName, psFileType,psId){
		var fileref;
		if (psFileType=="js"){ //if filename is a external JavaScript file
			fileref=document.createElement('script');
			fileref.setAttribute("type","text/javascript");
			fileref.setAttribute("src", psFileName);
			if (psId != "undefined"){fileref.setAttribute("id", psId);fileref.setAttribute("title", psId);}
		}
		else if (psFileType=="css"){ //if filename is an external CSS file
			fileref=document.createElement("link");
			fileref.setAttribute("rel", "stylesheet");
			fileref.setAttribute("type", "text/css");
			fileref.setAttribute("href", psFileName);
			if (psId != "undefined"){
				fileref.setAttribute("id", psId);
				fileref.setAttribute("title", psId);
			}
		}
	},
 
	setFocus : function(psElementName){
		if ($.bm_ui.browser="IE") {
			setTimeout(function() {document.getElementById(psElementName).focus();}, 10);
		} else{
			$("#"+psElementName).focus();
		}
	},
	viewport : function(e){

		//if (window.console) {if ($.ar_main.debug){window.console.debug("vp 0")};}
		var e = window
		, a = 'inner';
		if ( !( 'innerWidth' in window ) )
		{
		a = 'client';
		e = document.documentElement || document.body;
		}
		return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
	},
	/* *** Canvas stuff */
}
})

})(jQuery);