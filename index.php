<?php include_once("vars.php") ?>
<!-- geht  doch  -->
<!doctype html>
<html lang="en">
<head><title>Kundenansicht</title>
<script 
type="text/javascript">

	function verifyEmail()
	{
                // dreläufige Struktur if -  else if  -  else
		var emailAsWord = document.getElementById("emailtext").value;
		// validate input from file vars.php!
		if(emailAsWord == '')
		{
			alert('Sie haben keine E Mail Adresse eingegeben.\nYou apparently entered NO Email address.');
		}
		else if(!(emailAsWord.indexOf('@') > -1))
		{
		        alert('Sie haben keine gueltige E Mail Adresse eingegeben.\nYou apparently entered no VALID Email address.');
		}
		else
		{
			alert('passt');
		}
	}

	function verifyAddress()
	{

	var booleanCheck = false;	

		// get content with Javascript into messagebox:
		var fetchresultA = document.getElementById("wrap1");
		var fetchresultB = document.getElementById("wrap2");
		
	// Bedingung prüfen
	if(false) booleanCheck = true;
 
		// Ausgabe in JS:
		alert("Ihre Adresse wurde verifiziert!\nYour Address was verified!");
	}

</script>
</head>
<body>
<h2>Hier stehen Kundeninformationen</h2>
<fieldset>
Name des Kunden:<div id="wrap1"><u><?=$customerName?></u></div><br><br>
Anschfrift:<div id="wrap2"><u><?=$streetAddress?></u></div><br><br>
E-Mail Adresse:<input type="text size=18" id="emailtext" style="background-color:orange"><div><u id="email"><?=$email?></u></div>

<br><br><input type="submit" value="Adresse pr&uuml;fen onclick="verifyAddress()" onclick="verifyAddress()">
<br><br><input type="submit" value="E Mail pr&uuml;fen onclick="verifyEmail()" onclick="verifyEmail()">
</fieldset>
</body>
