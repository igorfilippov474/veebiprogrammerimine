<?php
	//muutujad
	$myName = "Igor";
	$myFamilyName= "Filippov";
	
	//hindan paeva osa
	$hourNow = date("H");
	$partOfDay = "";
	if ($hourNow < 8) {
	$partOfday= "varajane hommik";
	}
	if ($hourNow >= 8 and $hourNow <16){
		$partOfDay = "koolipaev";
	}
	if ($hourNow > 16 ) {
		$partOfDay= "vaba aeg";
	}
	echo $partOfDay;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset=”utf-8”>
	<title>Igor Filippov</title>
</head>
<body>
	<h1><?php echo $myName ." " .$myFamilyName; ?> </h1>
	<p>See veebileht on loodud oppetoo raames ning ei sisalda mingisugust tosiseltvoetavat sisu! </p>
	<p> kodutoo TEST </p>
	<p> Minu nimi on Igor Filippov olen TLU tudeng ÜÜÜü	  </p>
	<?php
		echo "<p>Algas PHP oppimine.</p>";
		echo "<p>Tana on ";
		echo date ("d.m.Y") .", kell oli lehe avamise hetkel " .date("H:i:s");
		echo ", hetkel on " .$partOfDay. ".</p>";
	?>



</body>
</html>
