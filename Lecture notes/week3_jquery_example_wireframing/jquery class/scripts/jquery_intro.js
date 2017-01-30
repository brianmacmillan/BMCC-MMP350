
bodyLoad = function(){
	if (window.console){window.console.debug("body load event")}
}
documentReady = function(){
	if (window.console){window.console.debug("document ready event")}

	//$.utils.setRequestObject();
	//$.utils.load("#data-table-1","data_table_1.html");
	if (window.console){window.console.debug("loading data table")}
	//$("#data-table-1").load("localhost:8080/teaching/data_table_1.html");
}
loadFile =function(psElement,psFile){
	$( psElement ).load( psFile, function( response, status, xhr ) {
		if (window.console){window.console.debug("loadTable status "+status)}
		if ( status == "error" ) {
			var msg = "There was an error loading file: ";
			$( "#error" ).html( msg + xhr.status + " " + xhr.statusText );
		} else {
			if (window.console){window.console.debug("loadTable status "+status)}
		}
	});

}
createTable = function(){
	if (window.console){window.console.debug("createTable start")}
}

iterateThroughColumns = function(){
		$("#data-table-1").children("tr.active").children("td").each(function(i)
		{
			if (window.console){window.console.debug($(this).attr("id"))}			
		});
}