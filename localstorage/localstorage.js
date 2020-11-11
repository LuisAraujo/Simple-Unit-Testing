var meuStorage = localStorage;


function clearAllItems(){
	localStorage.clear();	
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


function deleteItem(name){
	localStorage.removeItem("uto" + name);
}