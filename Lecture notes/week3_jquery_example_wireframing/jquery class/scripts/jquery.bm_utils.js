/* 
	jquery.bm_utils
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
	loadTable : function(){
		$.utils.loadFile("css/table.css","css");
		psElement="#data-table-1-container";
		psFile="content/data_table_1.html";
		$( psElement ).load( psFile, function( response, status, xhr ) {
			if (window.console){window.console.debug("loadTable status "+status)}
			if ( status == "error" ) {
				var msg = "There was an error loading file: ";
				$( "#error" ).html( msg + xhr.status + " " + xhr.statusText );
			} else {
				if (window.console){window.console.debug("loadTable status "+status)};
				
				$("table tr").on("click",function(){editRow(this)});
				$("#btn_hide-table").removeClass("invisible");
				$("#btn_load-table").addClass("invisible");
			}
		});
	},

	showTable : function(){
		$("#btn_hide-table").removeClass("invisible");
		$("#data-table-1").removeClass("invisible");
		$("#btn_show-table").addClass("invisible");
		$( "#data-table-1-container" ).animate({
			opacity: 1.,
			left: "-=50",
			height: "toggle"
			}, 2000, function() {
				if (window.console){window.console.debug("showtable animation completed")};
			});
	},
	hideTable : function(){
		$("#btn_hide-table").addClass("invisible");
		$("#btn_show-table").removeClass("invisible");
		$( "#data-table-1-container" ).animate({
			opacity: 0.25,
			left: "+=50",
			height: "toggle"
			}, 2000, function() {
				if (window.console){window.console.debug("hidetable animation completed")};
			});
	},
	viewport : function(e){
		var e = window
		, a = 'inner';
		if ( !( 'innerWidth' in window ) )
		{
		a = 'client';
		e = document.documentElement || document.body;
		}
		return { width : e[ a+'Width' ] , height : e[ a+'Height' ] }
	}
}
})

})(jQuery);