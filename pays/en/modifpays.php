<?php

$_POST['pays'] = strtoupper($_POST['pays']);
$pays = $_POST['pays'];

$sql0 = "SELECT * FROM q1 WHERE pays='$pays' ORDER BY id DESC";
$req0 = mysql_query($sql0) or die("req0 : ".mysql_error());
$idpays = mysql_result($req0,"0","id");

echo "$pays = $idpays<br><br>";

$sql = "UPDATE `q1` SET q1r1='".$_POST['q1r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q1` SET q1r2='".$_POST['q1r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q1` SET q1r3='".$_POST['q1r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q1` SET comment='".$_POST['commentq1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE q2 SET q2r1='".$_POST['q2r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE q2 SET q2r2='".$_POST['q2r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE q2 SET q2r3='".$_POST['q2r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE q2 SET q2r4='".$_POST['q2r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE q2 SET q2r5='".$_POST['q2r5']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE q2 SET q2r6='".$_POST['q2r6']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q3` SET q3r='".mysql_escape_string($_POST['q3r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q3` SET comment='".$_POST['commentq3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q4` SET q4r='".$_POST['q4r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q4` SET comment='".$_POST['commentq4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q5` SET q5r='".$_POST['q5r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q6` SET q6r='".$_POST['q6r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q6` SET comment='".$_POST['commentq6']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q7` SET q7r='".$_POST['q7r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q8` SET q8r='".$_POST['q8r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q9` SET q9r1='".$_POST['q9r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q9` SET q9r2='".$_POST['q9r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q9` SET comment='".$_POST['commentq9']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q10` SET q10r1='".$_POST['q10r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q10` SET q10r2='".$_POST['q10r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q10` SET q10r3='".$_POST['q10r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q10` SET q10r3s='".$_POST['q10r3s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q10` SET comment='".$_POST['commentq10']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q11` SET q11r='".$_POST['q11r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q11` SET comment='".$_POST['commentq11']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q12` SET q12r1='".$_POST['q12r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q12` SET q12r2='".$_POST['q12r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q12` SET q12r3='".$_POST['q12r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q12` SET q12r3s='".$_POST['q12r3s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q12` SET q12r4='".$_POST['q12r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q12` SET q12r4s='".$_POST['q12r4s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q12` SET q12r5='".$_POST['q12r5']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q12` SET q12r5s='".$_POST['q12r5s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q12` SET comment='".$_POST['commentq12']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q13` SET q13r1='".$_POST['q13r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q13` SET q13r2='".$_POST['q13r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q13` SET q13r2s='".$_POST['q13r2s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q13` SET q13r3='".$_POST['q13r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q13` SET comment='".$_POST['commentq13']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q14` SET q14r='".$_POST['q14r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q14` SET comment='".$_POST['commentq14']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q15` SET q15r='".$_POST['q15r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q15` SET comment='".$_POST['commentq15']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q16` SET q16r='".$_POST['q16r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q16` SET comment='".$_POST['commentq16']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q17` SET q17r='".$_POST['q17r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q17` SET comment='".$_POST['commentq17']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q18` SET q18r1='".$_POST['q18r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q18` SET q18r2='".$_POST['q18r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q18` SET q18r3='".$_POST['q18r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q18` SET q18r3s='".$_POST['q18r3s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q18` SET q18r4='".$_POST['q18r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q18` SET q18r4s='".$_POST['q18r4s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q18` SET comment='".$_POST['commentq18']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q19` SET q19r1='".$_POST['q19r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q19` SET q19r2='".$_POST['q19r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q19` SET q19r3='".$_POST['q19r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q19` SET q19r3s='".$_POST['q19r3s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q19` SET q19r4='".$_POST['q19r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q19` SET q19r4s='".$_POST['q19r4s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q19` SET comment='".$_POST['commentq19']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q20` SET q20r='".$_POST['q20r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q20` SET comment='".$_POST['commentq20']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q21` SET q21r='".$_POST['q21r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q21` SET comment='".$_POST['commentq21']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

if ($okfile=="ok"){

	$sql = "SELECT * FROM q22 WHERE pays='$pays'";
	$req = mysql_query($sql) or die("req1 : ".mysql_error());
	$res = mysql_num_rows($req);
	
	if($res>"0"){
		$sql = "UPDATE `q22` SET q22r='".$q22FNew."' WHERE pays='".$pays."' ORDER BY id DESC";
		$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
	} else {
		$sql = "INSERT INTO `q22` VALUES('".$idpays."','','".$q22FNew."','','".$pays."');";
		$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
	}

}

$sql = "UPDATE `q23` SET q23r1='".$_POST['q23r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q23` SET q23r2='".$_POST['q23r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q23` SET q23r3='".$_POST['q23r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q23` SET q23r4='".$_POST['q23r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q23` SET q23r5='".$_POST['q23r5']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q23` SET q23r6='".$_POST['q23r6']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q24` SET q24r1='".$_POST['q24r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q24` SET q24r2='".$_POST['q24r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q24` SET q24r3='".$_POST['q24r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q24` SET q24r4='".$_POST['q24r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q25` SET q25r1='".$_POST['q25r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q25` SET q25r2='".$_POST['q25r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q25` SET q25r3='".$_POST['q25r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q25` SET q25r4='".$_POST['q25r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q26` SET q26r1='".$_POST['q26r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q26` SET q26r2='".$_POST['q26r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q26` SET q26r3='".$_POST['q26r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q26` SET q26r4='".$_POST['q26r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q27q1` SET q27q1r='".$_POST['q27q1r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q2` SET q27q2r='".$_POST['q27q2r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q3` SET q27q3r='".$_POST['q27q3r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q4` SET q27q4r='".$_POST['q27q4r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q5` SET q27q5r='".$_POST['q27q5r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q6` SET q27q6r='".$_POST['q27q6r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q7` SET q27q7r='".$_POST['q27q7r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q8` SET q27q8r='".$_POST['q27q8r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q9` SET q27q9r='".$_POST['q27q9r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q10` SET q27q10r='".$_POST['q27q10r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q11` SET q27q11r='".$_POST['q27q11r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q12` SET q27q12r='".$_POST['q27q12r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q13` SET q27q13r='".$_POST['q27q13r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q14` SET q27q14r='".$_POST['q27q14r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q15` SET q27q15r='".$_POST['q27q15r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q27q16` SET q27q16r='".$_POST['q27q16r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q28` SET q28r1='".$_POST['q28r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q28` SET q28r2='".$_POST['q28r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q28` SET q28r3='".$_POST['q28r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q28` SET comment='".$_POST['commentq28']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q29` SET q29r='".$_POST['q29r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q29` SET comment='".$_POST['commentq29']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q30` SET q30r='".$_POST['q30r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q30` SET comment='".$_POST['commentq30']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q31` SET q31r='".$_POST['q31r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q31` SET comment='".$_POST['commentq31']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q32` SET q32r1='".$_POST['q32r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q32` SET q32r2='".$_POST['q32r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q32` SET q32r3='".$_POST['q32r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q32` SET q32r4='".$_POST['q32r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q32` SET q32r5='".$_POST['q32r5']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q32` SET q32r5s='".$_POST['q32r5s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q32` SET comment='".$_POST['commentq32']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q33` SET q33r1='".$_POST['q33r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q33` SET q33r1s='".$_POST['q33r1s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q33` SET q33r2='".$_POST['q33r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q33` SET q33r2s='".$_POST['q33r2s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q33` SET comment='".$_POST['commentq33']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q34` SET q34r='".$_POST['q34r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q34` SET comment='".$_POST['commentq34']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q35q1` SET q35q1r='".$_POST['q35q1r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q35q2` SET q35q2r='".$_POST['q35q2r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q35q3` SET q35q3r='".$_POST['q35q3r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q35q4` SET q35q4r='".$_POST['q35q4r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q35q5` SET q35q5r='".$_POST['q35q5r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q35` SET q35c='".$_POST['q35C']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q36` SET q36r1='".$_POST['q36r1']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q36` SET q36r2='".$_POST['q36r2']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q36` SET q36r3='".$_POST['q36r3']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q36` SET q36r3s='".$_POST['q36r3s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q36` SET q36r4='".$_POST['q36r4']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q36` SET q36r4s='".$_POST['q36r4s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q36` SET q36r5='".$_POST['q36r5']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q36` SET q36r5s='".$_POST['q36r5s']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q36` SET comment='".$_POST['commentq36']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q37q1` SET q37q1r='".$_POST['q37q1r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q37q2` SET q37q2r='".$_POST['q37q2r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q37q3` SET q37q3r='".$_POST['q37q3r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q37q4` SET q37q4r='".$_POST['q37q4r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q37q5` SET q37q5r='".$_POST['q37q5r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q37` SET q37c='".$_POST['q37C']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q38` SET q38r='".$_POST['q38r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q38` SET comment='".$_POST['commentq38']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q39` SET q39r='".$_POST['q39r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q39` SET q39r1r='".$_POST['q39r1r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q39` SET comment='".$_POST['commentq39']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q40` SET q40r='".$_POST['q40r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `q40` SET comment='".$_POST['commentq40']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `q41` SET q41r='".$_POST['q41r']."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";




echo "<hr>";
?>