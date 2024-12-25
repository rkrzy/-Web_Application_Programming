
//function to determine if a field is blank
function isBlank(inputField){
	if (inputField.type === "checkbox") {
        return !inputField.checked; 
    }
	return inputField.value.trim() === "";
}

//function to highlight an error through colour by adding css attributes tot he div passed in
function makeRed(inputDiv){
   	inputDiv.style.backgroundColor="#AA0000";
	inputDiv.parentNode.style.backgroundColor="#AA0000";
	inputDiv.parentNode.style.color="#FFFFFF";		
}
//remove all error styles from the div passed in
function makeClean(inputDiv){
	inputDiv.parentNode.style.backgroundColor="#FFFFFF";
	inputDiv.parentNode.style.color="#000000";		
}

//the main function must occur after the page is loaded, hence being inside the wondow.onload event handler.
window.onload = function(){
    var mainForm = document.getElementById("mainForm");

    //all inputs with the class required are looped through 
    var requiredInputs = document.querySelectorAll(".required");
    for (var i=0; i < requiredInputs.length; i++){
		requiredInputs[i].onfocus = function(){
	    	this.style.backgroundColor = "#EEEE00";
		}
    }

    //on submitting the form, "empty" checks are performed on required inputs.
    mainForm.onsubmit = function(e){
		var requiredInputs = document.querySelectorAll(".required");
		for (var i=0; i < requiredInputs.length; i++){
			if( isBlank(requiredInputs[i]) ){
				e.preventDefault();
				makeRed(requiredInputs[i]);
			}
			else{
				makeClean(requiredInputs[i]);
			}
		}
    }
}