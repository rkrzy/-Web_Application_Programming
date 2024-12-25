function login() {
	// write your code to ask pass(word)  
	let password = "";
    while (password !== "pass") {
        password = prompt("input the password:","ex) 12345" );
        if (password !== "pass") {
            alert(`Wrong (you entered: ${password})`);
        }
    }
    alert(`Pass (you entered: ${password})`);
}

function explainDays() {
	// write your code to ask days and explain
	let validDays = ["mon", "tue", "wed", "thu", "fri", "sat", "sun"];
    let day = "";
	while (!validDays.includes(day)) {
        day = prompt("Input from Mon to Sun", "ex) Mon").toLowerCase().slice(0, 3);
        if (!validDays.includes(day)) {
            alert("Invalid day. Please enter a valid day (Mon to Sun).");
        }
    }
	let messageElement = document.createElement("div");
    
	let header = document.querySelector("hr"); 
    document.body.insertBefore(messageElement, header.nextSibling);

    if (day === "sat" || day === "sun") {
        messageElement.innerHTML = "Weekend, and take a rest!";
    } else {
        messageElement.innerHTML = `${day.charAt(0).toUpperCase() + day.slice(1)}, to go to work!`;
    }
}
