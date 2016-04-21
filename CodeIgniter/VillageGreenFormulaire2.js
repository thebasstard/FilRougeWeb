/*vérification des regex*/

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

/*fin de verification des regex*/


/*menu deroulant*/

(function ($, window, delay) {
  
  var theTimer = 0;

  var theElement = null;

  var theLastPosition = {x:0,y:0};

  $('[data-toggle]')
    .closest('li')
    .on('mouseenter', function (inEvent) {
    if (theElement) theElement.removeClass('open');
    window.clearTimeout(theTimer);
    theElement = $(this);

    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mousemove', function (inEvent) {
        if(Math.abs(theLastPosition.x - inEvent.ScreenX) > 4 || 
           Math.abs(theLastPosition.y - inEvent.ScreenY) > 4)
        {
            theLastPosition.x = inEvent.ScreenX;
            theLastPosition.y = inEvent.ScreenY;
            return;
        }
        
    if (theElement.hasClass('open')) return;
    window.clearTimeout(theTimer);
    theTimer = window.setTimeout(function () {
      theElement.addClass('open');
    }, delay);
  })
    .on('mouseleave', function (inEvent) {
    window.clearTimeout(theTimer);
    theElement = $(this);
    theTimer = window.setTimeout(function () {
      theElement.removeClass('open');
    }, delay);
  });
})(jQuery, window, 200); // 200 est le delai en millisecondes

/*fin de code du menu deroulant*/