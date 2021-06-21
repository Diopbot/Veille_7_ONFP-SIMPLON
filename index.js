function Changeeye(){
	let classe = document.getElementById("eye");
	let entree = document.getElementById("input5")
	if (classe.className == 'fa fa-eye') {
		classe.className = "fa fa-eye-slash";
		entree.type = "text";
	}
	else {
		classe.className = "fa fa-eye";
		entree.type = "password";
		}
}


function Placeholder(id){
	entree = document.getElementById(id);
	switch (entree.id){
		case "input1":
			label = document.getElementById('label1');
			entree.placeholder = "";
			label.innerHTML = "Nom";
				break;
		case "input2":
			label = document.getElementById('label2');
			entree.placeholder = "";
			label.innerHTML = "Pseudo";
			break;
		case "input3":
			label = document.getElementById('label3');
			entree.placeholder = "";
			label.innerHTML = "Telephone";
			break;
		case "input4":
			label = document.getElementById('label4');
			entree.placeholder = "";
			label.innerHTML = "Prenom";
			break;
		case "input5":
			label = document.getElementById('label5');
			entree.placeholder = "";
			label.innerHTML = "Mot de passe";
			break;
		case "input6":
			label = document.getElementById('label6');
			entree.placeholder = "";
			label.innerHTML = "Adresse";
			break;
		default:
			console.log("ERROR");
	}
}

function Backplaceholder(id){
	entree = document.getElementById(id);
	switch (entree.id){
		case "input1":
			if (entree.value == "") {
				label = document.getElementById('label1');
				entree.placeholder = "Nom";
				label.innerHTML = "<br>";
			}
			break;
		case "input2":
			if (entree.value == "") {
				label = document.getElementById('label2');
				entree.placeholder = "Pseudo";
				label.innerHTML = "<br>";
			}
			break;
		case "input3":
			if (entree.value == "") {
				label = document.getElementById('label3');
				entree.placeholder = "Telephone";
				label.innerHTML = "<br>";
			}
			break;
		case "input4":
			if (entree.value == "") {
				label = document.getElementById('label4');
				entree.placeholder = "Prenom";
				label.innerHTML = "<br>";
			}
			break;
		case "input5":
			if (entree.value == "") {
				label = document.getElementById('label5');
				entree.placeholder = "Mot de passe";
				label.innerHTML = "<br>";
			}
			break;
		case "input6":
			if (entree.value == "") {
				label = document.getElementById('label6');
				entree.placeholder = "Adresse";
				label.innerHTML = "<br>";
			}
			break;
	}
}
