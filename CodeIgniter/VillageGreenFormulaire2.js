var regexnom = new RegExp("^[a-zA-Z -]+$");
var regexprenom = new RegExp("^[a-zA-Z -]+$");
var regexemail = new RegExp("^[a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,4}$");
var regexfacturation = new RegExp("^[0-9]{1,3}[A-Za-z0-9 -]+$");
var regexlivraison = new RegExp("^[0-9]{1,3}[A-Za-z0-9 -]+$"); 

var nom = $("#Nom");
var prenom = $("#Prenom");
var email = $("#Email");
var facturation = $("#Facturation");
var livraison =$("#Livraison");


nom.on("input", function()
{
	if (regexnom.test(nom.val()) == true)
	{
		nom.css("backgroundColor", "#CCFF99");
	}
	else
		nom.css("backgroundColor", "red");
});

prenom.on("input", function()
{
	if (regexprenom.test(prenom.val()) == true)
	{
		prenom.css("backgroundColor", "#CCFF99");
	}
	else
		prenom.css("backgroundColor", "red");
});

email.on("input", function()
{
	if (regexemail.test(email.val()) == true)
	{
		email.css("backgroundColor", "#CCFF99");
	}
	else
		email.css("backgroundColor", "red");
});


facturation.on("input", function()
{
	if (regexfacturation.test(facturation.val()) == true)
	{
		facturation.css("backgroundColor", "#CCFF99");
	}
	else
		facturation.css("backgroundColor", "red");
});

livraison.on("input", function()
{
	if (regexlivraison.test(livraison.val()) == true)
	{
		livraison.css("backgroundColor", "#CCFF99");
	}
	else
		livraison.css("backgroundColor", "red");
});


// $("input").change(function() {
// 	verifnom();
// 	verifprenom();
// 	verifemail();
// 	veriffacturation();
// 	veriflivraison();
// 	choix();
// });



// var ClickButton = document.getElementById("Envoyer");

// ClickButton.addEventListener("click", function() {
// 	verifnom();
// 	verifprenom();
// 	verifemail();
// 	veriffacturation();
// 	veriflivraison();
// 	choix();
// });
