$(document).ready(function() {
	$("h3").each(function() {
		var text = $(this).text();
		if(text == "File to upload"){
			$("#upload").addClass("active");
			$("#manage").removeClass("active");
			$("#users").removeClass("active");
			$("#logout").removeClass("active");
		};
		if(text == "Choose which files you would like to delete:"){
			$("#upload").removeClass("active");
			$("#manage").addClass("active");
			$("#users").removeClass("active");
			$("#logout").removeClass("active");
		};
		if(text == "Manage Users:"){
			$("#upload").removeClass("active");
			$("#manage").removeClass("active");
			$("#users").addClass("active");
			$("#logout").removeClass("active");
		};
	});	
});