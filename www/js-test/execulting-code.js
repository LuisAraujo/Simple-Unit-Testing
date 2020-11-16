function showcode(numberitem){
	
	var filename =  $("#item-code-" +  numberitem).html().trim();;
	
	$.post( "backend/openingFile.php", {filename: "../"+filename }, function(data) { 
		}).done(function(data) {
			editor.setValue(data);
			$("#item-code-"+fileactive).removeClass("no-saved");
		}).fail(function() {
			$("#console-container .contents").html("Tivemos um error ao abrir o arquivo, tente novamente! :(" );
		});
};

	
function runcode(){
	
	var filename =  $("#item-code-" +  fileactive).html().trim();

	$("#container-filename").html( filename + ".py" );

	$.post( "backend/openingFile.php", {filename: "../"+filename }, function(data) { 
	}).done(function(data) {
			
			$("#container-status").html("Estamos executando o seu código..." );
			 editor.setValue(data);
			
		$.post( "execulting-code.php", {filename: filename }, function(data) { })
			.done(function(data) {
				$("#console-container .contents").html(data);
			})
			.fail(function() {
				$("#console-container .contents").html("Tivemos um error ao exectar o arquivo, tente novamente! :(" );
			})
	
	})
	.fail(function() {
		$("#console-container .contents").html("Tivemos um error ao abrir o arquivo, tente novamente! :(" );
	})
	
}	