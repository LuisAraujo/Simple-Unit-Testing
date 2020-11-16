filesnames = [];
fileactive = 0;

$(document).ready(function(){
	editor = ace.edit("editor");
	
	startAceJs();
	showcode(0);
	
	$("#button-run").click(runcode );
	
	$(".item-code").click( function(){
		activeCode( $(this).attr("numberitem") );
	});
	
	$(".file-explore-bar").click( function(){
		activeCode( $(this).attr("numberitem") );
	s});
	
});

function activeCode( numberitem ){
	$(".item-code").removeClass("active");
	$("#item-code-" +  numberitem).addClass("active");
	fileactive = parseInt( numberitem );
	showcode(numberitem);
}

function startAceJs(){

    editor.setTheme("ace/theme/chrome");
    editor.setShowPrintMargin(false);
    editor.session.setMode("ace/mode/python");
	document.getElementById('editor').style.fontSize='15px';
	
	editor.getSession().on('change', function() {
		updateAceJs();
	});
}

function updateAceJs(){
	console.log("mud");
	$("#item-code-"+fileactive).addClass("no-saved");
}
