<?php $htmlresult = '<script language="JavaScript">
function nav(page,restore){
	eval("self.location=\'"+ page.options[page.selectedIndex].value+"\'")
	if (restore) page.selectedIndex=0;
}
</script>';

error_reporting(E_ALL ^ E_DEPRECATED);
require_once(__DIR__ . '/../db_config.inc.php');

$pays = $_POST['pays'];

$htmlresult .=  "<div class='form_select'>";
$htmlresult .=  "<form action='' method='POST'>";
$htmlresult .=  "<label for='pays'>Pays :</label><select name='pays'>";
$htmlresult .=  "<option value=''>- s&eacute;lection -</option>";
$sql0 = "SELECT distinctrow pays FROM fr_q1 WHERE pays!='non' ORDER BY pays";
$req0 = mysql_query($sql0) or die("req0 : ".mysql_error());
while ($row = mysql_fetch_object($req0)) {
$htmlresult .=  "<option value='$row->pays'>$row->pays</option>";
}
$htmlresult .=  "</select>";
$htmlresult .=  "<input type='submit' value='S&eacute;lectionner ce pays'>";
$htmlresult .=  "</form>";
$htmlresult .=  "</div>";

$htmlresult .=  "<div class='form_select'>";
$htmlresult .=  "<form action='' method='POST'>";
$htmlresult .=  "<label for='uestion'>Question :</label><select name='question'>";
$htmlresult .=  "<option value=''>- s&eacute;lection -</option>";
for($i=1;$i<="41";$i++){
$sql01 = "SELECT * FROM fr_q$i WHERE pays='non'";
$req01 = mysql_query($sql01) or die("req01 : ".mysql_error());
$q = mysql_result($req01,"0","q$i"); $q = substr($q,0,150);
$htmlresult .=  "<option value='$i'>$i - $q</option>";
}
$htmlresult .=  "</select>";
$htmlresult .=  "<input type='submit' value='S&eacute;lectionner cette question'>";
$htmlresult .=  "</form>";
$htmlresult .=  "</div>";


if($_POST['question']){

	$question = "q".$_POST['question'];
	$idquestion = $_POST['question'];

	$sql01 = "SELECT * FROM $question WHERE pays='non'"; //$htmlresult .=  $sql01;
	$req01 = mysql_query($sql01) or die("req01 : ".mysql_error());
	$q = mysql_result($req01,"0",$question);
	$htmlresult .=  "<h1 class='page-title'>$idquestion) $q</h1>";

	$sql02 = "SELECT distinctrow pays FROM fr_$question WHERE pays!='non' ORDER BY pays"; //$htmlresult .=  $sql01;
	if($idquestion=="27")$sql02 = "SELECT distinctrow pays FROM fr_q27q1 WHERE pays!='non' ORDER BY pays";
	$req02 = mysql_query($sql02) or die("req02 : ".mysql_error());

	$htmlresult .=  "<table border='1' cellpadding='10' cellspacing='0' width='100%' class='fiche'>";
	while ($row = mysql_fetch_object($req02)) {
	$htmlresult .=  "<tr>";
	$htmlresult .=  "<td width='120'>$row->pays</td>";
	$htmlresult .=  "<td>";

	if($idquestion=="1"){
	$sql1 = "SELECT * FROM fr_q1 WHERE pays='$row->pays' ORDER BY id DESC"; //$htmlresult .=  $sql01;
	$req1 = mysql_query($sql1) or die("req1 : ".mysql_error());
	$q1r1 = mysql_result($req1,"0","q1r1");if ($q1r1!="")$htmlresult .=  "$q1r1<br>";
	$q1r2 = mysql_result($req1,"0","q1r2");if ($q1r2!="")$htmlresult .=  "$q1r2<br>";
	$q1r3 = mysql_result($req1,"0","q1r3");if ($q1r3!="")$htmlresult .=  "$q1r3<br>";
	$q1c = mysql_result($req1,"0","comment");if ($q1c!="")$htmlresult .=  "Commentaires : $q1c<br>";
	}
	
	if($idquestion=="2"){
	$sql2 = "SELECT * FROM fr_q2 WHERE pays='non'";
	$req2 = mysql_query($sql2) or die("req2 : ".mysql_error());
	$q2r1r = mysql_result($req2,"0","q2r1");
	$q2r2r = mysql_result($req2,"0","q2r2");
	$q2r3r = mysql_result($req2,"0","q2r3");
	$q2r4r = mysql_result($req2,"0","q2r4");
	$q2r5r = mysql_result($req2,"0","q2r5");
	$q2r6r = mysql_result($req2,"0","q2r6");
	
	$sql2 = "SELECT * FROM fr_q2 WHERE pays='$row->pays' ORDER BY id DESC"; //$htmlresult .=  $sql01;
	$req2 = mysql_query($sql2) or die("req2 : ".mysql_error());
	$q2r1 = mysql_result($req2,"0","q2r1");
	$q2r2 = mysql_result($req2,"0","q2r2");
	$q2r3 = mysql_result($req2,"0","q2r3");
	$q2r4 = mysql_result($req2,"0","q2r4");
	$q2r5 = mysql_result($req2,"0","q2r5");
	$q2r6 = mysql_result($req2,"0","q2r6");
	if ($q2r1!="")$htmlresult .=  "$q2r1r : $q2r1<br>";
	if ($q2r2!="")$htmlresult .=  "$q2r2r : $q2r2<br>";
	if ($q2r3!="")$htmlresult .=  "$q2r3r : $q2r3<br>";
	if ($q2r4!="")$htmlresult .=  "$q2r4r : $q2r4<br>";
	if ($q2r5!="")$htmlresult .=  "$q2r5r : $q2r5<br>";
	if ($q2r6!="")$htmlresult .=  "$q2r6r : $q2r6<br>";
	}
	
	if($idquestion=="3"){
	$sql3 = "SELECT * FROM fr_q3 WHERE pays='$row->pays' ORDER BY id DESC";
	$req3 = mysql_query($sql3) or die("req3 : ".mysql_error());
	$q3r = mysql_result($req3,"0","q3r");
	$q3c = mysql_result($req3,"0","comment");
	if ($q3r!="")$htmlresult .=  "$q3r<br>";
	if ($q3c!="")$htmlresult .=  "Commentaires : $q3c<br>";
	}
	
	if($idquestion=="4"){
	$sql4 = "SELECT * FROM fr_q4 WHERE pays='$row->pays' ORDER BY id DESC";
	$req4 = mysql_query($sql4) or die("req4 : ".mysql_error());
	$q4r = mysql_result($req4,"0","q4r");
	$q4c = mysql_result($req4,"0","comment");
	if ($q4r!="")$htmlresult .=  "$q4r<br>";
	if ($q4c!="")$htmlresult .=  "Commentaires : $q4c<br>";
	}
	
	if($idquestion=="5"){
	$sql5 = "SELECT * FROM fr_q5 WHERE pays='$row->pays' ORDER BY id DESC";
	$req5 = mysql_query($sql5) or die("req5 : ".mysql_error());
	$q5r = mysql_result($req5,"0","q5r");
	if ($q5r!="")$htmlresult .=  "$q5r<br>";
	}
	
	if($idquestion=="6"){
	$sql6 = "SELECT * FROM fr_q6 WHERE pays='$row->pays' ORDER BY id DESC";
	$req6 = mysql_query($sql6) or die("req6 : ".mysql_error());
	$q6r = mysql_result($req6,"0","q6r");
	$q6c = mysql_result($req6,"0","comment");
	if ($q6r!="")$htmlresult .=  "$q6r<br>";
	if ($q6c!="")$htmlresult .=  "Commentaires : $q6c<br>";
	}
	
	if($idquestion=="7"){
	$sql7 = "SELECT * FROM fr_q7 WHERE pays='$row->pays' ORDER BY id DESC";
	$req7 = mysql_query($sql7) or die("req7 : ".mysql_error());
	$q7r = mysql_result($req7,"0","q7r");
	if ($q7r!="")$htmlresult .=  "$q7r<br>";
	}
	
	if($idquestion=="8"){
	$sql8 = "SELECT * FROM fr_q8 WHERE pays='$row->pays' ORDER BY id DESC";
	$req8 = mysql_query($sql8) or die("req8 : ".mysql_error());
	$q8r = mysql_result($req8,"0","q8r");
	if ($q8r!="")$htmlresult .=  "$q8r<br>";
	}
	
	if($idquestion=="9"){
	$sql9 = "SELECT * FROM fr_q9 WHERE pays='$row->pays' ORDER BY id DESC";
	$req9 = mysql_query($sql9) or die("req9 : ".mysql_error());
	$q9r9 = mysql_result($req9,"0","q9r1");
	$q9r2 = mysql_result($req9,"0","q9r2");
	$q9c = mysql_result($req9,"0","comment");
	if ($q9r9!="")$htmlresult .=  "$q9r9<br>";
	if ($q9r2!="")$htmlresult .=  "$q9r2<br>";
	if ($q9c!="")$htmlresult .=  "Commentaires : $q9c<br>";
	}
	
	if($idquestion=="10"){
	$sql10 = "SELECT * FROM fr_q10 WHERE pays='$row->pays' ORDER BY id DESC";
	$req10 = mysql_query($sql10) or die("req10 : ".mysql_error());
	$q10r1 = mysql_result($req10,"0","q10r1");
	$q10r2 = mysql_result($req10,"0","q10r2");
	$q10r3 = mysql_result($req10,"0","q10r3");
	$q10r3s = mysql_result($req10,"0","q10r3s");
	$q10c = mysql_result($req10,"0","comment");
	if ($q10r1!="")$htmlresult .=  "$q10r1<br>";
	if ($q10r2!="")$htmlresult .=  "$q10r2<br>";
	if ($q10r3!=""){$htmlresult .=  "$q10r3";if ($q10r3s!="")$htmlresult .=  " : $q10r3s";$htmlresult .=  "<br>";}
	if ($q10c!="")$htmlresult .=  "$q10c<br>";
	}
	
	if($idquestion=="11"){
	$sql11 = "SELECT * FROM fr_q11 WHERE pays='$row->pays' ORDER BY id DESC";
	$req11 = mysql_query($sql11) or die("req11 : ".mysql_error());
	$q11r = mysql_result($req11,"0","q11r");
	$q11c = mysql_result($req11,"0","comment");
	if ($q11r!="")$htmlresult .=  "$q11r<br>";
	if ($q11c!="")$htmlresult .=  "Commentaires : $q11c<br>";
	}
	
	if($idquestion=="12"){
	$sql12 = "SELECT * FROM fr_q12 WHERE pays='$row->pays' ORDER BY id DESC";
	$req12 = mysql_query($sql12) or die("req12 : ".mysql_error());
	$q12r1 = mysql_result($req12,"0","q12r1");
	$q12r2 = mysql_result($req12,"0","q12r2");
	$q12r3 = mysql_result($req12,"0","q12r3");
	$q12r3s = mysql_result($req12,"0","q12r3s");
	$q12r4 = mysql_result($req12,"0","q12r4");
	$q12r4s = mysql_result($req12,"0","q12r4s");
	$q12r5 = mysql_result($req12,"0","q12r5");
	$q12r5s = mysql_result($req12,"0","q12r5s");
	$q12c = mysql_result($req12,"0","comment");
	if ($q12r1!="")$htmlresult .=  "$q12r1<br>";
	if ($q12r2!="")$htmlresult .=  "$q12r2<br>";
	if ($q12r3!=""){$htmlresult .=  "$q12r3";if ($q12r3s!="")$htmlresult .=  " : $q12r3s";$htmlresult .=  "<br>";}
	if ($q12r4!=""){$htmlresult .=  "$q12r4";if ($q12r4s!="")$htmlresult .=  " : $q12r4s";$htmlresult .=  "<br>";}
	if ($q12r5!=""){$htmlresult .=  "$q12r5";if ($q12r5s!="")$htmlresult .=  " : $q12r5s";$htmlresult .=  "<br>";}
	if ($q12c!="")$htmlresult .=  "$q12c<br>";
	}
	
	if($idquestion=="13"){
	$sql13 = "SELECT * FROM fr_q13 WHERE pays='$row->pays' ORDER BY id DESC";
	$req13 = mysql_query($sql13) or die("req13 : ".mysql_error());
	$q13r1 = mysql_result($req13,"0","q13r1");
	$q13r2 = mysql_result($req13,"0","q13r2");
	$q13r2s = mysql_result($req13,"0","q13r2s");
	$q13r3 = mysql_result($req13,"0","q13r3");
	$q13c = mysql_result($req13,"0","comment");
	if ($q13r1!="")$htmlresult .=  "$q13r1<br>";
	if ($q13r2!=""){$htmlresult .=  "$q13r2";if ($q13r2s!="")$htmlresult .=  " : $q13r2s";$htmlresult .=  "<br>";}
	if ($q13r3!="")$htmlresult .=  "$q13r3<br>";
	if ($q13c!="")$htmlresult .=  "$q13c<br>";
	}
	
	if($idquestion=="14"){
	$sql14 = "SELECT * FROM fr_q14 WHERE pays='$row->pays' ORDER BY id DESC";
	$req14 = mysql_query($sql14) or die("req14 : ".mysql_error());
	$q14r = mysql_result($req14,"0","q14r");
	$q14c = mysql_result($req14,"0","comment");
	if ($q14r!="")$htmlresult .=  "$q14r<br>";
	if ($q14c!="")$htmlresult .=  "Commentaires : $q14c<br>";
	}
	
	if($idquestion=="15"){
	$sql15 = "SELECT * FROM fr_q15 WHERE pays='$row->pays' ORDER BY id DESC";
	$req15 = mysql_query($sql15) or die("req15 : ".mysql_error());
	$q15r = mysql_result($req15,"0","q15r");
	$q15c = mysql_result($req15,"0","comment");
	if ($q15r!="")$htmlresult .=  "$q15r<br>";
	if ($q15c!="")$htmlresult .=  "Commentaires : $q15c<br>";
	}
	
	if($idquestion=="16"){
	$sql16 = "SELECT * FROM fr_q16 WHERE pays='$row->pays' ORDER BY id DESC";
	$req16 = mysql_query($sql16) or die("req16 : ".mysql_error());
	$q16r = mysql_result($req16,"0","q16r");
	$q16c = mysql_result($req16,"0","comment");
	if ($q16r!="")$htmlresult .=  "$q16r<br>";
	if ($q16c!="")$htmlresult .=  "Commentaires : $q16c<br>";
	}
	
	if($idquestion=="17"){
	$sql17 = "SELECT * FROM fr_q17 WHERE pays='$row->pays' ORDER BY id DESC";
	$req17 = mysql_query($sql17) or die("req17 : ".mysql_error());
	$q17r = mysql_result($req17,"0","q17r");
	$q17c = mysql_result($req17,"0","comment");
	if ($q17r!="")$htmlresult .=  "$q17r<br>";
	if ($q17c!="")$htmlresult .=  "Commentaires : $q17c<br>";
	}
	
	if($idquestion=="18"){
	$sql18 = "SELECT * FROM fr_q18 WHERE pays='$row->pays' ORDER BY id DESC";
	$req18 = mysql_query($sql18) or die("req18 : ".mysql_error());
	$q18r1 = mysql_result($req18,"0","q18r1");
	$q18r1s = mysql_result($req18,"0","q18r1s");
	$q18r2 = mysql_result($req18,"0","q18r2");
	$q18r2s = mysql_result($req18,"0","q18r2s");
	$q18r3 = mysql_result($req18,"0","q18r3");
	$q18r3s = mysql_result($req18,"0","q18r3s");
	$q18r4 = mysql_result($req18,"0","q18r4");
	$q18r4s = mysql_result($req18,"0","q18r4s");
	$q18c = mysql_result($req18,"0","comment");
	if ($q18r1!=""){$htmlresult .=  "$q18r1";if ($q18r1s!="")$htmlresult .=  " : $q18r1s";$htmlresult .=  "<br>";}
	if ($q18r2!=""){$htmlresult .=  "$q18r2";if ($q18r2s!="")$htmlresult .=  " : $q18r2s";$htmlresult .=  "<br>";}
	if ($q18r3!=""){$htmlresult .=  "$q18r3";if ($q18r3s!="")$htmlresult .=  " : $q18r3s";$htmlresult .=  "<br>";}
	if ($q18r4!=""){$htmlresult .=  "$q18r4";if ($q18r4s!="")$htmlresult .=  " : $q18r4s";$htmlresult .=  "<br>";}
	if ($q18c!="")$htmlresult .=  "$q18c<br>";
	}
	
	if($idquestion=="19"){
	$sql19 = "SELECT * FROM fr_q19 WHERE pays='$row->pays' ORDER BY id DESC";
	$req19 = mysql_query($sql19) or die("req19 : ".mysql_error());
	$q19r1 = mysql_result($req19,"0","q19r1");
	$q19r1s = mysql_result($req19,"0","q19r1s");
	$q19r2 = mysql_result($req19,"0","q19r2");
	$q19r2s = mysql_result($req19,"0","q19r2s");
	$q19r3 = mysql_result($req19,"0","q19r3");
	$q19r3s = mysql_result($req19,"0","q19r3s");
	$q19r4 = mysql_result($req19,"0","q19r4");
	$q19r4s = mysql_result($req19,"0","q19r4s");
	$q19c = mysql_result($req19,"0","comment");
	if ($q19r1!=""){$htmlresult .=  "$q19r1";if ($q19r1s!="")$htmlresult .=  " : $q19r1s";$htmlresult .=  "<br>";}
	if ($q19r2!=""){$htmlresult .=  "$q19r2";if ($q19r2s!="")$htmlresult .=  " : $q19r2s";$htmlresult .=  "<br>";}
	if ($q19r3!=""){$htmlresult .=  "$q19r3";if ($q19r3s!="")$htmlresult .=  " : $q19r3s";$htmlresult .=  "<br>";}
	if ($q19r4!=""){$htmlresult .=  "$q19r4";if ($q19r4s!="")$htmlresult .=  " : $q19r4s";$htmlresult .=  "<br>";}
	if ($q19c!="")$htmlresult .=  "$q19c<br>";
	}
	
	if($idquestion=="20"){
	$sql20 = "SELECT * FROM fr_q20 WHERE pays='$row->pays' ORDER BY id DESC";
	$req20 = mysql_query($sql20) or die("req20 : ".mysql_error());
	$q20r = mysql_result($req20,"0","q20r");
	$q20c = mysql_result($req20,"0","comment");
	if ($q20r!="")$htmlresult .=  "$q20r<br>";
	if ($q20c!="")$htmlresult .=  "Commentaires : $q20c<br>";
	}
	
	if($idquestion=="21"){
	$sql21 = "SELECT * FROM fr_q21 WHERE pays='$row->pays' ORDER BY id DESC";
	$req21 = mysql_query($sql21) or die("req21 : ".mysql_error());
	$q21r = mysql_result($req21,"0","q21r");
	$q21c = mysql_result($req21,"0","comment");
	if ($q21r!="")$htmlresult .=  "$q21r<br>";
	if ($q21c!="")$htmlresult .=  "Commentaires : $q21c<br>";
	}
	
	if($idquestion=="22"){
	$sql22 = "SELECT * FROM fr_q22 WHERE pays='$row->pays' ORDER BY id DESC";
	$req22 = mysql_query($sql22) or die("req22 : ".mysql_error());
	$res22 = mysql_num_rows($req22);
	if($res22>"0"){
	$q22r = mysql_result($req22,"0","q22r");
	if ($q22r!=""){$htmlresult .=  "<a href='docpays/$q22r'>$q22r</a><br>";}
	}else{$htmlresult .=  "Pas de document joint.";}
	}
	
	if($idquestion=="23"){
	$sql23 = "SELECT * FROM fr_q23";
	$req23 = mysql_query($sql23) or die("req23 : ".mysql_error());
	$q23r1r = mysql_result($req23,"0","q23r1");
	$q23r2r = mysql_result($req23,"0","q23r2");
	$q23r3r = mysql_result($req23,"0","q23r3");
	$q23r4r = mysql_result($req23,"0","q23r4");
	$q23r5r = mysql_result($req23,"0","q23r5");
	$q23r6r = mysql_result($req23,"0","q23r6");

	$sql23 = "SELECT * FROM fr_q23 WHERE pays='$row->pays' ORDER BY id DESC";
	$req23 = mysql_query($sql23) or die("req23 : ".mysql_error());
	$q23r1 = mysql_result($req23,"0","q23r1");
	$q23r2 = mysql_result($req23,"0","q23r2");
	$q23r3 = mysql_result($req23,"0","q23r3");
	$q23r4 = mysql_result($req23,"0","q23r4");
	$q23r5 = mysql_result($req23,"0","q23r5");
	$q23r6 = mysql_result($req23,"0","q23r6");
	if ($q23r1!="")$htmlresult .=  "$q23r1r : $q23r1<br>";
	if ($q23r2!="")$htmlresult .=  "$q23r2r : $q23r2<br>";
	if ($q23r3!="")$htmlresult .=  "$q23r3r : $q23r3<br>";
	if ($q23r4!="")$htmlresult .=  "$q23r4r : $q23r4<br>";
	if ($q23r5!="")$htmlresult .=  "$q23r5r : $q23r5<br>";
	if ($q23r6!="")$htmlresult .=  "$q23r6r : $q23r6<br>";
	}
	
	if($idquestion=="24"){
	$sql24 = "SELECT * FROM fr_q24";
	$req24 = mysql_query($sql24) or die("req24 : ".mysql_error());
	$q24r1r = mysql_result($req24,"0","q24r1");
	$q24r2r = mysql_result($req24,"0","q24r2");
	$q24r3r = mysql_result($req24,"0","q24r3");
	$q24r4r = mysql_result($req24,"0","q24r4");

	$sql24 = "SELECT * FROM fr_q24 WHERE pays='$row->pays' ORDER BY id DESC";
	$req24 = mysql_query($sql24) or die("req24 : ".mysql_error());
	$q24r1 = mysql_result($req24,"0","q24r1");
	$q24r2 = mysql_result($req24,"0","q24r2");
	$q24r3 = mysql_result($req24,"0","q24r3");
	$q24r4 = mysql_result($req24,"0","q24r4");
	if ($q24r1!="")$htmlresult .=  "$q24r1r : $q24r1<br>";
	if ($q24r2!="")$htmlresult .=  "$q24r2r : $q24r2<br>";
	if ($q24r3!="")$htmlresult .=  "$q24r3r : $q24r3<br>";
	if ($q24r4!="")$htmlresult .=  "$q24r4r : $q24r4<br>";
	}
	
	if($idquestion=="25"){
	$sql25 = "SELECT * FROM fr_q25";
	$req25 = mysql_query($sql25) or die("req25 : ".mysql_error());
	$q25r1r = mysql_result($req25,"0","q25r1");
	$q25r2r = mysql_result($req25,"0","q25r2");
	$q25r3r = mysql_result($req25,"0","q25r3");
	$q25r4r = mysql_result($req25,"0","q25r4");

	$sql25 = "SELECT * FROM fr_q25 WHERE pays='$row->pays' ORDER BY id DESC";
	$req25 = mysql_query($sql25) or die("req25 : ".mysql_error());
	$q25r1 = mysql_result($req25,"0","q25r1");
	$q25r2 = mysql_result($req25,"0","q25r2");
	$q25r3 = mysql_result($req25,"0","q25r3");
	$q25r4 = mysql_result($req25,"0","q25r4");
	if ($q25r1!="")$htmlresult .=  "$q25r1r : $q25r1<br>";
	if ($q25r2!="")$htmlresult .=  "$q25r2r : $q25r2<br>";
	if ($q25r3!="")$htmlresult .=  "$q25r3r : $q25r3<br>";
	if ($q25r4!="")$htmlresult .=  "$q25r4r : $q25r4<br>";
	}
	
	if($idquestion=="26"){
	$sql26 = "SELECT * FROM fr_q26";
	$req26 = mysql_query($sql26) or die("req26 : ".mysql_error());
	$q26r1r = mysql_result($req26,"0","q26r1");
	$q26r2r = mysql_result($req26,"0","q26r2");
	$q26r3r = mysql_result($req26,"0","q26r3");
	$q26r4r = mysql_result($req26,"0","q26r4");

	$sql26 = "SELECT * FROM fr_q26 WHERE pays='$row->pays' ORDER BY id DESC";
	$req26 = mysql_query($sql26) or die("req26 : ".mysql_error());
	$q26r1 = mysql_result($req26,"0","q26r1");
	$q26r2 = mysql_result($req26,"0","q26r2");
	$q26r3 = mysql_result($req26,"0","q26r3");
	$q26r4 = mysql_result($req26,"0","q26r4");
	if ($q26r1!="")$htmlresult .=  "$q26r1r : $q26r1<br>";
	if ($q26r2!="")$htmlresult .=  "$q26r2r : $q26r2<br>";
	if ($q26r3!="")$htmlresult .=  "$q26r3r : $q26r3<br>";
	if ($q26r4!="")$htmlresult .=  "$q26r4r : $q26r4<br>";
	}
	
	if($idquestion=="27"){
	$sql27 = "SELECT * FROM fr_q27";
	$req27 = mysql_query($sql27) or die("req27 : ".mysql_error());
	$q27D1 = mysql_result($req27,"0","q27D1");
	$q27r1 = mysql_result($req27,"0","q27r1");
	$q27r2 = mysql_result($req27,"0","q27r2");
	$q27r3 = mysql_result($req27,"0","q27r3");
	$htmlresult .=  "<table width='100%' border='1' cellpadding='5' cellspacing='0' class='fiche'>";
	$htmlresult .=  "<tr>";
	$htmlresult .=  "<td width='30%'><b>$q27D1</b></td>";
	$htmlresult .=  "<td width='20%' align='center'><b>$q27r1</b></td>";
	$htmlresult .=  "<td width='20%' align='center'><b>$q27r2</b></td>";
	$htmlresult .=  "<td width='20%' align='center'><b>$q27r3</b></td>";
	$htmlresult .=  "</tr>";

 	for($i=1;$i<="16";$i++){ // boucle sur les 16 questions en BDD
	$sql270 = "SELECT * FROM fr_q27q$i WHERE pays='non' ORDER BY id DESC";
	$req270 = mysql_query($sql270) or die("req270 : ".mysql_error());
	$q27q[$i] = mysql_result($req270,"0","q27q$i");

	$sql271 = "SELECT * FROM fr_q27q$i WHERE pays='$row->pays' ORDER BY id DESC";
	$req271 = mysql_query($sql271) or die("req271 : ".mysql_error());
	$q27qir = "q27q".$i."r";$q27qr[$i] = mysql_result($req271,"0","$q27qir");
	$htmlresult .=  "<tr>\n";
	$htmlresult .=  "<td>$q27q[$i]</td>\n";
	$htmlresult .=  "<td align='center'>";if($q27qr[$i]==$q27r1){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
	$htmlresult .=  "<td align='center'>";if($q27qr[$i]==$q27r2){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
	$htmlresult .=  "<td align='center'>";if($q27qr[$i]==$q27r3){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
	$htmlresult .=  "</tr>\n";
	}
	$htmlresult .=  "</table>";
	
	}
	
	if($idquestion=="28"){
	$sql28 = "SELECT * FROM fr_q28 WHERE pays='$row->pays' ORDER BY id DESC";
	$req28 = mysql_query($sql28) or die("req28 : ".mysql_error());
	$q28r1 = mysql_result($req28,"0","q28r1");
	$q28r2 = mysql_result($req28,"0","q28r2");
	$q28r3 = mysql_result($req28,"0","q28r3");
	$q28c = mysql_result($req28,"0","comment");
	if ($q28r1!="")$htmlresult .=  "$q28r1<br>";
	if ($q28r2!="")$htmlresult .=  "$q28r2<br>";
	if ($q28r3!="")$htmlresult .=  "$q28r3<br>";
	if ($q28c!="")$htmlresult .=  "Commentaires : $q28c<br>";
	}
	
	if($idquestion=="29"){
	$sql29 = "SELECT * FROM fr_q29 WHERE pays='$row->pays' ORDER BY id DESC";
	$req29 = mysql_query($sql29) or die("req29 : ".mysql_error());
	$q29r = mysql_result($req29,"0","q29r");
	$q29c = mysql_result($req29,"0","comment");
	if ($q29r!="")$htmlresult .=  "$q29r<br>";
	if ($q29c!="")$htmlresult .=  "Commentaires : $q29c<br>";
	}
	
	if($idquestion=="30"){
	$sql30 = "SELECT * FROM fr_q30 WHERE pays='$row->pays' ORDER BY id DESC";
	$req30 = mysql_query($sql30) or die("req30 : ".mysql_error());
	$q30r = mysql_result($req30,"0","q30r");
	$q30c = mysql_result($req30,"0","comment");
	if ($q30r!="")$htmlresult .=  "$q30r<br>";
	if ($q30c!="")$htmlresult .=  "Commentaires : $q30c<br>";
	}
	
	if($idquestion=="31"){
	$sql31 = "SELECT * FROM fr_q31 WHERE pays='$row->pays' ORDER BY id DESC";
	$req31 = mysql_query($sql31) or die("req31 : ".mysql_error());
	$q31r = mysql_result($req31,"0","q31r");
	$q31c = mysql_result($req31,"0","comment");
	if ($q31r!="")$htmlresult .=  "$q31r<br>";
	if ($q31c!="")$htmlresult .=  "Commentaires : $q31c<br>";
	}
	
	if($idquestion=="32"){
	$sql32 = "SELECT * FROM fr_q32 WHERE pays='$row->pays' ORDER BY id DESC";
	$req32 = mysql_query($sql32) or die("req32 : ".mysql_error());
	$q32r1 = mysql_result($req32,"0","q32r1");
	$q32r2 = mysql_result($req32,"0","q32r2");
	$q32r3 = mysql_result($req32,"0","q32r3");
	$q32r4 = mysql_result($req32,"0","q32r4");
	$q32r5 = mysql_result($req32,"0","q32r5");
	$q32r5s = mysql_result($req32,"0","q32r5s");
	$q32c = mysql_result($req32,"0","comment");
	if ($q32r1!="")$htmlresult .=  "$q32r1<br>";
	if ($q32r2!="")$htmlresult .=  "$q32r2<br>";
	if ($q32r3!="")$htmlresult .=  "$q32r3<br>";
	if ($q32r4!="")$htmlresult .=  "$q32r4<br>";
	if ($q32r5!="")$htmlresult .=  "$q32r5";if($q32r5s!=""){$htmlresult .=  " : $q32r5s";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "<br>";
	if ($q32c!="")$htmlresult .=  "Commentaires : $q32c<br>";
	}
	
	if($idquestion=="33"){
	$sql33 = "SELECT * FROM fr_q33 WHERE pays='$row->pays' ORDER BY id DESC";
	$req33 = mysql_query($sql33) or die("req33 : ".mysql_error());
	$q33r1 = mysql_result($req33,"0","q33r1");
	$q33r1s = mysql_result($req33,"0","q33r1s");
	$q33r2 = mysql_result($req33,"0","q33r2");
	$q33r2s = mysql_result($req33,"0","q33r2s");
	$q33c = mysql_result($req33,"0","comment");
	if ($q33r1!=""){$htmlresult .=  "$q33r1";if ($q33r1s!="")$htmlresult .=  " : $q33r1s";$htmlresult .=  "<br>";}
	if ($q33r2!=""){$htmlresult .=  "$q33r2";if ($q33r2s!="")$htmlresult .=  " : $q33r2s";$htmlresult .=  "<br>";}
	if ($q33c!="")$htmlresult .=  "Commentaires : $q33c<br>";
	}
	
	if($idquestion=="34"){
	$sql34 = "SELECT * FROM fr_q34 WHERE pays='$row->pays' ORDER BY id DESC";
	$req34 = mysql_query($sql34) or die("req34 : ".mysql_error());
	$q34r = mysql_result($req34,"0","q34r");
	$q34c = mysql_result($req34,"0","comment");
	if ($q34r!="")$htmlresult .=  "$q34r<br>";
	if ($q34c!="")$htmlresult .=  "Commentaires : $q34c<br>";
	}
	
	if($idquestion=="35"){
	$sql35 = "SELECT * FROM fr_q35";$req35 = mysql_query($sql35) or die("req35 : ".mysql_error());
	$q35r1 = mysql_result($req35,"0","q35r1");
	$q35r2 = mysql_result($req35,"0","q35r2");
	$q35C= mysql_result($req35,"0","q35C");
	$htmlresult .=  "<table width='100%' border='1' cellpadding='5' cellspacing='0' class='fiche'>";
	$htmlresult .=  "<tr>";
	$htmlresult .=  "<td><b>$q35D1</b></td>";
	$htmlresult .=  "<td align='center'><b>$q35r1</b></td>";
	$htmlresult .=  "<td align='center'><b>$q35r2</b></td>";
	$htmlresult .=  "<td align='center'><b>$q35C</b></td>";
	$htmlresult .=  "</tr>";

	for($i=1;$i<="5";$i++){ // boucle sur les 5 questions en BDD
	$sql350 = "SELECT * FROM fr_q35q$i WHERE pays='non' ORDER BY id DESC";
	$req350 = mysql_query($sql350) or die("req350 : ".mysql_error());
	$q35q[$i] = mysql_result($req350,"0","q35q$i");

	$sql351 = "SELECT * FROM fr_q35q$i WHERE pays='$row->pays' ORDER BY id DESC";
	$req351 = mysql_query($sql351) or die("req351 : ".mysql_error());
	$q35qir = "q35q".$i."r";$q35qr[$i] = mysql_result($req351,"0","$q35qir");
	$q35qic = "q35q".$i."c";$q35qc[$i] = mysql_result($req351,"0","$q35qic");
	$htmlresult .=  "<tr>\n";
	$htmlresult .=  "<td width='200'>$q35q[$i]</td>\n";
	$htmlresult .=  "<td width='30' align='center'>";if($q35qr[$i]==$q35r1){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
	$htmlresult .=  "<td width='30' align='center'>";if($q35qr[$i]==$q35r2){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
	$htmlresult .=  "<td align='center'>";if($q35qc[$i]){$htmlresult .=  "$q35qc[$i]";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
	$htmlresult .=  "</tr>\n";
	}
	$htmlresult .=  "</table>";
	}
	
	if($idquestion=="36"){

	$sql36 = "SELECT * FROM fr_q36 WHERE pays='$row->pays' ORDER BY id DESC";
	$req36 = mysql_query($sql36) or die("req36 : ".mysql_error());
	$q36r1 = mysql_result($req36,"0","q36r1");	$q36r1s = mysql_result($req36,"0","q36r1s");
	$q36r2 = mysql_result($req36,"0","q36r2");	$q36r2s = mysql_result($req36,"0","q36r2s");
	$q36r3 = mysql_result($req36,"0","q36r3");	$q36r3s = mysql_result($req36,"0","q36r3s");
	$q36r4 = mysql_result($req36,"0","q36r4");	$q36r4s = mysql_result($req36,"0","q36r4s");
	$q36r5 = mysql_result($req36,"0","q36r5");	$q36r5s = mysql_result($req36,"0","q36r5s");
	$q36c = mysql_result($req36,"0","comment");
	if ($q36r1!=""){$htmlresult .=  "$q36r1";if ($q36r1s!="")$htmlresult .=  " : $q36r1s";$htmlresult .=  "<br>";}
	if ($q36r2!=""){$htmlresult .=  "$q36r2";if ($q36r2s!="")$htmlresult .=  " : $q36r2s";$htmlresult .=  "<br>";}
	if ($q36r3!=""){$htmlresult .=  "$q36r3";if ($q36r3s!="")$htmlresult .=  " : $q36r3s";$htmlresult .=  "<br>";}
	if ($q36r4!=""){$htmlresult .=  "$q36r4";if ($q36r4s!="")$htmlresult .=  " : $q36r4s";$htmlresult .=  "<br>";}
	if ($q36r5!=""){$htmlresult .=  "$q36r5";if ($q36r5s!="")$htmlresult .=  " : $q36r5s";$htmlresult .=  "<br>";}	
	}
	
	if($idquestion=="37"){

	$sql37 = "SELECT * FROM fr_q37";$req37 = mysql_query($sql37) or die("req37 : ".mysql_error());
	$q37r1 = mysql_result($req37,"0","q37r1");
	$q37r2 = mysql_result($req37,"0","q37r2");
	$q37C= mysql_result($req37,"0","q37C");
	$htmlresult .=  "<table width='100%' border='1' cellpadding='5' cellspacing='0' class='fiche'>";
	$htmlresult .=  "<tr>";
	$htmlresult .=  "<td><b>$q37D1</b></td>";
	$htmlresult .=  "<td align='center'><b>$q37r1</b></td>";
	$htmlresult .=  "<td align='center'><b>$q37r2</b></td>";
	$htmlresult .=  "<td align='center'><b>$q37C</b></td>";
	$htmlresult .=  "</tr>";

	for($i=1;$i<="5";$i++){ // boucle sur les 5 questions en BDD
	$sql370 = "SELECT * FROM fr_q37q$i WHERE pays='non' ORDER BY id DESC";
	$req370 = mysql_query($sql370) or die("req370 : ".mysql_error());
	$q37q[$i] = mysql_result($req370,"0","q37q$i");

	$sql371 = "SELECT * FROM fr_q37q$i WHERE pays='$row->pays' ORDER BY id DESC";
	$req371 = mysql_query($sql371) or die("req371 : ".mysql_error());
	$q37qir = "q37q".$i."r";$q37qr[$i] = mysql_result($req371,"0","$q37qir");
	$q37qic = "q37q".$i."c";$q37qc[$i] = mysql_result($req371,"0","$q37qic");
	$htmlresult .=  "<tr>\n";
	$htmlresult .=  "<td width='200'>$q37q[$i]</td>\n";
	$htmlresult .=  "<td width='30' align='center'>";if($q37qr[$i]==$q37r1){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
	$htmlresult .=  "<td width='30' align='center'>";if($q37qr[$i]==$q37r2){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
	$htmlresult .=  "<td align='center'>";if($q37qc[$i]){$htmlresult .=  "$q37qc[$i]";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
	$htmlresult .=  "</tr>\n";
	}
	$htmlresult .=  "</table>";
	
	}
	
	if($idquestion=="38"){
	$sql38 = "SELECT * FROM fr_q38 WHERE pays='$row->pays' ORDER BY id DESC";
	$req38 = mysql_query($sql38) or die("req38 : ".mysql_error());
	$q38r = mysql_result($req38,"0","q38r");
	$q38c = mysql_result($req38,"0","comment");
	if ($q38r!="")$htmlresult .=  "$q38r<br>";
	if ($q38c!="")$htmlresult .=  "Commentaires : $q38c<br>";
	}
	
	if($idquestion=="39"){
	$sql39 = "SELECT * FROM fr_q39 WHERE pays='$row->pays' ORDER BY id DESC";
	$req39 = mysql_query($sql39) or die("req39 : ".mysql_error());
	$q39r = mysql_result($req39,"0","q39r");
	$q39r1r = mysql_result($req39,"0","q39r1r");
	$q39c = mysql_result($req39,"0","comment");
	if ($q39r!="")$htmlresult .=  "$q39r";if($q39r=="oui"){$htmlresult .=  " : $q39r1r";};$htmlresult .=  "<br>";
	if ($q39c!="")$htmlresult .=  "Commentaires : $q39c<br>";
	}
	
	if($idquestion=="40"){
	$sql40 = "SELECT * FROM fr_q40 WHERE pays='$row->pays' ORDER BY id DESC";
	$req40 = mysql_query($sql40) or die("req40 : ".mysql_error());
	$q40r = mysql_result($req40,"0","q40r");
	$q40c = mysql_result($req40,"0","comment");
	if ($q40r!="")$htmlresult .=  "$q40r<br>";
	if ($q40c!="")$htmlresult .=  "Commentaires : $q40c<br>";
	}
	
	if($idquestion=="41"){
	$sql41 = "SELECT * FROM fr_q41 WHERE pays='$row->pays' ORDER BY id DESC";
	$req41 = mysql_query($sql41) or die("req41 : ".mysql_error());
	$q41r = mysql_result($req41,"0","q41r");
	if ($q41r!="")$htmlresult .=  "$q41r<br>";
	}
	
	$htmlresult .=  "</td>";
	$htmlresult .=  "</tr>";
	}
	$htmlresult .=  "</table>";

}else{

$pays = $_POST['pays'];if(!$_POST['pays'])$pays='FRANCE';$htmlresult .=  "<h1 class='page-title'>$pays</h1>";
//$htmlresult .=  "<hr>";

/** Question 1 **/
$sql1 = "SELECT * FROM fr_q1";
$req1 = mysql_query($sql1) or die("req1 : ".mysql_error());
$q1 = mysql_result($req1,"0","q1");
$htmlresult .=  "<h2>1) $q1</h2>";

$sql1 = "SELECT * FROM fr_q1 WHERE pays='$pays' ORDER BY id DESC";
$req1 = mysql_query($sql1) or die("req1 : ".mysql_error());
$q1r1 = mysql_result($req1,"0","q1r1");
$q1r2 = mysql_result($req1,"0","q1r2");
$q1r3 = mysql_result($req1,"0","q1r3");
$q1c = mysql_result($req1,"0","comment");
if ($q1r1!="")$htmlresult .=  "$q1r1<br>";
if ($q1r2!="")$htmlresult .=  "$q1r2<br>";
if ($q1r3!="")$htmlresult .=  "$q1r3<br>";
if ($q1c!="")$htmlresult .=  "Commentaires : $q1c<br>";
$htmlresult .=  "<hr>";

/** Question 2 **/
$sql2 = "SELECT * FROM fr_q2";
$req2 = mysql_query($sql2) or die("req2 : ".mysql_error());
$q2 = mysql_result($req2,"0","q2");
$q2r1r = mysql_result($req2,"0","q2r1");
$q2r2r = mysql_result($req2,"0","q2r2");
$q2r3r = mysql_result($req2,"0","q2r3");
$q2r4r = mysql_result($req2,"0","q2r4");
$q2r5r = mysql_result($req2,"0","q2r5");
$q2r6r = mysql_result($req2,"0","q2r6");
$htmlresult .=  "<h2>2) $q2</h2>";

$sql2 = "SELECT * FROM fr_q2 WHERE pays='$pays' ORDER BY id DESC";
$req2 = mysql_query($sql2) or die("req2 : ".mysql_error());
$q2r1 = mysql_result($req2,"0","q2r1");
$q2r2 = mysql_result($req2,"0","q2r2");
$q2r3 = mysql_result($req2,"0","q2r3");
$q2r4 = mysql_result($req2,"0","q2r4");
$q2r5 = mysql_result($req2,"0","q2r5");
$q2r6 = mysql_result($req2,"0","q2r6");
if ($q2r1!="")$htmlresult .=  "$q2r1r : $q2r1<br>";
if ($q2r2!="")$htmlresult .=  "$q2r2r : $q2r2<br>";
if ($q2r3!="")$htmlresult .=  "$q2r3r : $q2r3<br>";
if ($q2r4!="")$htmlresult .=  "$q2r4r : $q2r4<br>";
if ($q2r5!="")$htmlresult .=  "$q2r5r : $q2r5<br>";
if ($q2r6!="")$htmlresult .=  "$q2r6r : $q2r6<br>";
$htmlresult .=  "<hr>";

/** Question 3 **/
$sql3 = "SELECT * FROM fr_q3";
$req3 = mysql_query($sql3) or die("req1 : ".mysql_error());
$q3 = mysql_result($req3,"0","q3");
$htmlresult .=  "<h2>3) $q3</h2>";

$sql3 = "SELECT * FROM fr_q3 WHERE pays='$pays' ORDER BY id DESC";
$req3 = mysql_query($sql3) or die("req3 : ".mysql_error());
$q3r = mysql_result($req3,"0","q3r");
$q3c = mysql_result($req3,"0","comment");
if ($q3r!="")$htmlresult .=  "$q3r<br>";
if ($q3c!="")$htmlresult .=  "Commentaires : $q3c<br>";
$htmlresult .=  "<hr>";

/** Question 4 **/
$sql4 = "SELECT * FROM fr_q4";
$req4 = mysql_query($sql4) or die("req4 : ".mysql_error());
$q4 = mysql_result($req4,"0","q4");
$htmlresult .=  "<h2>4) $q4</h2>";

$sql4 = "SELECT * FROM fr_q4 WHERE pays='$pays' ORDER BY id DESC";
$req4 = mysql_query($sql4) or die("req4 : ".mysql_error());
$q4r = mysql_result($req4,"0","q4r");
$q4c = mysql_result($req4,"0","comment");
if ($q4r!="")$htmlresult .=  "$q4r<br>";
if ($q4c!="")$htmlresult .=  "Commentaires : $q4c<br>";
$htmlresult .=  "<hr>";

/** Question 5 **/
$sql5 = "SELECT * FROM fr_q5";
$req5 = mysql_query($sql5) or die("req5 : ".mysql_error());
$q5 = mysql_result($req5,"0","q5");
$htmlresult .=  "<h2>5) $q5</h2>";

$sql5 = "SELECT * FROM fr_q5 WHERE pays='$pays' ORDER BY id DESC";
$req5 = mysql_query($sql5) or die("req5 : ".mysql_error());
$q5r = mysql_result($req5,"0","q5r");
if ($q5r!="")$htmlresult .=  "$q5r<br>";
$htmlresult .=  "<hr>";

/** Question 6 **/
$sql6 = "SELECT * FROM fr_q6";
$req6 = mysql_query($sql6) or die("req6 : ".mysql_error());
$q6 = mysql_result($req6,"0","q6");
$htmlresult .=  "<h2>6) $q6</h2>";

$sql6 = "SELECT * FROM fr_q6 WHERE pays='$pays' ORDER BY id DESC";
$req6 = mysql_query($sql6) or die("req6 : ".mysql_error());
$q6r = mysql_result($req6,"0","q6r");
$q6c = mysql_result($req6,"0","comment");
if ($q6r!="")$htmlresult .=  "$q6r<br>";
if ($q6c!="")$htmlresult .=  "Commentaires : $q6c<br>";
$htmlresult .=  "<hr>";

/** Question 7 **/
$sql7 = "SELECT * FROM fr_q7";
$req7 = mysql_query($sql7) or die("req7 : ".mysql_error());
$q7 = mysql_result($req7,"0","q7");
$htmlresult .=  "<h2>7) $q7</h2>";

$sql7 = "SELECT * FROM fr_q7 WHERE pays='$pays' ORDER BY id DESC";
$req7 = mysql_query($sql7) or die("req7 : ".mysql_error());
$q7r = mysql_result($req7,"0","q7r");
if ($q7r!="")$htmlresult .=  "$q7r<br>";
$htmlresult .=  "<hr>";

/** Question 8 **/
$sql8 = "SELECT * FROM fr_q8";
$req8 = mysql_query($sql8) or die("req8 : ".mysql_error());
$q8 = mysql_result($req8,"0","q8");
$htmlresult .=  "<h2>8) $q8</h2>";

$sql8 = "SELECT * FROM fr_q8 WHERE pays='$pays' ORDER BY id DESC";
$req8 = mysql_query($sql8) or die("req8 : ".mysql_error());
$q8r = mysql_result($req8,"0","q8r");
if ($q8r!="")$htmlresult .=  "$q8r<br>";
$htmlresult .=  "<hr>";

/** Question 9 **/
$sql9 = "SELECT * FROM fr_q9";
$req9 = mysql_query($sql9) or die("req9 : ".mysql_error());
$q9 = mysql_result($req9,"0","q9");
$htmlresult .=  "<h2>9) $q9</h2>";

$sql9 = "SELECT * FROM fr_q9 WHERE pays='$pays' ORDER BY id DESC";
$req9 = mysql_query($sql9) or die("req9 : ".mysql_error());
$q9r1 = mysql_result($req9,"0","q9r1");
$q9r2 = mysql_result($req9,"0","q9r2");
$q9c = mysql_result($req9,"0","comment");
if ($q9r1!="")$htmlresult .=  "$q9r1<br>";
if ($q9r2!="")$htmlresult .=  "$q9r2<br>";
if ($q9c!="")$htmlresult .=  "Commentaires : $q9c<br>";
$htmlresult .=  "<hr>";

/** Question 10 **/
$sql10 = "SELECT * FROM fr_q10";
$req10 = mysql_query($sql10) or die("req10 : ".mysql_error());
$q10 = mysql_result($req10,"0","q10");
$htmlresult .=  "<h2>10) $q10</h2>";

$sql10 = "SELECT * FROM fr_q10 WHERE pays='$pays' ORDER BY id DESC";
$req10 = mysql_query($sql10) or die("req10 : ".mysql_error());
$q10r1 = mysql_result($req10,"0","q10r1");
$q10r2 = mysql_result($req10,"0","q10r2");
$q10r3 = mysql_result($req10,"0","q10r3");
$q10r3s = mysql_result($req10,"0","q10r3s");
$q10c = mysql_result($req10,"0","comment");
if ($q10r1!="")$htmlresult .=  "$q10r1<br>";
if ($q10r2!="")$htmlresult .=  "$q10r2<br>";
if ($q10r3!=""){$htmlresult .=  "$q10r3";if ($q10r3s!="")$htmlresult .=  " : $q10r3s";$htmlresult .=  "<br>";}
if ($q10c!="")$htmlresult .=  "$q10c<br>";
$htmlresult .=  "<hr>";

/** Question 11 **/
$sql11 = "SELECT * FROM fr_q11";
$req11 = mysql_query($sql11) or die("req11 : ".mysql_error());
$q11 = mysql_result($req11,"0","q11");
$htmlresult .=  "<h2>11) $q11</h2>";

$sql11 = "SELECT * FROM fr_q11 WHERE pays='$pays' ORDER BY id DESC";
$req11 = mysql_query($sql11) or die("req11 : ".mysql_error());
$q11r = mysql_result($req11,"0","q11r");
$q11c = mysql_result($req11,"0","comment");
if ($q11r!="")$htmlresult .=  "$q11r<br>";
if ($q11c!="")$htmlresult .=  "Commentaires : $q11c<br>";
$htmlresult .=  "<hr>";

/** Question 12 **/
$sql12 = "SELECT * FROM fr_q12";
$req12 = mysql_query($sql12) or die("req12 : ".mysql_error());
$q12 = mysql_result($req12,"0","q12");
$htmlresult .=  "<h2>12) $q12</h2>";

$sql12 = "SELECT * FROM fr_q12 WHERE pays='$pays' ORDER BY id DESC";
$req12 = mysql_query($sql12) or die("req12 : ".mysql_error());
$q12r1 = mysql_result($req12,"0","q12r1");
$q12r2 = mysql_result($req12,"0","q12r2");
$q12r3 = mysql_result($req12,"0","q12r3");
$q12r3s = mysql_result($req12,"0","q12r3s");
$q12r4 = mysql_result($req12,"0","q12r4");
$q12r4s = mysql_result($req12,"0","q12r4s");
$q12r5 = mysql_result($req12,"0","q12r5");
$q12r5s = mysql_result($req12,"0","q12r5s");
$q12c = mysql_result($req12,"0","comment");
if ($q12r1!="")$htmlresult .=  "$q12r1<br>";
if ($q12r2!="")$htmlresult .=  "$q12r2<br>";
if ($q12r3!=""){$htmlresult .=  "$q12r3";if ($q12r3s!="")$htmlresult .=  " : $q12r3s";$htmlresult .=  "<br>";}
if ($q12r4!=""){$htmlresult .=  "$q12r4";if ($q12r4s!="")$htmlresult .=  " : $q12r4s";$htmlresult .=  "<br>";}
if ($q12r5!=""){$htmlresult .=  "$q12r5";if ($q12r5s!="")$htmlresult .=  " : $q12r5s";$htmlresult .=  "<br>";}
if ($q12c!="")$htmlresult .=  "$q12c<br>";

$htmlresult .=  "<hr>";

/** Question 13 **/
$sql13 = "SELECT * FROM fr_q13";
$req13 = mysql_query($sql13) or die("req13 : ".mysql_error());
$q13 = mysql_result($req13,"0","q13");
$htmlresult .=  "<h2>13) $q13</h2>";

$sql13 = "SELECT * FROM fr_q13 WHERE pays='$pays' ORDER BY id DESC";
$req13 = mysql_query($sql13) or die("req13 : ".mysql_error());
$q13r1 = mysql_result($req13,"0","q13r1");
$q13r2 = mysql_result($req13,"0","q13r2");
$q13r2s = mysql_result($req13,"0","q13r2s");
$q13r3 = mysql_result($req13,"0","q13r3");
$q13c = mysql_result($req13,"0","comment");
if ($q13r1!="")$htmlresult .=  "$q13r1<br>";
if ($q13r2!=""){$htmlresult .=  "$q13r2";if ($q13r2s!="")$htmlresult .=  " : $q13r2s";$htmlresult .=  "<br>";}
if ($q13r3!="")$htmlresult .=  "$q13r3<br>";
if ($q13c!="")$htmlresult .=  "$q13c<br>";
$htmlresult .=  "<hr>";

/** Question 14 **/
$sql14 = "SELECT * FROM fr_q14";
$req14 = mysql_query($sql14) or die("req14 : ".mysql_error());
$q14 = mysql_result($req14,"0","q14");
$htmlresult .=  "<h2>14) $q14</h2>";

$sql14 = "SELECT * FROM fr_q14 WHERE pays='$pays' ORDER BY id DESC";
$req14 = mysql_query($sql14) or die("req14 : ".mysql_error());
$q14r = mysql_result($req14,"0","q14r");
$q14c = mysql_result($req14,"0","comment");
if ($q14r!="")$htmlresult .=  "$q14r<br>";
if ($q14c!="")$htmlresult .=  "Commentaires : $q14c<br>";
$htmlresult .=  "<hr>";

/** Question 15 **/
$sql15 = "SELECT * FROM fr_q15";
$req15 = mysql_query($sql15) or die("req15 : ".mysql_error());
$q15 = mysql_result($req15,"0","q15");
$htmlresult .=  "<h2>15) $q15</h2>";

$sql15 = "SELECT * FROM fr_q15 WHERE pays='$pays' ORDER BY id DESC";
$req15 = mysql_query($sql15) or die("req15 : ".mysql_error());
$q15r = mysql_result($req15,"0","q15r");
$q15c = mysql_result($req15,"0","comment");
if ($q15r!="")$htmlresult .=  "$q15r<br>";
if ($q15c!="")$htmlresult .=  "Commentaires : $q15c<br>";
$htmlresult .=  "<hr>";

/** Question 16 **/
$sql16 = "SELECT * FROM fr_q16";
$req16 = mysql_query($sql16) or die("req16 : ".mysql_error());
$q16 = mysql_result($req16,"0","q16");
$htmlresult .=  "<h2>16) $q16</h2>";

$sql16 = "SELECT * FROM fr_q16 WHERE pays='$pays' ORDER BY id DESC";
$req16 = mysql_query($sql16) or die("req16 : ".mysql_error());
$q16r = mysql_result($req16,"0","q16r");
$q16c = mysql_result($req16,"0","comment");
if ($q16r!="")$htmlresult .=  "$q16r<br>";
if ($q16c!="")$htmlresult .=  "Commentaires : $q16c<br>";
$htmlresult .=  "<hr>";

/** Question 17 **/
$sql17 = "SELECT * FROM fr_q17";
$req17 = mysql_query($sql17) or die("req17 : ".mysql_error());
$q17 = mysql_result($req17,"0","q17");
$htmlresult .=  "<h2>17) $q17</h2>";

$sql17 = "SELECT * FROM fr_q17 WHERE pays='$pays' ORDER BY id DESC";
$req17 = mysql_query($sql17) or die("req17 : ".mysql_error());
$q17r = mysql_result($req17,"0","q17r");
$q17c = mysql_result($req17,"0","comment");
if ($q17r!="")$htmlresult .=  "$q17r<br>";
if ($q17c!="")$htmlresult .=  "Commentaires : $q17c<br>";
$htmlresult .=  "<hr>";

/** Question 18 **/
$sql18 = "SELECT * FROM fr_q18";
$req18 = mysql_query($sql18) or die("req18 : ".mysql_error());
$q18 = mysql_result($req18,"0","q18");
$htmlresult .=  "<h2>18) $q18</h2>";

$sql18 = "SELECT * FROM fr_q18 WHERE pays='$pays' ORDER BY id DESC";
$req18 = mysql_query($sql18) or die("req18 : ".mysql_error());
$q18r1 = mysql_result($req18,"0","q18r1");
$q18r1s = mysql_result($req18,"0","q18r1s");
$q18r2 = mysql_result($req18,"0","q18r2");
$q18r2s = mysql_result($req18,"0","q18r2s");
$q18r3 = mysql_result($req18,"0","q18r3");
$q18r3s = mysql_result($req18,"0","q18r3s");
$q18r4 = mysql_result($req18,"0","q18r4");
$q18r4s = mysql_result($req18,"0","q18r4s");
$q18c = mysql_result($req18,"0","comment");
if ($q18r1!=""){$htmlresult .=  "$q18r1";if ($q18r1s!="")$htmlresult .=  " : $q18r1s";$htmlresult .=  "<br>";}
if ($q18r2!=""){$htmlresult .=  "$q18r2";if ($q18r2s!="")$htmlresult .=  " : $q18r2s";$htmlresult .=  "<br>";}
if ($q18r3!=""){$htmlresult .=  "$q18r3";if ($q18r3s!="")$htmlresult .=  " : $q18r3s";$htmlresult .=  "<br>";}
if ($q18r4!=""){$htmlresult .=  "$q18r4";if ($q18r4s!="")$htmlresult .=  " : $q18r4s";$htmlresult .=  "<br>";}
if ($q18c!="")$htmlresult .=  "$q18c<br>";
$htmlresult .=  "<hr>";

/** Question 19 **/
$sql19 = "SELECT * FROM fr_q19";
$req19 = mysql_query($sql19) or die("req19 : ".mysql_error());
$q19 = mysql_result($req19,"0","q19");
$htmlresult .=  "<h2>19) $q19</h2>";

$sql19 = "SELECT * FROM fr_q19 WHERE pays='$pays' ORDER BY id DESC";
$req19 = mysql_query($sql19) or die("req19 : ".mysql_error());
$q19r1 = mysql_result($req19,"0","q19r1");
$q19r1s = mysql_result($req19,"0","q19r1s");
$q19r2 = mysql_result($req19,"0","q19r2");
$q19r2s = mysql_result($req19,"0","q19r2s");
$q19r3 = mysql_result($req19,"0","q19r3");
$q19r3s = mysql_result($req19,"0","q19r3s");
$q19r4 = mysql_result($req19,"0","q19r4");
$q19r4s = mysql_result($req19,"0","q19r4s");
$q19c = mysql_result($req19,"0","comment");
if ($q19r1!=""){$htmlresult .=  "$q19r1";if ($q19r1s!="")$htmlresult .=  " : $q19r1s";$htmlresult .=  "<br>";}
if ($q19r2!=""){$htmlresult .=  "$q19r2";if ($q19r2s!="")$htmlresult .=  " : $q19r2s";$htmlresult .=  "<br>";}
if ($q19r3!=""){$htmlresult .=  "$q19r3";if ($q19r3s!="")$htmlresult .=  " : $q19r3s";$htmlresult .=  "<br>";}
if ($q19r4!=""){$htmlresult .=  "$q19r4";if ($q19r4s!="")$htmlresult .=  " : $q19r4s";$htmlresult .=  "<br>";}
if ($q19c!="")$htmlresult .=  "$q19c<br>";
$htmlresult .=  "<hr>";

/** Question 20 **/
$sql20 = "SELECT * FROM fr_q20";
$req20 = mysql_query($sql20) or die("req20 : ".mysql_error());
$q20 = mysql_result($req20,"0","q20");
$htmlresult .=  "<h2>20) $q20</h2>";

$sql20 = "SELECT * FROM fr_q20 WHERE pays='$pays' ORDER BY id DESC";
$req20 = mysql_query($sql20) or die("req20 : ".mysql_error());
$q20r = mysql_result($req20,"0","q20r");
$q20c = mysql_result($req20,"0","comment");
if ($q20r!="")$htmlresult .=  "$q20r<br>";
if ($q20c!="")$htmlresult .=  "Commentaires : $q20c<br>";
$htmlresult .=  "<hr>";

/** Question 21 **/
$sql21 = "SELECT * FROM fr_q21";
$req21 = mysql_query($sql21) or die("req21 : ".mysql_error());
$q21 = mysql_result($req21,"0","q21");
$htmlresult .=  "<h2>21) $q21</h2>";

$sql21 = "SELECT * FROM fr_q21 WHERE pays='$pays' ORDER BY id DESC";
$req21 = mysql_query($sql21) or die("req21 : ".mysql_error());
$q21r = mysql_result($req21,"0","q21r");
$q21c = mysql_result($req21,"0","comment");
if ($q21r!="")$htmlresult .=  "$q21r<br>";
if ($q21c!="")$htmlresult .=  "Commentaires : $q21c<br>";
$htmlresult .=  "<hr>";

/** Question 22 **/
$sql22 = "SELECT * FROM fr_q22";
$req22 = mysql_query($sql22) or die("req22 : ".mysql_error());
$q22 = mysql_result($req22,"0","q22");
$htmlresult .=  "<h2>22) $q22</h2>";

$sql22 = "SELECT * FROM fr_q22 WHERE pays='$pays' ORDER BY id DESC";
$req22 = mysql_query($sql22) or die("req22 : ".mysql_error());
$res22 = mysql_num_rows($req22);
if($res22>"0"){
$q22r = mysql_result($req22,"0","q22r");
if ($q22r!=""){$htmlresult .=  "<a href='docpays/$q22r'>$q22r</a><br>";}
}else{$htmlresult .=  "Pas de document joint.";}
$htmlresult .=  "<hr>";


/** Question 23 **/
$sql23 = "SELECT * FROM fr_q23";
$req23 = mysql_query($sql23) or die("req23 : ".mysql_error());
$q23 = mysql_result($req23,"0","q23");
$q23r1r = mysql_result($req23,"0","q23r1");
$q23r2r = mysql_result($req23,"0","q23r2");
$q23r3r = mysql_result($req23,"0","q23r3");
$q23r4r = mysql_result($req23,"0","q23r4");
$q23r5r = mysql_result($req23,"0","q23r5");
$q23r6r = mysql_result($req23,"0","q23r6");
$htmlresult .=  "<h2>23) $q23</h2>";

$sql23 = "SELECT * FROM fr_q23 WHERE pays='$pays' ORDER BY id DESC";
$req23 = mysql_query($sql23) or die("req23 : ".mysql_error());
$q23r1 = mysql_result($req23,"0","q23r1");
$q23r2 = mysql_result($req23,"0","q23r2");
$q23r3 = mysql_result($req23,"0","q23r3");
$q23r4 = mysql_result($req23,"0","q23r4");
$q23r5 = mysql_result($req23,"0","q23r5");
$q23r6 = mysql_result($req23,"0","q23r6");
if ($q23r1!="")$htmlresult .=  "$q23r1r : $q23r1<br>";
if ($q23r2!="")$htmlresult .=  "$q23r2r : $q23r2<br>";
if ($q23r3!="")$htmlresult .=  "$q23r3r : $q23r3<br>";
if ($q23r4!="")$htmlresult .=  "$q23r4r : $q23r4<br>";
if ($q23r5!="")$htmlresult .=  "$q23r5r : $q23r5<br>";
if ($q23r6!="")$htmlresult .=  "$q23r6r : $q23r6<br>";
$htmlresult .=  "<hr>";

/** Question 24 **/
$sql24 = "SELECT * FROM fr_q24";
$req24 = mysql_query($sql24) or die("req24 : ".mysql_error());
$q24 = mysql_result($req24,"0","q24");
$q24r1r = mysql_result($req24,"0","q24r1");
$q24r2r = mysql_result($req24,"0","q24r2");
$q24r3r = mysql_result($req24,"0","q24r3");
$q24r4r = mysql_result($req24,"0","q24r4");
$htmlresult .=  "<h2>24) $q24</h2>";

$sql24 = "SELECT * FROM fr_q24 WHERE pays='$pays' ORDER BY id DESC";
$req24 = mysql_query($sql24) or die("req24 : ".mysql_error());
$q24r1 = mysql_result($req24,"0","q24r1");
$q24r2 = mysql_result($req24,"0","q24r2");
$q24r3 = mysql_result($req24,"0","q24r3");
$q24r4 = mysql_result($req24,"0","q24r4");
if ($q24r1!="")$htmlresult .=  "$q24r1r : $q24r1<br>";
if ($q24r2!="")$htmlresult .=  "$q24r2r : $q24r2<br>";
if ($q24r3!="")$htmlresult .=  "$q24r3r : $q24r3<br>";
if ($q24r4!="")$htmlresult .=  "$q24r4r : $q24r4<br>";
$htmlresult .=  "<hr>";

/** Question 25 **/
$sql25 = "SELECT * FROM fr_q25";
$req25 = mysql_query($sql25) or die("req25 : ".mysql_error());
$q25 = mysql_result($req25,"0","q25");
$q25r1r = mysql_result($req25,"0","q25r1");
$q25r2r = mysql_result($req25,"0","q25r2");
$q25r3r = mysql_result($req25,"0","q25r3");
$q25r4r = mysql_result($req25,"0","q25r4");
$htmlresult .=  "<h2>25) $q25</h2>";

$sql25 = "SELECT * FROM fr_q25 WHERE pays='$pays' ORDER BY id DESC";
$req25 = mysql_query($sql25) or die("req25 : ".mysql_error());
$q25r1 = mysql_result($req25,"0","q25r1");
$q25r2 = mysql_result($req25,"0","q25r2");
$q25r3 = mysql_result($req25,"0","q25r3");
$q25r4 = mysql_result($req25,"0","q25r4");
if ($q25r1!="")$htmlresult .=  "$q25r1r : $q25r1<br>";
if ($q25r2!="")$htmlresult .=  "$q25r2r : $q25r2<br>";
if ($q25r3!="")$htmlresult .=  "$q25r3r : $q25r3<br>";
if ($q25r4!="")$htmlresult .=  "$q25r4r : $q25r4<br>";
$htmlresult .=  "<hr>";

/** Question 26 **/
$sql26 = "SELECT * FROM fr_q26";
$req26 = mysql_query($sql26) or die("req26 : ".mysql_error());
$q26 = mysql_result($req26,"0","q26");
$q26r1r = mysql_result($req26,"0","q26r1");
$q26r2r = mysql_result($req26,"0","q26r2");
$q26r3r = mysql_result($req26,"0","q26r3");
$q26r4r = mysql_result($req26,"0","q26r4");
$htmlresult .=  "<h2>26) $q26</h2>";

$sql26 = "SELECT * FROM fr_q26 WHERE pays='$pays' ORDER BY id DESC";
$req26 = mysql_query($sql26) or die("req26 : ".mysql_error());
$q26r1 = mysql_result($req26,"0","q26r1");
$q26r2 = mysql_result($req26,"0","q26r2");
$q26r3 = mysql_result($req26,"0","q26r3");
$q26r4 = mysql_result($req26,"0","q26r4");
if ($q26r1!="")$htmlresult .=  "$q26r1r : $q26r1<br>";
if ($q26r2!="")$htmlresult .=  "$q26r2r : $q26r2<br>";
if ($q26r3!="")$htmlresult .=  "$q26r3r : $q26r3<br>";
if ($q26r4!="")$htmlresult .=  "$q26r4r : $q26r4<br>";
$htmlresult .=  "<hr>";

/** Question 27 **/
$sql27 = "SELECT * FROM fr_q27";$req27 = mysql_query($sql27) or die("req27 : ".mysql_error());
$q27 = mysql_result($req27,"0","q27");
$q27D1 = mysql_result($req27,"0","q27D1");
$q27r1 = mysql_result($req27,"0","q27r1");
$q27r2 = mysql_result($req27,"0","q27r2");
$q27r3 = mysql_result($req27,"0","q27r3");
$htmlresult .=  "<h2>27) $q27</h2>";
$htmlresult .=  "<table width='100%' border='1' cellpadding='5' cellspacing='0' class='fiche'>";
$htmlresult .=  "<tr>";
$htmlresult .=  "<td><b>$q27D1</b></td>";
$htmlresult .=  "<td align='center'><b>$q27r1</b></td>";
$htmlresult .=  "<td align='center'><b>$q27r2</b></td>";
$htmlresult .=  "<td align='center'><b>$q27r3</b></td>";
$htmlresult .=  "</tr>";

for($i=1;$i<="16";$i++){ // boucle sur les 16 questions en BDD
$sql270 = "SELECT * FROM fr_q27q$i WHERE pays='non' ORDER BY id DESC";
$req270 = mysql_query($sql270) or die("req270 : ".mysql_error());
$q27q[$i] = mysql_result($req270,"0","q27q$i");

$sql271 = "SELECT * FROM fr_q27q$i WHERE pays='$pays' ORDER BY id DESC";
$req271 = mysql_query($sql271) or die("req271 : ".mysql_error());
$q27qir = "q27q".$i."r";$q27qr[$i] = mysql_result($req271,"0","$q27qir");
$htmlresult .=  "<tr>\n";
$htmlresult .=  "<td>$q27q[$i]</td>\n";
$htmlresult .=  "<td align='center'>";if($q27qr[$i]==$q27r1){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
$htmlresult .=  "<td align='center'>";if($q27qr[$i]==$q27r2){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
$htmlresult .=  "<td align='center'>";if($q27qr[$i]==$q27r3){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
$htmlresult .=  "</tr>\n";
}
$htmlresult .=  "</table>";
$htmlresult .=  "<hr>";

/** Question 28 **/
$sql28 = "SELECT * FROM fr_q28";
$req28 = mysql_query($sql28) or die("req28 : ".mysql_error());
$q28 = mysql_result($req28,"0","q28");
$htmlresult .=  "<h2>28) $q28</h2>";

$sql28 = "SELECT * FROM fr_q28 WHERE pays='$pays' ORDER BY id DESC";
$req28 = mysql_query($sql28) or die("req28 : ".mysql_error());
$q28r1 = mysql_result($req28,"0","q28r1");
$q28r2 = mysql_result($req28,"0","q28r2");
$q28r3 = mysql_result($req28,"0","q28r3");
$q28c = mysql_result($req28,"0","comment");
if ($q28r1!="")$htmlresult .=  "$q28r1<br>";
if ($q28r2!="")$htmlresult .=  "$q28r2<br>";
if ($q28r3!="")$htmlresult .=  "$q28r3<br>";
if ($q28c!="")$htmlresult .=  "Commentaires : $q28c<br>";
$htmlresult .=  "<hr>";

/** Question 29 **/
$sql29 = "SELECT * FROM fr_q29";
$req29 = mysql_query($sql29) or die("req29 : ".mysql_error());
$q29 = mysql_result($req29,"0","q29");
$htmlresult .=  "<h2>29) $q29</h2>";

$sql29 = "SELECT * FROM fr_q29 WHERE pays='$pays' ORDER BY id DESC";
$req29 = mysql_query($sql29) or die("req29 : ".mysql_error());
$q29r = mysql_result($req29,"0","q29r");
$q29c = mysql_result($req29,"0","comment");
if ($q29r!="")$htmlresult .=  "$q29r<br>";
if ($q29c!="")$htmlresult .=  "Commentaires : $q29c<br>";
$htmlresult .=  "<hr>";

/** Question 30 **/
$sql30 = "SELECT * FROM fr_q30";
$req30 = mysql_query($sql30) or die("req30 : ".mysql_error());
$q30 = mysql_result($req30,"0","q30");
$htmlresult .=  "<h2>30) $q30</h2>";

$sql30 = "SELECT * FROM fr_q30 WHERE pays='$pays' ORDER BY id DESC";
$req30 = mysql_query($sql30) or die("req30 : ".mysql_error());
$q30r = mysql_result($req30,"0","q30r");
$q30c = mysql_result($req30,"0","comment");
if ($q30r!="")$htmlresult .=  "$q30r<br>";
if ($q30c!="")$htmlresult .=  "Commentaires : $q30c<br>";
$htmlresult .=  "<hr>";


/** Question 31 **/
$sql31 = "SELECT * FROM fr_q31";
$req31 = mysql_query($sql31) or die("req31 : ".mysql_error());
$q31 = mysql_result($req31,"0","q31");
$htmlresult .=  "<h2>31) $q31</h2>";

$sql31 = "SELECT * FROM fr_q31 WHERE pays='$pays' ORDER BY id DESC";
$req31 = mysql_query($sql31) or die("req31 : ".mysql_error());
$q31r = mysql_result($req31,"0","q31r");
$q31c = mysql_result($req31,"0","comment");
if ($q31r!="")$htmlresult .=  "$q31r<br>";
if ($q31c!="")$htmlresult .=  "Commentaires : $q31c<br>";
$htmlresult .=  "<hr>";

/** Question 32 **/
$sql32 = "SELECT * FROM fr_q32";
$req32 = mysql_query($sql32) or die("req32 : ".mysql_error());
$q32 = mysql_result($req32,"0","q32");
$htmlresult .=  "<h2>32) $q32</h2>";

$sql32 = "SELECT * FROM fr_q32 WHERE pays='$pays' ORDER BY id DESC";
$req32 = mysql_query($sql32) or die("req32 : ".mysql_error());
$q32r1 = mysql_result($req32,"0","q32r1");
$q32r2 = mysql_result($req32,"0","q32r2");
$q32r3 = mysql_result($req32,"0","q32r3");
$q32r4 = mysql_result($req32,"0","q32r4");
$q32r5 = mysql_result($req32,"0","q32r5");
$q32r5s = mysql_result($req32,"0","q32r5s");
$q32c = mysql_result($req32,"0","comment");
if ($q32r1!="")$htmlresult .=  "$q32r1<br>";
if ($q32r2!="")$htmlresult .=  "$q32r2<br>";
if ($q32r3!="")$htmlresult .=  "$q32r3<br>";
if ($q32r4!="")$htmlresult .=  "$q32r4<br>";
if ($q32r5!="")$htmlresult .=  "$q32r5";if($q32r5s!=""){$htmlresult .=  " : $q32r5s";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "<br>";
if ($q32c!="")$htmlresult .=  "Commentaires : $q32c<br>";
$htmlresult .=  "<hr>";

/** Question 33 **/
$sql33 = "SELECT * FROM fr_q33";
$req33 = mysql_query($sql33) or die("req33 : ".mysql_error());
$q33 = mysql_result($req33,"0","q33");
$htmlresult .=  "<h2>33) $q33</h2>";

$sql33 = "SELECT * FROM fr_q33 WHERE pays='$pays' ORDER BY id DESC";
$req33 = mysql_query($sql33) or die("req33 : ".mysql_error());
$q33r1 = mysql_result($req33,"0","q33r1");
$q33r1s = mysql_result($req33,"0","q33r1s");
$q33r2 = mysql_result($req33,"0","q33r2");
$q33r2s = mysql_result($req33,"0","q33r2s");
$q33c = mysql_result($req33,"0","comment");
if ($q33r1!=""){$htmlresult .=  "$q33r1";if ($q33r1s!="")$htmlresult .=  " : $q33r1s";$htmlresult .=  "<br>";}
if ($q33r2!=""){$htmlresult .=  "$q33r2";if ($q33r2s!="")$htmlresult .=  " : $q33r2s";$htmlresult .=  "<br>";}
if ($q33c!="")$htmlresult .=  "Commentaires : $q33c<br>";
$htmlresult .=  "<hr>";

/** Question 34 **/
$sql34 = "SELECT * FROM fr_q34";
$req34 = mysql_query($sql34) or die("req34 : ".mysql_error());
$q34 = mysql_result($req34,"0","q34");
$htmlresult .=  "<h2>34) $q34</h2>";

$sql34 = "SELECT * FROM fr_q34 WHERE pays='$pays' ORDER BY id DESC";
$req34 = mysql_query($sql34) or die("req34 : ".mysql_error());
$q34r = mysql_result($req34,"0","q34r");
$q34c = mysql_result($req34,"0","comment");
if ($q34r!="")$htmlresult .=  "$q34r<br>";
if ($q34c!="")$htmlresult .=  "Commentaires : $q34c<br>";
$htmlresult .=  "<hr>";

/** Question 35 **/
$sql35 = "SELECT * FROM fr_q35";$req35 = mysql_query($sql35) or die("req35 : ".mysql_error());
$q35 = mysql_result($req35,"0","q35");
$q35r1 = mysql_result($req35,"0","q35r1");
$q35r2 = mysql_result($req35,"0","q35r2");
$q35C= mysql_result($req35,"0","q35C");
$htmlresult .=  "<h2>35) $q35</h2>";
$htmlresult .=  "<table width='100%' border='1' cellpadding='5' cellspacing='0' class='fiche'>";
$htmlresult .=  "<tr>";
$htmlresult .=  "<td><b>$q35D1</b></td>";
$htmlresult .=  "<td align='center'><b>$q35r1</b></td>";
$htmlresult .=  "<td align='center'><b>$q35r2</b></td>";
$htmlresult .=  "<td align='center'><b>$q35C</b></td>";
$htmlresult .=  "</tr>";

for($i=1;$i<="5";$i++){ // boucle sur les 5 questions en BDD
$sql350 = "SELECT * FROM fr_q35q$i WHERE pays='non' ORDER BY id DESC";
$req350 = mysql_query($sql350) or die("req350 : ".mysql_error());
$q35q[$i] = mysql_result($req350,"0","q35q$i");

$sql351 = "SELECT * FROM fr_q35q$i WHERE pays='$pays' ORDER BY id DESC";
$req351 = mysql_query($sql351) or die("req351 : ".mysql_error());
$q35qir = "q35q".$i."r";$q35qr[$i] = mysql_result($req351,"0","$q35qir");
$q35qic = "q35q".$i."c";$q35qc[$i] = mysql_result($req351,"0","$q35qic");
$htmlresult .=  "<tr>\n";
$htmlresult .=  "<td>$q35q[$i]</td>\n";
$htmlresult .=  "<td align='center'>";if($q35qr[$i]==$q35r1){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
$htmlresult .=  "<td align='center'>";if($q35qr[$i]==$q35r2){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
$htmlresult .=  "<td align='center'>";if($q35qc[$i]){$htmlresult .=  "$q35qc[$i]";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
$htmlresult .=  "</tr>\n";
}
$htmlresult .=  "</table>";
$htmlresult .=  "<hr>";

/** Question 36 **/
$sql36 = "SELECT * FROM fr_q36";
$req36 = mysql_query($sql36) or die("req36 : ".mysql_error());
$q36 = mysql_result($req36,"0","q36");
$htmlresult .=  "<h2>36) $q36</h2>";

$sql36 = "SELECT * FROM fr_q36 WHERE pays='$pays' ORDER BY id DESC";
$req36 = mysql_query($sql36) or die("req36 : ".mysql_error());
$q36r1 = mysql_result($req36,"0","q36r1");$q36r1s = mysql_result($req36,"0","q36r1s");
$q36r2 = mysql_result($req36,"0","q36r2");$q36r2s = mysql_result($req36,"0","q36r2s");
$q36r3 = mysql_result($req36,"0","q36r3");$q36r3s = mysql_result($req36,"0","q36r3s");
$q36r4 = mysql_result($req36,"0","q36r4");$q36r4s = mysql_result($req36,"0","q36r4s");
$q36r5 = mysql_result($req36,"0","q36r5");$q36r5s = mysql_result($req36,"0","q36r5s");
$q36c = mysql_result($req36,"0","comment");
if ($q36r1!=""){$htmlresult .=  "$q36r1";if ($q36r1s!="")$htmlresult .=  " : $q36r1s";$htmlresult .=  "<br>";}
if ($q36r2!=""){$htmlresult .=  "$q36r2";if ($q36r2s!="")$htmlresult .=  " : $q36r2s";$htmlresult .=  "<br>";}
if ($q36r3!=""){$htmlresult .=  "$q36r3";if ($q36r3s!="")$htmlresult .=  " : $q36r3s";$htmlresult .=  "<br>";}
if ($q36r4!=""){$htmlresult .=  "$q36r4";if ($q36r4s!="")$htmlresult .=  " : $q36r4s";$htmlresult .=  "<br>";}
if ($q36r5!=""){$htmlresult .=  "$q36r5";if ($q36r5s!="")$htmlresult .=  " : $q36r5s";$htmlresult .=  "<br>";}
if ($q36c!="")$htmlresult .=  "$q36c<br>";
$htmlresult .=  "<hr>";

/** Question 37 **/
$sql37 = "SELECT * FROM fr_q37";$req37 = mysql_query($sql37) or die("req37 : ".mysql_error());
$q37 = mysql_result($req37,"0","q37");
$q37r1 = mysql_result($req37,"0","q37r1");
$q37r2 = mysql_result($req37,"0","q37r2");
$q37C= mysql_result($req37,"0","q37C");
$htmlresult .=  "<h2>37) $q37</h2>";
$htmlresult .=  "<table width='100%' border='1' cellpadding='5' cellspacing='0' class='fiche'>";
$htmlresult .=  "<tr>";
$htmlresult .=  "<td><b>$q37D1</b></td>";
$htmlresult .=  "<td align='center'><b>$q37r1</b></td>";
$htmlresult .=  "<td align='center'><b>$q37r2</b></td>";
$htmlresult .=  "<td align='center'><b>$q37C</b></td>";
$htmlresult .=  "</tr>";

for($i=1;$i<="5";$i++){ // boucle sur les 5 questions en BDD
$sql370 = "SELECT * FROM fr_q37q$i WHERE pays='non' ORDER BY id DESC";
$req370 = mysql_query($sql370) or die("req370 : ".mysql_error());
$q37q[$i] = mysql_result($req370,"0","q37q$i");

$sql371 = "SELECT * FROM fr_q37q$i WHERE pays='$pays' ORDER BY id DESC";
$req371 = mysql_query($sql371) or die("req371 : ".mysql_error());
$q37qir = "q37q".$i."r";$q37qr[$i] = mysql_result($req371,"0","$q37qir");
$q37qic = "q37q".$i."c";$q37qc[$i] = mysql_result($req371,"0","$q37qic");
$htmlresult .=  "<tr>\n";
$htmlresult .=  "<td>$q37q[$i]</td>\n";
$htmlresult .=  "<td align='center'>";if($q37qr[$i]==$q37r1){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
$htmlresult .=  "<td align='center'>";if($q37qr[$i]==$q37r2){$htmlresult .=  "x";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
$htmlresult .=  "<td align='center'>";if($q37qc[$i]){$htmlresult .=  "$q37qc[$i]";}else{$htmlresult .=  "&nbsp;";};$htmlresult .=  "</td>\n";
$htmlresult .=  "</tr>\n";
}
$htmlresult .=  "</table>";
$htmlresult .=  "<hr>";

/** Question 38 **/
$sql38 = "SELECT * FROM fr_q38";
$req38 = mysql_query($sql38) or die("req38 : ".mysql_error());
$q38 = mysql_result($req38,"0","q38");
$htmlresult .=  "<h2>38) $q38</h2>";

$sql38 = "SELECT * FROM fr_q38 WHERE pays='$pays' ORDER BY id DESC";
$req38 = mysql_query($sql38) or die("req38 : ".mysql_error());
$q38r = mysql_result($req38,"0","q38r");
$q38c = mysql_result($req38,"0","comment");
if ($q38r!="")$htmlresult .=  "$q38r<br>";
if ($q38c!="")$htmlresult .=  "Commentaires : $q38c<br>";
$htmlresult .=  "<hr>";

/** Question 39 **/
$sql39 = "SELECT * FROM fr_q39";
$req39 = mysql_query($sql39) or die("req39 : ".mysql_error());
$q39 = mysql_result($req39,"0","q39");
$htmlresult .=  "<h2>39) $q39</h2>";

$sql39 = "SELECT * FROM fr_q39 WHERE pays='$pays' ORDER BY id DESC";
$req39 = mysql_query($sql39) or die("req39 : ".mysql_error());
$q39r = mysql_result($req39,"0","q39r");
$q39r1r = mysql_result($req39,"0","q39r1r");
$q39c = mysql_result($req39,"0","comment");
if ($q39r!="")$htmlresult .=  "$q39r";if($q39r=="oui"){$htmlresult .=  " : $q39r1r";};$htmlresult .=  "<br>";
if ($q39c!="")$htmlresult .=  "Commentaires : $q39c<br>";
$htmlresult .=  "<hr>";

/** Question 40 **/
$sql40 = "SELECT * FROM fr_q40";
$req40 = mysql_query($sql40) or die("req40 : ".mysql_error());
$q40 = mysql_result($req40,"0","q40");
$htmlresult .=  "<h2>40) $q40</h2>";

$sql40 = "SELECT * FROM fr_q40 WHERE pays='$pays' ORDER BY id DESC";
$req40 = mysql_query($sql40) or die("req40 : ".mysql_error());
$q40r = mysql_result($req40,"0","q40r");
$q40c = mysql_result($req40,"0","comment");
if ($q40r!="")$htmlresult .=  "$q40r<br>";
if ($q40c!="")$htmlresult .=  "Commentaires : $q40c<br>";
$htmlresult .=  "<hr>";

/** Question 41 **/
$sql41 = "SELECT * FROM fr_q41";
$req41 = mysql_query($sql41) or die("req41 : ".mysql_error());
$q41 = mysql_result($req41,"0","q41");
$htmlresult .=  "<h2>41) $q41</h2>";

$sql41 = "SELECT * FROM fr_q41 WHERE pays='$pays' ORDER BY id DESC";
$req41 = mysql_query($sql41) or die("req41 : ".mysql_error());
$q41r = mysql_result($req41,"0","q41r");
if ($q41r!="")$htmlresult .=  "$q41r<br>";
$htmlresult .=  "<hr>";

} //fin else pays ok

