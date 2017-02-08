		var request = $.ajax({
		url: "../teaching/javascript/log_event.php",
		type: "POST",
		data: {browser: $.browser,$browser_version:browser.version,width:screen.width,height:screen.height},
		dataType: "html"
		});
		request.done(function(msg) {
			document.getElementById("server_message").innerHTML=msg;
		});

