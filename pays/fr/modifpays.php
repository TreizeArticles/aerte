<?php

$_POST['pays'] = strtoupper($_POST['pays']);
$pays = $_POST['pays'];

$sql0 = "SELECT * FROM fr_q1 WHERE pays='$pays' ORDER BY id DESC";
$req0 = mysql_query($sql0) or die("req0 : ".mysql_error());
$idpays = mysql_result($req0,"0","id");

echo "$pays = $idpays<br><br>";

$sql = "UPDATE `fr_q1` SET q1r1='".mysql_escape_string($_POST['q1r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q1` SET q1r2='".mysql_escape_string($_POST['q1r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q1` SET q1r3='".mysql_escape_string($_POST['q1r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q1` SET comment='".mysql_escape_string($_POST['commentq1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE fr_q2 SET q2r1='".mysql_escape_string($_POST['q2r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE fr_q2 SET q2r2='".mysql_escape_string($_POST['q2r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE fr_q2 SET q2r3='".mysql_escape_string($_POST['q2r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE fr_q2 SET q2r4='".mysql_escape_string($_POST['q2r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE fr_q2 SET q2r5='".mysql_escape_string($_POST['q2r5'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE fr_q2 SET q2r6='".mysql_escape_string($_POST['q2r6'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q3` SET q3r='".mysql_escape_string($_POST['q3r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q3` SET comment='".mysql_escape_string($_POST['commentq3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q4` SET q4r='".mysql_escape_string($_POST['q4r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q4` SET comment='".mysql_escape_string($_POST['commentq4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q5` SET q5r='".mysql_escape_string($_POST['q5r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q6` SET q6r='".mysql_escape_string($_POST['q6r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q6` SET comment='".mysql_escape_string($_POST['commentq6'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q7` SET q7r='".mysql_escape_string($_POST['q7r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q8` SET q8r='".mysql_escape_string($_POST['q8r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q9` SET q9r1='".mysql_escape_string($_POST['q9r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q9` SET q9r2='".mysql_escape_string($_POST['q9r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q9` SET comment='".mysql_escape_string($_POST['commentq9'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q10` SET q10r1='".mysql_escape_string($_POST['q10r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q10` SET q10r2='".mysql_escape_string($_POST['q10r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q10` SET q10r3='".mysql_escape_string($_POST['q10r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q10` SET q10r3s='".mysql_escape_string($_POST['q10r3s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q10` SET comment='".mysql_escape_string($_POST['commentq10'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q11` SET q11r='".mysql_escape_string($_POST['q11r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q11` SET comment='".mysql_escape_string($_POST['commentq11'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q12` SET q12r1='".mysql_escape_string($_POST['q12r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q12` SET q12r2='".mysql_escape_string($_POST['q12r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q12` SET q12r3='".mysql_escape_string($_POST['q12r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q12` SET q12r3s='".mysql_escape_string($_POST['q12r3s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q12` SET q12r4='".mysql_escape_string($_POST['q12r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q12` SET q12r4s='".mysql_escape_string($_POST['q12r4s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q12` SET q12r5='".mysql_escape_string($_POST['q12r5'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q12` SET q12r5s='".mysql_escape_string($_POST['q12r5s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q12` SET comment='".mysql_escape_string($_POST['commentq12'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q13` SET q13r1='".mysql_escape_string($_POST['q13r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q13` SET q13r2='".mysql_escape_string($_POST['q13r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q13` SET q13r2s='".mysql_escape_string($_POST['q13r2s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q13` SET q13r3='".mysql_escape_string($_POST['q13r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q13` SET comment='".mysql_escape_string($_POST['commentq13'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q14` SET q14r='".mysql_escape_string($_POST['q14r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q14` SET comment='".mysql_escape_string($_POST['commentq14'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q15` SET q15r='".mysql_escape_string($_POST['q15r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q15` SET comment='".mysql_escape_string($_POST['commentq15'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q16` SET q16r='".mysql_escape_string($_POST['q16r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q16` SET comment='".mysql_escape_string($_POST['commentq16'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q17` SET q17r='".mysql_escape_string($_POST['q17r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q17` SET comment='".mysql_escape_string($_POST['commentq17'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q18` SET q18r1='".mysql_escape_string($_POST['q18r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q18` SET q18r2='".mysql_escape_string($_POST['q18r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q18` SET q18r3='".mysql_escape_string($_POST['q18r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q18` SET q18r3s='".mysql_escape_string($_POST['q18r3s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q18` SET q18r4='".mysql_escape_string($_POST['q18r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q18` SET q18r4s='".mysql_escape_string($_POST['q18r4s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q18` SET comment='".mysql_escape_string($_POST['commentq18'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q19` SET q19r1='".mysql_escape_string($_POST['q19r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q19` SET q19r2='".mysql_escape_string($_POST['q19r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q19` SET q19r3='".mysql_escape_string($_POST['q19r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q19` SET q19r3s='".mysql_escape_string($_POST['q19r3s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q19` SET q19r4='".mysql_escape_string($_POST['q19r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q19` SET q19r4s='".mysql_escape_string($_POST['q19r4s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q19` SET comment='".mysql_escape_string($_POST['commentq19'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q20` SET q20r='".mysql_escape_string($_POST['q20r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q20` SET comment='".mysql_escape_string($_POST['commentq20'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q21` SET q21r='".mysql_escape_string($_POST['q21r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q21` SET comment='".mysql_escape_string($_POST['commentq21'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

if ($okfile=="ok"){

	$sql = "SELECT * FROM `fr_q22` WHERE pays='$pays'";
	$req = mysql_query($sql) or die("req1 : ".mysql_error());
	$res = mysql_num_rows($req);
	
	if($res>"0"){
		$sql = "UPDATE `fr_q22` SET q22r='".$q22FNew."' WHERE pays='".$pays."' ORDER BY id DESC";
		$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
	} else {
		$sql = "INSERT INTO `fr_q22` VALUES('".$idpays."','','".$q22FNew."','','".$pays."');";
		$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
	}

}

$sql = "UPDATE `fr_q23` SET q23r1='".mysql_escape_string($_POST['q23r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q23` SET q23r2='".mysql_escape_string($_POST['q23r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q23` SET q23r3='".mysql_escape_string($_POST['q23r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q23` SET q23r4='".mysql_escape_string($_POST['q23r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q23` SET q23r5='".mysql_escape_string($_POST['q23r5'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q23` SET q23r6='".mysql_escape_string($_POST['q23r6'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q24` SET q24r1='".mysql_escape_string($_POST['q24r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q24` SET q24r2='".mysql_escape_string($_POST['q24r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q24` SET q24r3='".mysql_escape_string($_POST['q24r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q24` SET q24r4='".mysql_escape_string($_POST['q24r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q25` SET q25r1='".mysql_escape_string($_POST['q25r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q25` SET q25r2='".mysql_escape_string($_POST['q25r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q25` SET q25r3='".mysql_escape_string($_POST['q25r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q25` SET q25r4='".mysql_escape_string($_POST['q25r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q26` SET q26r1='".mysql_escape_string($_POST['q26r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q26` SET q26r2='".mysql_escape_string($_POST['q26r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q26` SET q26r3='".mysql_escape_string($_POST['q26r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q26` SET q26r4='".mysql_escape_string($_POST['q26r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q27q1` SET q27q1r='".mysql_escape_string($_POST['q27q1r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q2` SET q27q2r='".mysql_escape_string($_POST['q27q2r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q3` SET q27q3r='".mysql_escape_string($_POST['q27q3r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q4` SET q27q4r='".mysql_escape_string($_POST['q27q4r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q5` SET q27q5r='".mysql_escape_string($_POST['q27q5r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q6` SET q27q6r='".mysql_escape_string($_POST['q27q6r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q7` SET q27q7r='".mysql_escape_string($_POST['q27q7r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q8` SET q27q8r='".mysql_escape_string($_POST['q27q8r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q9` SET q27q9r='".mysql_escape_string($_POST['q27q9r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q10` SET q27q10r='".mysql_escape_string($_POST['q27q10r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q11` SET q27q11r='".mysql_escape_string($_POST['q27q11r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q12` SET q27q12r='".mysql_escape_string($_POST['q27q12r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q13` SET q27q13r='".mysql_escape_string($_POST['q27q13r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q14` SET q27q14r='".mysql_escape_string($_POST['q27q14r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q15` SET q27q15r='".mysql_escape_string($_POST['q27q15r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q27q16` SET q27q16r='".mysql_escape_string($_POST['q27q16r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q28` SET q28r1='".mysql_escape_string($_POST['q28r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q28` SET q28r2='".mysql_escape_string($_POST['q28r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q28` SET q28r3='".mysql_escape_string($_POST['q28r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q28` SET comment='".mysql_escape_string($_POST['commentq28'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q29` SET q29r='".mysql_escape_string($_POST['q29r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q29` SET comment='".mysql_escape_string($_POST['commentq29'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q30` SET q30r='".mysql_escape_string($_POST['q30r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q30` SET comment='".mysql_escape_string($_POST['commentq30'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q31` SET q31r='".mysql_escape_string($_POST['q31r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q31` SET comment='".mysql_escape_string($_POST['commentq31'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q32` SET q32r1='".mysql_escape_string($_POST['q32r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q32` SET q32r2='".mysql_escape_string($_POST['q32r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q32` SET q32r3='".mysql_escape_string($_POST['q32r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q32` SET q32r4='".mysql_escape_string($_POST['q32r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q32` SET q32r5='".mysql_escape_string($_POST['q32r5'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q32` SET q32r5s='".mysql_escape_string($_POST['q32r5s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q32` SET comment='".mysql_escape_string($_POST['commentq32'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q33` SET q33r1='".mysql_escape_string($_POST['q33r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q33` SET q33r1s='".mysql_escape_string($_POST['q33r1s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q33` SET q33r2='".mysql_escape_string($_POST['q33r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q33` SET q33r2s='".mysql_escape_string($_POST['q33r2s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q33` SET comment='".mysql_escape_string($_POST['commentq33'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q34` SET q34r='".mysql_escape_string($_POST['q34r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q34` SET comment='".mysql_escape_string($_POST['commentq34'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q35q1` SET q35q1r='".mysql_escape_string($_POST['q35q1r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q35q2` SET q35q2r='".mysql_escape_string($_POST['q35q2r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q35q3` SET q35q3r='".mysql_escape_string($_POST['q35q3r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q35q4` SET q35q4r='".mysql_escape_string($_POST['q35q4r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q35q5` SET q35q5r='".mysql_escape_string($_POST['q35q5r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q35` SET q35c='".mysql_escape_string($_POST['q35C'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q36` SET q36r1='".mysql_escape_string($_POST['q36r1'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q36` SET q36r2='".mysql_escape_string($_POST['q36r2'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q36` SET q36r3='".mysql_escape_string($_POST['q36r3'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q36` SET q36r3s='".mysql_escape_string($_POST['q36r3s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q36` SET q36r4='".mysql_escape_string($_POST['q36r4'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q36` SET q36r4s='".mysql_escape_string($_POST['q36r4s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q36` SET q36r5='".mysql_escape_string($_POST['q36r5'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q36` SET q36r5s='".mysql_escape_string($_POST['q36r5s'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q36` SET comment='".mysql_escape_string($_POST['commentq36'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q37q1` SET q37q1r='".mysql_escape_string($_POST['q37q1r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q37q2` SET q37q2r='".mysql_escape_string($_POST['q37q2r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q37q3` SET q37q3r='".mysql_escape_string($_POST['q37q3r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q37q4` SET q37q4r='".mysql_escape_string($_POST['q37q4r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q37q5` SET q37q5r='".mysql_escape_string($_POST['q37q5r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q37` SET q37c='".mysql_escape_string($_POST['q37C'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q38` SET q38r='".mysql_escape_string($_POST['q38r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q38` SET comment='".mysql_escape_string($_POST['commentq38'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q39` SET q39r='".mysql_escape_string($_POST['q39r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q39` SET q39r1r='".mysql_escape_string($_POST['q39r1r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q39` SET comment='".mysql_escape_string($_POST['commentq39'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q40` SET q40r='".mysql_escape_string($_POST['q40r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";
$sql = "UPDATE `fr_q40` SET comment='".mysql_escape_string($_POST['commentq40'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";

$sql = "UPDATE `fr_q41` SET q41r='".mysql_escape_string($_POST['q41r'])."' WHERE pays='".$pays."' ORDER BY id DESC";$req = mysql_query($sql) or die("req1 : ".mysql_error());//echo "$sql<br>";




echo "<hr>";
?>