var meuStorage = localStorage;


function clearAllItems(){

	for( key in localStorage){
		if(key.indexOf("uto") !== -1)
			deleteItem2(key);
	}
}

function setUser(content){
	localStorage.setItem("uto-username", content);	
}

function getUser(name, content){
	return localStorage.getItem("uto-username");	
}

function setNewItem(name, content){
	
	localStorage.setItem("uto" + name, content);	
	
	return name;
}

function saveItem(name, content){
	localStorage.setItem("uto" + name, content);	
}

function getListItems(){
	var a = [];
	for( key in localStorage){
		a.push(key);
	}
	return a;
}

function getItem(name){
	return localStorage.getItem("uto" + name);
}

function getItem2(name){
	return localStorage.getItem( name);
}


function deleteItem(name){
	localStorage.removeItem("uto" + name);
}

function deleteItem2(name){
	localStorage.removeItem(name);
}