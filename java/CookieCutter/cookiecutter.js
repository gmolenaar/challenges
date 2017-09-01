//creating a class with a function
function CookieCutter() 
{
	//add properties
	this.size;
	this.hasChocolateChips;
	//adding methods that set the 'hasChocolateChips' to true or false
	this.addChocolateChips = function addChocolateChips(){
		this.hasChocolateChips = true;
	}
	this.removeChocolateChips = function removeChocolateChips(){
		this.hasChocolateChips = false;
	}
}

//creating a var and adding value to the properties
var cookie1 = new CookieCutter();
cookie1.size = 'medium';
cookie1.hasChocolateChips = 'true';

//same thing with cookie2
var cookie2 = new CookieCutter();
cookie2.size = 'large';
cookie2.hasChocolateChips = 'false';

//function to invert the 'hasChocolateChips'
cookie1.removeChocolateChips();
cookie2.addChocolateChips();

//showing it in the browser
document.querySelector(".cookie1").innerHTML =
"cookie1 is " + cookie1.size + " and hasChocolateChips is " + cookie1.hasChocolateChips;
document.querySelector(".cookie2").innerHTML =
"cookie2 is " + cookie2.size + " and hasChocolateChips is " + cookie2.hasChocolateChips;

console.log(cookie1.hasChocolateChips);


/* I have almost zero experience with JavaScript so don't mind 
the comments, these are for myself. */