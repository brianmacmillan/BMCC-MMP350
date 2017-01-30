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
		if (window.console){window.console.debug("setting request object")};
		if ($.browser=="IE"){
			$.utils.HTTP_REQUEST =  new ActiveXObject("Microsoft.XMLHTTP");
		} else {$.utils.HTTP_REQUEST = new XMLHttpRequest()}
	},

	gotoFirstInputControl : function(){
		$("input:text:visible:first").focus();
	},
	load : function(psElement,psFilename){	
		//attach filename to element
		if (this.HTTP_REQUEST==undefined){this.setRequestObject()};
		if (window.console){window.console.debug("loading file "+psFilename+" to element "+psElement)};
		$("#data-table-1").load(psFilename,
			function (responseText, textStatus, XMLHttpRequest) {
				if (textStatus=="success") {
					if (window.console){window.console.debug("file "+psFilename+" has been loaded")};
				} else {
					$.utils.errorHandler("Error in utils loadFile: failed to load "+psFilename+" status: "+textStatus,0);
					return;
				}
			}
		);
	},
	errorHandler : function(msg,err_code){
		if (window.console){window.console.debug(err_code+": "+msg)};
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
			if (window.console){window.console.debug("loading css file "+psFileName)};
			fileref=document.createElement("link");
			fileref.setAttribute("rel", "stylesheet");
			fileref.setAttribute("type", "text/css");
			fileref.setAttribute("href", psFileName);
			if (psId != "undefined"){
				fileref.setAttribute("id", psId);
				fileref.setAttribute("title", psId);
			}
		}
		if (typeof fileref!="undefined") {

			document.getElementsByTagName("head")[0].appendChild(fileref);
			//$("head").load(fileref);
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