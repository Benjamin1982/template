// This File defines Values					
<?php								// 2
$testWert = "1000";  // syntaktisch ok 
$customerName = "Schommer Media";$email = "emailNotSet@hoster.de";
$streetAddress= "koenigstrasse 56";				// 5	
/*
*<?php
*$title = "template demo";
*$heading = "Template Demo";
*$content = <<<HERE						// 10
*This is a very simple template example, which allows the user to load
*content as variables from an external file. Of course, template
*systems get much more complex than this.
*HERE;
*$footer = "from HTML5 / CSS All in One for Dummies";		// 15
*?>
*/
// Funktions Definition
function str_To_Upper($inputstr)
{		
   $value = $inputstr;						// 20
   return ucfirst($value);
}
// Funktions-Aufruf
$streetAddress = str_To_Upper($streetAddress);
// Speicher freigeben => auskommentieren löscht Sichtbarkeit in Template								// 25
//unset($streetAddress);
//unset($customerName);
$testWert = NULL;
if(is_null($testWert))
{
echo "reset completed";
}
?>
