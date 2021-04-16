var navToggled = false;

function toggleSidenav() {
	if(navToggled){
		openNav();
		navToggled = false;
	} else {
		closeNav();
		navToggled = true;
	}
}
function openNav() {
	document.getElementById("sideNavig").style.display = "block";
	document.getElementById("main").style.marginLeft = "208px";
	document.getElementById("main").style.marginRight = "16px";
}
function closeNav() {
	document.getElementById("sideNavig").style.display = "none";
	document.getElementById("main").style.marginLeft = "auto";
	document.getElementById("main").style.marginRight = "208px";
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
	this.classList.toggle("active");
	var dropdownContent = this.nextElementSibling;
	if (dropdownContent.style.display === "block") {
		dropdownContent.style.display = "none";
	} else {
		dropdownContent.style.display = "block";
	}
  });
}

