function hide(e){
	e.classList.add("invisible");
}
function show(e){
	e.classList.remove("invisible");
}
function showHTML(e){
	alert("The innerHTML property of this element is "+e.innerHTML);
}