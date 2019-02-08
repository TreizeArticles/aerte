<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));

header('Content-type: text/html; charset=utf-8');
// On démarre la session
session_start();

if($_POST['login']){$_SESSION['login']=$_POST['login'];}
if($_POST['pass']){$_SESSION['pass']=$_POST['pass'];}

if($_SESSION['login']!="admin" && $_SESSION['pass']!="1235aerte"){

echo "<form action='' method='POST'>";
echo "Login : <input type='text' name='login'> ";
echo "Pass : <input type='password' name='pass'> ";
echo "<input type='submit' value='connexion'>";
echo "</form>";
$ok="non";
}else{

require_once(__DIR__ . '/../db_config.inc.php');

	echo "<a href='fichepays.php'>Cliquez ici pour insérer une autre fiche</a> | ";
	echo "<a href='fichemodif.php'>Cliquez ici pour modifier une fiche pays</a><br><hr>";

if($_POST['pays']){
	include("fichepayserrors.php");
	
	if($errors>"0"){echo "<h3 style='color:red;'>Nombre d'erreurs dans la saisie = $errors. Veuillez corriger.</h3>";}
	else{
	echo "<h3 style='color:green;'>Fiche pays ".$_POST['pays']." modifiée.</h3>";
	include("modifpays.php");
	$break="ok";
	}
}

if($break!="ok"){

echo "<div style='float:left;margin-bottom:10px;width:100%;'>";
echo "<form action='' method='POST' name='pays'>";
echo "Pays : <select name='paysmodif' style='width:100px;'>";
echo "<option value=''>- s&eacute;lection -</option>";
$sql0 = "SELECT distinctrow pays FROM fr_q1 WHERE pays!='non' ORDER BY pays";
$req0 = mysql_query($sql0) or die("req0 : ".mysql_error());
while ($row = mysql_fetch_object($req0)) {
echo "<option value='$row->pays'>$row->pays</option>";
}
echo "</select>";
echo "<input type='submit' value='S&eacute;lectionner ce pays'>";
echo "</form>";

echo "</div>";

$pays = $_POST['paysmodif'];
if($_POST['pays']){$pays = $_POST['pays'];/*echo "POST : $pays<br>";*/}

echo "<form action='' method='POST' enctype='multipart/form-data'>";

echo "Pays <input type='text' name='pays' size='50' value='".$pays."'>";
echo "<hr>";

$sql1 = "SELECT * FROM fr_q1";
$req1 = mysql_query($sql1) or die("req1 : ".mysql_error());
$q1 = mysql_result($req1,"0","q1");
$q1r1 = mysql_result($req1,"0","q1r1");
$q1r2 = mysql_result($req1,"0","q1r2");
$q1r3 = mysql_result($req1,"0","q1r3");

if($_POST['paysmodif']){
$sql1p = "SELECT * FROM fr_q1 WHERE pays='$pays' ORDER BY id DESC";
$req1p = mysql_query($sql1p) or die("req1 : ".mysql_error());
$q1r1p = mysql_result($req1p,"0","q1r1");
$q1r2p = mysql_result($req1p,"0","q1r2");
$q1r3p = mysql_result($req1p,"0","q1r3");
$q1cp = mysql_result($req1p,"0","comment");$q1cp = stripslashes(ereg_replace("'","&#39;",$q1cp));
} else { 
$q1r1p = $_POST['q1r1'];
$q1r2p = $_POST['q1r2'];
$q1r3p = $_POST['q1r3'];
$q1cp = $_POST['commentq1'];
} 

echo "<h3>1) $q1</h3>";
echo "<input type='checkbox' name='q1r1' value='$q1r1'";if($q1r1p == $q1r1)echo "checked";echo ">$q1r1<br>";
echo "<input type='checkbox' name='q1r2' value='$q1r2'";if($q1r2p == $q1r2)echo "checked";echo ">$q1r2<br>";
echo "<input type='checkbox' name='q1r3' value='$q1r3'";if($q1r3p == $q1r3)echo "checked";echo ">$q1r3<br>";
echo "Commentaires : <input type='text' name='commentq1' size='50' value='".$q1cp."'><br>";
echo "<div style='color:red'>$msgq1</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql2 = "SELECT * FROM fr_q2";
$req2 = mysql_query($sql2) or die("req2 : ".mysql_error());
$q2 = mysql_result($req2,"0","q2");
$q2r1 = mysql_result($req2,"0","q2r1");
$q2r2 = mysql_result($req2,"0","q2r2");
$q2r3 = mysql_result($req2,"0","q2r3");
$q2r4 = mysql_result($req2,"0","q2r4");
$q2r5 = mysql_result($req2,"0","q2r5");
$q2r6 = mysql_result($req2,"0","q2r6");

if($_POST['paysmodif']){
$sql2p = "SELECT * FROM fr_q2 WHERE pays='$pays' ORDER BY id DESC";
$req2p = mysql_query($sql2p) or die("req2 : ".mysql_error());
$q2r1p = mysql_result($req2p,"0","q2r1");$q2r1p = stripslashes(ereg_replace("'","&#39;",$q2r1p));
$q2r2p = mysql_result($req2p,"0","q2r2");$q2r2p = stripslashes(ereg_replace("'","&#39;",$q2r2p));
$q2r3p = mysql_result($req2p,"0","q2r3");$q2r3p = stripslashes(ereg_replace("'","&#39;",$q2r3p));
$q2r4p = mysql_result($req2p,"0","q2r4");$q2r4p = stripslashes(ereg_replace("'","&#39;",$q2r4p));
$q2r5p = mysql_result($req2p,"0","q2r5");$q2r5p = stripslashes(ereg_replace("'","&#39;",$q2r5p));
$q2r6p = mysql_result($req2p,"0","q2r6");$q2r6p = stripslashes(ereg_replace("'","&#39;",$q2r6p));
} else { 

$q2r1p = $_POST['q2r1'];
$q2r2p = $_POST['q2r2'];
$q2r3p = $_POST['q2r3'];
$q2r4p = $_POST['q2r4'];
$q2r5p = $_POST['q2r5'];
$q2r6p = $_POST['q2r6'];

} 

echo "<h3>2) $q2</h3>";
echo "$q2r1 : <input type='text' name='q2r1' size='50' value='".$q2r1p."'><br>";
echo "$q2r2 : <input type='text' name='q2r2' size='50' value='".$q2r2p."'><br>";
echo "$q2r3 : <input type='text' name='q2r3' size='50' value='".$q2r3p."'><br>";
echo "$q2r4 : <input type='text' name='q2r4' size='50' value='".$q2r4p."'><br>";
echo "$q2r5 : <input type='text' name='q2r5' size='50' value='".$q2r5p."'><br>";
echo "$q2r6 : <input type='text' name='q2r6' size='50' value='".$q2r6p."'><br>";
echo "<div style='color:red'>$msgq2</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql3 = "SELECT * FROM fr_q3";
$req3 = mysql_query($sql3) or die("req3 : ".mysql_error());
$q3 = mysql_result($req3,"0","q3");
$q3r1 = mysql_result($req3,"0","q3r1");$q3r1 = ereg_replace("'","&#39;",$q3r1);
$q3r2 = mysql_result($req3,"0","q3r2");$q3r2 = ereg_replace("'","&#39;",$q3r2);
$q3r3 = mysql_result($req3,"0","q3r3");$q3r3 = ereg_replace("'","&#39;",$q3r3);
$_POST['q3r'] = stripslashes(ereg_replace("'","&#39;",$_POST['q3r']));//echo $_POST['q3r'];

if($_POST['paysmodif']){
$sql3p = "SELECT * FROM fr_q3 WHERE pays='$pays' ORDER BY id DESC";
$req3p = mysql_query($sql3p) or die("req3 : ".mysql_error());
$q3rp = mysql_result($req3p,"0","q3r");$q3rp = stripslashes(ereg_replace("'","&#39;",$q3rp));
$q3cp = mysql_result($req3p,"0","comment");$q3cp = stripslashes(ereg_replace("'","&#39;",$q3cp));
} else { 
$q3rp = stripslashes(ereg_replace("'","&#39;",$_POST['q3r']));
$q3cp = $_POST['commentq3'];
} 

echo "\n<h3>3) $q3</h3>\n";
echo "<input type='radio' name='q3r' value='$q3r1' ";if($q3rp==$q3r1)echo "checked";echo ">$q3r1<br>\n";
echo "<input type='radio' name='q3r' value='$q3r2' ";if($q3rp==$q3r2)echo "checked";echo ">$q3r2<br>\n";
echo "<input type='radio' name='q3r' value='$q3r3' ";if($q3rp==$q3r3)echo "checked";echo ">$q3r3<br>\n";
echo "Commentaires : <input type='text' name='commentq3' size='50' value='".$q3cp."'><br>\n";
echo "<div style='color:red'>$msgq3</div>\n";
echo "<hr>";
/***************************************************************************************************************/
$sql4 = "SELECT * FROM fr_q4";
$req4 = mysql_query($sql4) or die("req4 : ".mysql_error());
$q4 = mysql_result($req4,"0","q4");
$q4r1 = mysql_result($req4,"0","q4r1");
$q4r2 = mysql_result($req4,"0","q4r2");

if($_POST['paysmodif']){
$sql4p = "SELECT * FROM fr_q4 WHERE pays='$pays' ORDER BY id DESC";
$req4p = mysql_query($sql4p) or die("req4 : ".mysql_error());
$q4rp = mysql_result($req4p,"0","q4r");
$q4cp = mysql_result($req4p,"0","comment");$q4cp = stripslashes(ereg_replace("'","&#39;",$q4cp));
} else { 
$q4rp = $_POST['q4r'];
$q4cp = $_POST['commentq4'];
}

echo "<h3>4) $q4</h3>";
echo "<input type='radio' name='q4r' value='$q4r1' ";if($q4rp==$q4r1)echo "checked";echo ">$q4r1<br>";
echo "<input type='radio' name='q4r' value='$q4r2' ";if($q4rp==$q4r2)echo "checked";echo ">$q4r2<br>";
echo "<br>Commentaires : <input type='text' name='commentq4' size='50' value='".$q4cp."'><br>";
echo "<div style='color:red'>$msgq4</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql5 = "SELECT * FROM fr_q5";
$req5 = mysql_query($sql5) or die("req5 : ".mysql_error());
$q5 = mysql_result($req5,"0","q5");

if($_POST['paysmodif']){
$sql5p = "SELECT * FROM fr_q5 WHERE pays='$pays' ORDER BY id DESC";
$req5p = mysql_query($sql5p) or die("req5 : ".mysql_error());
$q5rp = mysql_result($req5p,"0","q5r");$q5rp = stripslashes(ereg_replace("'","&#39;",$q5rp));
} else {
$q5rp = $_POST['q5r'];
}

echo "<h3>5) $q5</h3>";
echo "<input type='text' name='q5r' size='100' value='".$q5rp."'><br>";
echo "<div style='color:red'>$msgq5</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql6 = "SELECT * FROM fr_q6";
$req6 = mysql_query($sql6) or die("req6 : ".mysql_error());
$q6 = mysql_result($req6,"0","q6");
$q6r1 = mysql_result($req6,"0","q6r1");
$q6r2 = mysql_result($req6,"0","q6r2");
echo "<h3>6) $q6</h3>";

if($_POST['paysmodif']){
$sql6p = "SELECT * FROM fr_q6 WHERE pays='$pays' ORDER BY id DESC";
$req6p = mysql_query($sql6p) or die("req6 : ".mysql_error());
$q6rp = mysql_result($req6p,"0","q6r");
$q6cp = mysql_result($req6p,"0","comment");$q6cp = stripslashes(ereg_replace("'","&#39;",$q6cp));
} else {
$q6rp = $_POST['q6r'];
$q6cp = $_POST['commentq6'];
}

echo "<input type='radio' name='q6r' value='$q6r1' ";if($q6rp==$q6r1)echo "checked";echo ">$q6r1<br>";
echo "<input type='radio' name='q6r' value='$q6r2' ";if($q6rp==$q6r2)echo "checked";echo ">$q6r2<br>";
echo "Commentaires : <input type='text' name='commentq6' size='50' value='".$q6cp."'><br>";
echo "<div style='color:red'>$msgq6</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql7 = "SELECT * FROM fr_q7";
$req7 = mysql_query($sql7) or die("req7 : ".mysql_error());
$q7 = mysql_result($req7,"0","q7");

if($_POST['paysmodif']){
$sql7p = "SELECT * FROM fr_q7 WHERE pays='$pays' ORDER BY id DESC";
$req7p = mysql_query($sql7p) or die("req7 : ".mysql_error());
$q7rp = mysql_result($req7p,"0","q7r");$q7rp = stripslashes(ereg_replace("'","&#39;",$q7rp));
} else {
$q7rp = $_POST['q7r'];
}

echo "<h3>7) $q7</h3>";
echo "<input type='text' name='q7r' size='100' value='".$q7rp."'><br>";
echo "<div style='color:red'>$msgq7</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql8 = "SELECT * FROM fr_q8";
$req8 = mysql_query($sql8) or die("req8 : ".mysql_error());
$q8 = mysql_result($req8,"0","q8");

if($_POST['paysmodif']){
$sql8p = "SELECT * FROM fr_q8 WHERE pays='$pays' ORDER BY id DESC";
$req8p = mysql_query($sql8p) or die("req8 : ".mysql_error());
$q8rp = mysql_result($req8p,"0","q8r");$q8rp = stripslashes(ereg_replace("'","&#39;",$q8rp));
} else {
$q8rp = $_POST['q8r'];
}

echo "<h3>8) $q8</h3>";
echo "<input type='text' name='q8r' size='100' value='".$q8rp."'><br>";
echo "<div style='color:red'>$msgq8</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql9 = "SELECT * FROM fr_q9";
$req9 = mysql_query($sql9) or die("req9 : ".mysql_error());
$q9 = mysql_result($req9,"0","q9");
$q9r1 = mysql_result($req9,"0","q9r1");
$q9r2 = mysql_result($req9,"0","q9r2");

if($_POST['paysmodif']){
$sql9p = "SELECT * FROM fr_q9 WHERE pays='$pays' ORDER BY id DESC";
$req9p = mysql_query($sql9p) or die("req9 : ".mysql_error());
$q9r1p = mysql_result($req9p,"0","q9r1");
$q9r2p = mysql_result($req9p,"0","q9r2");
$q9cp = mysql_result($req9p,"0","comment");$q9cp = stripslashes(ereg_replace("'","&#39;",$q9cp));
} else {
$q9r1p = $_POST['q9r1'];
$q9r2p = $_POST['q9r2'];
$q9cp = $_POST['commentq9'];
}

echo "<h3>9) $q9</h3>";
echo "<input type='checkbox' name='q9r1' value='$q9r1' ";if($q9r1p==$q9r1)echo "checked";echo ">$q9r1<br>";
echo "<input type='checkbox' name='q9r2' value='$q9r2' ";if($q9r2p==$q9r2)echo "checked";echo ">$q9r2<br>";
echo "Commentaires : <input type='text' name='commentq9' size='50' value='".$q9cp."'><br>";
echo "<div style='color:red'>$msgq9</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql10 = "SELECT * FROM fr_q10";
$req10 = mysql_query($sql10) or die("req10 : ".mysql_error());
$q10 = mysql_result($req10,"0","q10");
$q10r1 = mysql_result($req10,"0","q10r1");
$q10r2 = mysql_result($req10,"0","q10r2");
$q10r3 = mysql_result($req10,"0","q10r3");$q10r3 = ereg_replace("'","&#39;",$q10r3);

if($_POST['paysmodif']){
$sql10p = "SELECT * FROM fr_q10 WHERE pays='$pays' ORDER BY id DESC";
$req10p = mysql_query($sql10p) or die("req10 : ".mysql_error());
$q10r1p = mysql_result($req10p,"0","q10r1");
$q10r2p = mysql_result($req10p,"0","q10r2");
$q10r3p = mysql_result($req10p,"0","q10r3");$q10r3p = stripslashes(ereg_replace("'","&#39;",$q10r3p));
$q10r3sp = mysql_result($req10p,"0","q10r3s");
$q10cp = mysql_result($req10p,"0","comment");$q10cp = stripslashes(ereg_replace("'","&#39;",$q10cp));
} else {
$q10r1p = $_POST['q10r1'];
$q10r2p = $_POST['q10r2'];
$q10r3p = stripslashes(ereg_replace("'","&#39;",$_POST['q10r3']));
$q10cp = $_POST['commentq10'];
}

echo "<h3>10) $q10</h3>";
echo "<input type='checkbox' name='q10r1' value='$q10r1' ";if($q10r1p==$q10r1)echo "checked";echo ">$q10r1<br>";
echo "<input type='checkbox' name='q10r2' value='$q10r2' ";if($q10r2p==$q10r2)echo "checked";echo ">$q10r2<br>";
echo "<input type='checkbox' name='q10r3' value='$q10r3' ";if($q10r3p==$q10r3)echo "checked";echo ">$q10r3 <input type='text' name='q10r3s' size='30' value='".$q10r3sp."'><br><br>";
echo "Commentaires : <input type='text' name='commentq10' size='50' value='".$q10cp."'><br>";
echo "<div style='color:red'>$msgq10</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql11 = "SELECT * FROM fr_q11";
$req11 = mysql_query($sql11) or die("req11 : ".mysql_error());
$q11 = mysql_result($req11,"0","q11");
$q11r1 = mysql_result($req11,"0","q11r1");
$q11r2 = mysql_result($req11,"0","q11r2");

if($_POST['paysmodif']){
$sql11p = "SELECT * FROM fr_q11 WHERE pays='$pays' ORDER BY id DESC";
$req11p = mysql_query($sql11p) or die("req11 : ".mysql_error());
$q11rp = mysql_result($req11p,"0","q11r");
$q11cp = mysql_result($req11p,"0","comment");$q11cp = stripslashes(ereg_replace("'","&#39;",$q11cp));
} else { 
$q11rp = $_POST['q11r'];
$q11cp = $_POST['commentq11'];
}

echo "<h3>11) $q11</h3>";
echo "<input type='radio' name='q11r' value='$q11r1' ";if($q11rp==$q11r1)echo "checked";echo ">$q11r1<br>";
echo "<input type='radio' name='q11r' value='$q11r2' ";if($q11rp==$q11r2)echo "checked";echo ">$q11r2<br>";
echo "Commentaires : <input type='text' name='commentq11' size='50' value='".$q11cp."'><br>";
echo "<div style='color:red'>$msgq11</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql12 = "SELECT * FROM fr_q12";
$req12 = mysql_query($sql12) or die("req12 : ".mysql_error());
$q12 = mysql_result($req12,"0","q12");
$q12r1 = mysql_result($req12,"0","q12r1");
$q12r2 = mysql_result($req12,"0","q12r2");
$q12r3 = mysql_result($req12,"0","q12r3");
$q12r4 = mysql_result($req12,"0","q12r4");
$q12r5 = mysql_result($req12,"0","q12r5");

if($_POST['paysmodif']){
$sql12p = "SELECT * FROM fr_q12 WHERE pays='$pays' ORDER BY id DESC";
$req12p = mysql_query($sql12p) or die("req12 : ".mysql_error());
$q12r1p = mysql_result($req12p,"0","q12r1");
$q12r2p = mysql_result($req12p,"0","q12r2");
$q12r3p = mysql_result($req12p,"0","q12r3");
$q12r3sp = mysql_result($req12p,"0","q12r3s");$q12r3sp = stripslashes(ereg_replace("'","&#39;",$q12r3sp));
$q12r4p = mysql_result($req12p,"0","q12r4");
$q12r4sp = mysql_result($req12p,"0","q12r4s");$q12r4sp = stripslashes(ereg_replace("'","&#39;",$q12r4sp));
$q12r5p = mysql_result($req12p,"0","q12r5");
$q12r5sp = mysql_result($req12p,"0","q12r5s");$q12r5sp = stripslashes(ereg_replace("'","&#39;",$q12r5sp));
$q12cp = mysql_result($req12p,"0","comment");$q12cp = stripslashes(ereg_replace("'","&#39;",$q12cp));
} else {
$q12r1p = $_POST['q12r1'];
$q12r2p = $_POST['q12r2'];
$q12r3p = $_POST['q12r3'];
$q12r3sp = $_POST['q12r3s'];
$q12r4p = $_POST['q12r4'];
$q12r4sp = $_POST['q12r4s'];
$q12r5p = $_POST['q12r5'];
$q12r5sp = $_POST['q12r5s'];
$q12cp = $_POST['commentq12'];
}

echo "<h3>12) $q12</h3>";
echo "<input type='checkbox' name='q12r1' value='$q12r1' ";if($q12r1p==$q12r1)echo "checked";echo ">$q12r1<br>";
echo "<input type='checkbox' name='q12r2' value='$q12r2' ";if($q12r2p==$q12r2)echo "checked";echo ">$q12r2<br>";
echo "<input type='checkbox' name='q12r3' value='$q12r3' ";if($q12r3p==$q12r3)echo "checked";echo ">$q12r3 <input type='text' name='q12r3s' size='30' value='".$q12r3sp."'><br>";
echo "<input type='checkbox' name='q12r4' value='$q12r4' ";if($q12r4p==$q12r4)echo "checked";echo ">$q12r4 <input type='text' name='q12r4s' size='30' value='".$q12r4sp."'><br>";
echo "<input type='checkbox' name='q12r5' value='$q12r5' ";if($q12r5p==$q12r5)echo "checked";echo ">$q12r5 <input type='text' name='q12r5s' size='30' value='".$q12r5sp."'><br><br>";
echo "Commentaires : <input type='text' name='commentq12' size='50' value='".$q12cp."'><br>";
echo "<div style='color:red'>$msgq12</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql13 = "SELECT * FROM fr_q13";
$req13 = mysql_query($sql13) or die("req13 : ".mysql_error());
$q13 = mysql_result($req13,"0","q13");
$q13r1 = mysql_result($req13,"0","q13r1");
$q13r2 = mysql_result($req13,"0","q13r2");
$q13r3 = mysql_result($req13,"0","q13r3");

if($_POST['paysmodif']){
$sql13p = "SELECT * FROM fr_q13 WHERE pays='$pays' ORDER BY id DESC";
$req13p = mysql_query($sql13p) or die("req13 : ".mysql_error());
$q13r1p = mysql_result($req13p,"0","q13r1");
$q13r2p = mysql_result($req13p,"0","q13r2");
$q13r2sp = mysql_result($req13p,"0","q13r2s");$q13r2sp = stripslashes(ereg_replace("'","&#39;",$q13r2sp));
$q13r3p = mysql_result($req13p,"0","q13r3");
$q13cp = mysql_result($req13p,"0","comment");$q13cp = stripslashes(ereg_replace("'","&#39;",$q13cp));
} else {
$q13r1p = $_POST['q13r1'];
$q13r2p = $_POST['q13r2'];
$q13r2sp = $_POST['q13r2s'];
$q13r3p = $_POST['q13r3'];
$q13cp = $_POST['commentq13'];
}

echo "<h3>13) $q13</h3>";
echo "<input type='checkbox' name='q13r1' value='$q13r1' ";if($q13r1p==$q13r1)echo "checked";echo ">$q13r1<br>";
echo "<input type='checkbox' name='q13r2' value='$q13r2' ";if($q13r2p==$q13r2)echo "checked";echo ">$q13r2 <input type='text' name='q13r2s' size='30' value='"
.$q13r2sp."'><br>";
echo "<input type='checkbox' name='q13r3' value='$q13r3' ";if($q13r3p==$q13r3)echo "checked";echo ">$q13r3<br><br>";
echo "Commentaires : <input type='text' name='commentq13' size='50' value='".$q13cp."'><br>";
echo "<div style='color:red'>$msgq13</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql14 = "SELECT * FROM fr_q14";
$req14 = mysql_query($sql14) or die("req14 : ".mysql_error());
$q14 = mysql_result($req14,"0","q14");
$q14r1 = mysql_result($req14,"0","q14r1");
$q14r2 = mysql_result($req14,"0","q14r2");
echo "<h3>14) $q14</h3>";

if($_POST['paysmodif']){
$sql14p = "SELECT * FROM fr_q14 WHERE pays='$pays' ORDER BY id DESC";
$req14p = mysql_query($sql14p) or die("req14 : ".mysql_error());
$q14rp = mysql_result($req14p,"0","q14r");
$q14cp = mysql_result($req14p,"0","comment");$q14cp = stripslashes(ereg_replace("'","&#39;",$q14cp));
} else {
$q14rp = $_POST['q14r'];
$q14cp = $_POST['commentq14'];
}

echo "<input type='radio' name='q14r' value='$q14r1' ";if($q14rp==$q14r1)echo "checked";echo ">$q14r1<br>";
echo "<input type='radio' name='q14r' value='$q14r2' ";if($q14rp==$q14r2)echo "checked";echo ">$q14r2<br>";
echo "Commentaires : <input type='text' name='commentq14' size='50' value='".$q14cp."'><br>";
echo "<div style='color:red'>$msgq14</div>";
echo "<hr>";

/***************************************************************************************************************/
$sql15 = "SELECT * FROM fr_q15";
$req15 = mysql_query($sql15) or die("req15 : ".mysql_error());
$q15 = mysql_result($req15,"0","q15");
$q15r1 = mysql_result($req15,"0","q15r1");
$q15r2 = mysql_result($req15,"0","q15r2");
echo "<h3>15) $q15</h3>";

if($_POST['paysmodif']){
$sql15p = "SELECT * FROM fr_q15 WHERE pays='$pays' ORDER BY id DESC";
$req15p = mysql_query($sql15p) or die("req15 : ".mysql_error());
$q15rp = mysql_result($req15p,"0","q15r");
$q15cp = mysql_result($req15p,"0","comment");$q15cp = stripslashes(ereg_replace("'","&#39;",$q15cp));
} else {
$q15rp = $_POST['q15r'];
$q15cp = $_POST['commentq15'];
}

echo "<input type='radio' name='q15r' value='$q15r1' ";if($q15rp==$q15r1)echo "checked";echo ">$q15r1<br>";
echo "<input type='radio' name='q15r' value='$q15r2' ";if($q15rp==$q15r2)echo "checked";echo ">$q15r2<br>";
echo "Commentaires : <input type='text' name='commentq15' size='50' value='".$q15cp."'><br>";
echo "<div style='color:red'>$msgq15</div>";
echo "<hr>";

/***************************************************************************************************************/
$sql16 = "SELECT * FROM fr_q16";
$req16 = mysql_query($sql16) or die("req16 : ".mysql_error());
$q16 = mysql_result($req16,"0","q16");
$q16r1 = mysql_result($req16,"0","q16r1");
$q16r2 = mysql_result($req16,"0","q16r2");
echo "<h3>16) $q16</h3>";

if($_POST['paysmodif']){
$sql16p = "SELECT * FROM fr_q16 WHERE pays='$pays' ORDER BY id DESC";
$req16p = mysql_query($sql16p) or die("req16 : ".mysql_error());
$q16rp = mysql_result($req16p,"0","q16r");
$q16cp = mysql_result($req16p,"0","comment");$q16cp = stripslashes(ereg_replace("'","&#39;",$q16cp));
} else {
$q16rp = $_POST['q16r'];
$q16cp = $_POST['commentq16'];
}

echo "<input type='radio' name='q16r' value='$q16r1' ";if($q16rp==$q16r1)echo "checked";echo ">$q16r1<br>";
echo "<input type='radio' name='q16r' value='$q16r2' ";if($q16rp==$q16r2)echo "checked";echo ">$q16r2<br>";
echo "Commentaires : <input type='text' name='commentq16' size='50' value='".$q16cp."'><br>";
echo "<div style='color:red'>$msgq16</div>";
echo "<hr>";

/***************************************************************************************************************/
$sql17 = "SELECT * FROM fr_q17";
$req17 = mysql_query($sql17) or die("req17 : ".mysql_error());
$q17 = mysql_result($req17,"0","q17");
$q17r1 = mysql_result($req17,"0","q17r1");
$q17r2 = mysql_result($req17,"0","q17r2");
echo "<h3>17) $q17</h3>";

if($_POST['paysmodif']){
$sql17p = "SELECT * FROM fr_q17 WHERE pays='$pays' ORDER BY id DESC";
$req17p = mysql_query($sql17p) or die("req17 : ".mysql_error());
$q17rp = mysql_result($req17p,"0","q17r");
$q17cp = mysql_result($req17p,"0","comment");$q17cp = stripslashes(ereg_replace("'","&#39;",$q17cp));
} else {
$q17rp = $_POST['q17r'];
$q17cp = $_POST['commentq17'];
}

echo "<input type='radio' name='q17r' value='$q17r1' ";if($q17rp==$q17r1)echo "checked";echo ">$q17r1<br>";
echo "<input type='radio' name='q17r' value='$q17r2' ";if($q17rp==$q17r2)echo "checked";echo ">$q17r2<br>";
echo "Commentaires : <input type='text' name='commentq17' size='50' value='".$q17cp."'><br>";
echo "<div style='color:red'>$msgq17</div>";
echo "<hr>";

/***************************************************************************************************************/
$sql18 = "SELECT * FROM fr_q18";
$req18 = mysql_query($sql18) or die("req18 : ".mysql_error());
$q18 = mysql_result($req18,"0","q18");
$q18r1 = mysql_result($req18,"0","q18r1");
$q18r2 = mysql_result($req18,"0","q18r2");
$q18r3 = mysql_result($req18,"0","q18r3");
$q18r4 = mysql_result($req18,"0","q18r4");

if($_POST['paysmodif']){
$sql18p = "SELECT * FROM fr_q18 WHERE pays='$pays' ORDER BY id DESC";
$req18p = mysql_query($sql18p) or die("req18 : ".mysql_error());
$q18r1p = mysql_result($req18p,"0","q18r1");
$q18r1sp = mysql_result($req18p,"0","q18r1s");$q18r1sp = stripslashes(ereg_replace("'","&#39;",$q18r1sp));
$q18r2p = mysql_result($req18p,"0","q18r2");
$q18r2sp = mysql_result($req18p,"0","q18r2s");$q18r2sp = stripslashes(ereg_replace("'","&#39;",$q18r2sp));
$q18r3p = mysql_result($req18p,"0","q18r3");
$q18r3sp = mysql_result($req18p,"0","q18r3s");$q18r3sp = stripslashes(ereg_replace("'","&#39;",$q18r3sp));
$q18r4p = mysql_result($req18p,"0","q18r4");
$q18r4sp = mysql_result($req18p,"0","q18r4s");$q18r4sp = stripslashes(ereg_replace("'","&#39;",$q18r4sp));
$q18cp = mysql_result($req18p,"0","comment");$q18cp = stripslashes(ereg_replace("'","&#39;",$q18cp));
} else {
$q18r1p = $_POST['q18r1'];
$q18r1sp = $_POST['q18r1s'];
$q18r2p = $_POST['q18r2'];
$q18r2sp = $_POST['q18r2s'];
$q18r3p = $_POST['q18r3'];
$q18r3sp = $_POST['q18r3s'];
$q18r4p = $_POST['q18r4'];
$q18r4sp = $_POST['q18r4s'];
$q18cp = $_POST['commentq18'];
}

echo "<h3>18) $q18</h3>";
echo "<input type='checkbox' name='q18r1' value='$q18r1' ";if($q18r1p==$q18r1)echo "checked";echo ">$q18r1 <input type='text' name='q18r1s' size='30' value='".$q18r1sp."'><br>";
echo "<input type='checkbox' name='q18r2' value='$q18r2' ";if($q18r2p==$q18r2)echo "checked";echo ">$q18r2 <input type='text' name='q18r2s' size='30' value='".$q18r2sp."'><br>";
echo "<input type='checkbox' name='q18r3' value='$q18r3' ";if($q18r3p==$q18r3)echo "checked";echo ">$q18r3 <input type='text' name='q18r3s' size='30' value='".$q18r3sp."'><br>";
echo "<input type='checkbox' name='q18r4' value='$q18r4' ";if($q18r4p==$q18r4)echo "checked";echo ">$q18r4 <input type='text' name='q18r4s' size='30' value='".$q18r4sp."'><br><br>";
echo "Commentaires : <input type='text' name='commentq18' size='50' value='".$q18cp."'><br>";
echo "<div style='color:red'>$msgq18</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql19 = "SELECT * FROM fr_q19";
$req19 = mysql_query($sql19) or die("req19 : ".mysql_error());
$q19 = mysql_result($req19,"0","q19");
$q19r1 = mysql_result($req19,"0","q19r1");
$q19r2 = mysql_result($req19,"0","q19r2");
$q19r3 = mysql_result($req19,"0","q19r3");
$q19r4 = mysql_result($req19,"0","q19r4");

if($_POST['paysmodif']){
$sql19p = "SELECT * FROM fr_q19 WHERE pays='$pays' ORDER BY id DESC";
$req19p = mysql_query($sql19p) or die("req19 : ".mysql_error());
$q19r1p = mysql_result($req19p,"0","q19r1");
$q19r1sp = mysql_result($req19p,"0","q19r1s");$q19r1sp = stripslashes(ereg_replace("'","&#39;",$q19r1sp));
$q19r2p = mysql_result($req19p,"0","q19r2");
$q19r2sp = mysql_result($req19p,"0","q19r2s");$q19r2sp = stripslashes(ereg_replace("'","&#39;",$q19r2sp));
$q19r3p = mysql_result($req19p,"0","q19r3");
$q19r3sp = mysql_result($req19p,"0","q19r3s");$q19r3sp = stripslashes(ereg_replace("'","&#39;",$q19r3sp));
$q19r4p = mysql_result($req19p,"0","q19r4");
$q19r4sp = mysql_result($req19p,"0","q19r4s");$q19r4sp = stripslashes(ereg_replace("'","&#39;",$q19r4sp));
$q19cp = mysql_result($req19p,"0","comment");$q19cp = stripslashes(ereg_replace("'","&#39;",$q19cp));
} else {
$q19r1p = $_POST['q19r1'];
$q19r1sp = $_POST['q19r1s'];
$q19r2p = $_POST['q19r2'];
$q19r2sp = $_POST['q19r2s'];
$q19r3p = $_POST['q19r3'];
$q19r3sp = $_POST['q19r3s'];
$q19r4p = $_POST['q19r4'];
$q19r4sp = $_POST['q19r4s'];
$q19cp = $_POST['commentq19'];
}

echo "<h3>19) $q19</h3>";
echo "<input type='checkbox' name='q19r1' value='$q19r1' ";if($q19r1p==$q19r1)echo "checked";echo ">$q19r1 <input type='text' name='q19r1s' size='30' value='".$q19r1sp."'><br>";
echo "<input type='checkbox' name='q19r2' value='$q19r2' ";if($q19r2p==$q19r2)echo "checked";echo ">$q19r2 <input type='text' name='q19r2s' size='30' value='".$q19r2sp."'><br>";
echo "<input type='checkbox' name='q19r3' value='$q19r3' ";if($q19r3p==$q19r3)echo "checked";echo ">$q19r3 <input type='text' name='q19r3s' size='30' value='".$q19r3sp."'><br>";
echo "<input type='checkbox' name='q19r4' value='$q19r4' ";if($q19r4p==$q19r4)echo "checked";echo ">$q19r4 <input type='text' name='q19r4s' size='30' value='".$q19r4sp."'><br><br>";
echo "Commentaires : <input type='text' name='commentq19' size='50' value='".$q19cp."'><br>";
echo "<div style='color:red'>$msgq19</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql20 = "SELECT * FROM fr_q20";
$req20 = mysql_query($sql20) or die("req20 : ".mysql_error());
$q20 = mysql_result($req20,"0","q20");
$q20r1 = mysql_result($req20,"0","q20r1");
$q20r2 = mysql_result($req20,"0","q20r2");

if($_POST['paysmodif']){
$sql20p = "SELECT * FROM fr_q20 WHERE pays='$pays' ORDER BY id DESC";
$req20p = mysql_query($sql20p) or die("req20 : ".mysql_error());
$q20rp = mysql_result($req20p,"0","q20r");
$q20cp = mysql_result($req20p,"0","comment");$q20cp = stripslashes(ereg_replace("'","&#39;",$q20cp));
} else { 
$q20rp = $_POST['q20r'];
$q20cp = $_POST['commentq20'];
}

echo "<h3>20) $q20</h3>";
echo "<input type='radio' name='q20r' value='$q20r1' ";if($q20rp==$q20r1)echo "checked";echo ">$q20r1<br>";
echo "<input type='radio' name='q20r' value='$q20r2' ";if($q20rp==$q20r2)echo "checked";echo ">$q20r2<br>";
echo "<br>Commentaires : <input type='text' name='commentq20' size='50' value='".$q20cp."'><br>";
echo "<div style='color:red'>$msgq20</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql21 = "SELECT * FROM fr_q21";
$req21 = mysql_query($sql21) or die("req21 : ".mysql_error());
$q21 = mysql_result($req21,"0","q21");
$q21r1 = mysql_result($req21,"0","q21r1");
$q21r2 = mysql_result($req21,"0","q21r2");

if($_POST['paysmodif']){
$sql21p = "SELECT * FROM fr_q21 WHERE pays='$pays' ORDER BY id DESC";
$req21p = mysql_query($sql21p) or die("req21 : ".mysql_error());
$q21rp = mysql_result($req21p,"0","q21r");
$q21cp = mysql_result($req21p,"0","comment");$q21cp = stripslashes(ereg_replace("'","&#39;",$q21cp));
} else { 
$q21rp = $_POST['q21r'];
$q21cp = $_POST['commentq21'];
}

echo "<h3>21) $q21</h3>";
echo "<input type='radio' name='q21r' value='$q21r1' ";if($q21rp==$q21r1)echo "checked";echo ">$q21r1<br>";
echo "<input type='radio' name='q21r' value='$q21r2' ";if($q21rp==$q21r2)echo "checked";echo ">$q21r2<br>";
echo "<br>Commentaires : <input type='text' name='commentq21' size='50' value='".$q21cp."'><br>";
echo "<div style='color:red'>$msgq21</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql22 = "SELECT * FROM fr_q22";
$req22 = mysql_query($sql22) or die("req22 : ".mysql_error());
$q22 = mysql_result($req22,"0","q22");

echo "<h3>22) $q22</h3>";

$sql22p = "SELECT * FROM fr_q22 WHERE pays='$pays' ORDER BY id DESC";
$req22p = mysql_query($sql22p) or die("req22p : ".mysql_error());
$res22p = mysql_num_rows($req22p);
if($res22p>"0"){
$q22r = mysql_result($req22p,"0","q22r");
if ($q22r!=""){echo "Document actuel : <a href='docpays/$q22r'>$q22r</a><br><br>";}
}else{echo "Pas de document joint.";}

echo "<input type='file' name='q22F'><br>";
echo "<div style='color:red'>$msgq22</div><div style='color:green'>$msgq22ok</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql23 = "SELECT * FROM fr_q23";
$req23 = mysql_query($sql23) or die("req23 : ".mysql_error());
$q23 = mysql_result($req23,"0","q23");
$q23r1 = mysql_result($req23,"0","q23r1");
$q23r2 = mysql_result($req23,"0","q23r2");
$q23r3 = mysql_result($req23,"0","q23r3");
$q23r4 = mysql_result($req23,"0","q23r4");
$q23r5 = mysql_result($req23,"0","q23r5");
$q23r6 = mysql_result($req23,"0","q23r6");

if($_POST['paysmodif']){
$sql23p = "SELECT * FROM fr_q23 WHERE pays='$pays' ORDER BY id DESC";
$req23p = mysql_query($sql23p) or die("req23 : ".mysql_error());
$q23r1p = mysql_result($req23p,"0","q23r1");$q23r1p = stripslashes(ereg_replace("'","&#39;",$q23r1p));
$q23r2p = mysql_result($req23p,"0","q23r2");$q23r2p = stripslashes(ereg_replace("'","&#39;",$q23r2p));
$q23r3p = mysql_result($req23p,"0","q23r3");$q23r3p = stripslashes(ereg_replace("'","&#39;",$q23r3p));
$q23r4p = mysql_result($req23p,"0","q23r4");$q23r4p = stripslashes(ereg_replace("'","&#39;",$q23r4p));
$q23r5p = mysql_result($req23p,"0","q23r5");$q23r5p = stripslashes(ereg_replace("'","&#39;",$q23r5p));
$q23r6p = mysql_result($req23p,"0","q23r6");$q23r6p = stripslashes(ereg_replace("'","&#39;",$q23r6p));
} else { 

$q23r1p = $_POST['q23r1'];
$q23r2p = $_POST['q23r2'];
$q23r3p = $_POST['q23r3'];
$q23r4p = $_POST['q23r4'];
$q23r5p = $_POST['q23r5'];
$q23r6p = $_POST['q23r6'];

} 

echo "<h3>23) $q23</h3>";
echo "$q23r1 : <input type='text' name='q23r1' size='50' value='".$q23r1p."'><br>";
echo "$q23r2 : <input type='text' name='q23r2' size='50' value='".$q23r2p."'><br>";
echo "$q23r3 : <input type='text' name='q23r3' size='50' value='".$q23r3p."'><br>";
echo "$q23r4 : <input type='text' name='q23r4' size='50' value='".$q23r4p."'><br>";
echo "$q23r5 : <input type='text' name='q23r5' size='50' value='".$q23r5p."'><br>";
echo "$q23r6 : <input type='text' name='q23r6' size='50' value='".$q23r6p."'><br>";
echo "<div style='color:red'>$msgq23</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql24 = "SELECT * FROM fr_q24";
$req24 = mysql_query($sql24) or die("req24 : ".mysql_error());
$q24 = mysql_result($req24,"0","q24");
$q24r1 = mysql_result($req24,"0","q24r1");
$q24r2 = mysql_result($req24,"0","q24r2");
$q24r3 = mysql_result($req24,"0","q24r3");
$q24r4 = mysql_result($req24,"0","q24r4");

if($_POST['paysmodif']){
$sql24p = "SELECT * FROM fr_q24 WHERE pays='$pays' ORDER BY id DESC";
$req24p = mysql_query($sql24p) or die("req24 : ".mysql_error());
$q24r1p = mysql_result($req24p,"0","q24r1");$q24r1p = stripslashes(ereg_replace("'","&#39;",$q24r1p));
$q24r2p = mysql_result($req24p,"0","q24r2");$q24r2p = stripslashes(ereg_replace("'","&#39;",$q24r2p));
$q24r3p = mysql_result($req24p,"0","q24r3");$q24r3p = stripslashes(ereg_replace("'","&#39;",$q24r3p));
$q24r4p = mysql_result($req24p,"0","q24r4");$q24r4p = stripslashes(ereg_replace("'","&#39;",$q24r4p));
} else { 
$q24r1p = $_POST['q24r1'];
$q24r2p = $_POST['q24r2'];
$q24r3p = $_POST['q24r3'];
$q24r4p = $_POST['q24r4'];
} 

echo "<h3>24) $q24</h3>";
echo "$q24r1 : <input type='text' name='q24r1' size='50' value='".$q24r1p."'><br>";
echo "$q24r2 : <input type='text' name='q24r2' size='50' value='".$q24r2p."'><br>";
echo "$q24r3 : <input type='text' name='q24r3' size='50' value='".$q24r3p."'><br>";
echo "$q24r4 : <input type='text' name='q24r4' size='50' value='".$q24r4p."'><br>";
echo "Si pas de compétences partagées, merci de noter « pas de compétences partagées » dans la première case.";
echo "<div style='color:red'>$msgq24</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql25 = "SELECT * FROM fr_q25";
$req25 = mysql_query($sql25) or die("req25 : ".mysql_error());
$q25 = mysql_result($req25,"0","q25");
$q25r1 = mysql_result($req25,"0","q25r1");
$q25r2 = mysql_result($req25,"0","q25r2");
$q25r3 = mysql_result($req25,"0","q25r3");
$q25r4 = mysql_result($req25,"0","q25r4");

if($_POST['paysmodif']){
$sql25p = "SELECT * FROM fr_q25 WHERE pays='$pays' ORDER BY id DESC";
$req25p = mysql_query($sql25p) or die("req25 : ".mysql_error());
$q25r1p = mysql_result($req25p,"0","q25r1");$q25r1p = stripslashes(ereg_replace("'","&#39;",$q25r1p));
$q25r2p = mysql_result($req25p,"0","q25r2");$q25r2p = stripslashes(ereg_replace("'","&#39;",$q25r2p));
$q25r3p = mysql_result($req25p,"0","q25r3");$q25r3p = stripslashes(ereg_replace("'","&#39;",$q25r3p));
$q25r4p = mysql_result($req25p,"0","q25r4");$q25r4p = stripslashes(ereg_replace("'","&#39;",$q25r4p));
} else { 
$q25r1p = $_POST['q25r1'];
$q25r2p = $_POST['q25r2'];
$q25r3p = $_POST['q25r3'];
$q25r4p = $_POST['q25r4'];
} 

echo "<h3>25) $q25</h3>";
echo "$q25r1 : <input type='text' name='q25r1' size='50' value='".$q25r1p."'><br>";
echo "$q25r2 : <input type='text' name='q25r2' size='50' value='".$q25r2p."'><br>";
echo "$q25r3 : <input type='text' name='q25r3' size='50' value='".$q25r3p."'><br>";
echo "$q25r4 : <input type='text' name='q25r4' size='50' value='".$q25r4p."'><br>";
echo "Si pas de compétences partagées, merci de noter « pas de compétences partagées » dans la première case.";
echo "<div style='color:red'>$msgq25</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql26 = "SELECT * FROM fr_q26";
$req26 = mysql_query($sql26) or die("req26 : ".mysql_error());
$q26 = mysql_result($req26,"0","q26");
$q26r1 = mysql_result($req26,"0","q26r1");
$q26r2 = mysql_result($req26,"0","q26r2");
$q26r3 = mysql_result($req26,"0","q26r3");
$q26r4 = mysql_result($req26,"0","q26r4");

if($_POST['paysmodif']){
$sql26p = "SELECT * FROM fr_q26 WHERE pays='$pays' ORDER BY id DESC";
$req26p = mysql_query($sql26p) or die("req26 : ".mysql_error());
$q26r1p = mysql_result($req26p,"0","q26r1");$q26r1p = stripslashes(ereg_replace("'","&#39;",$q26r1p));
$q26r2p = mysql_result($req26p,"0","q26r2");$q26r2p = stripslashes(ereg_replace("'","&#39;",$q26r2p));
$q26r3p = mysql_result($req26p,"0","q26r3");$q26r3p = stripslashes(ereg_replace("'","&#39;",$q26r3p));
$q26r4p = mysql_result($req26p,"0","q26r4");$q26r4p = stripslashes(ereg_replace("'","&#39;",$q26r4p));
} else { 
$q26r1p = $_POST['q26r1'];
$q26r2p = $_POST['q26r2'];
$q26r3p = $_POST['q26r3'];
$q26r4p = $_POST['q26r4'];
} 

echo "<h3>26) $q26</h3>";
echo "$q26r1 : <input type='text' name='q26r1' size='50' value='".$q26r1p."'><br>";
echo "$q26r2 : <input type='text' name='q26r2' size='50' value='".$q26r2p."'><br>";
echo "$q26r3 : <input type='text' name='q26r3' size='50' value='".$q26r3p."'><br>";
echo "$q26r4 : <input type='text' name='q26r4' size='50' value='".$q26r4p."'><br>";
echo "<div style='color:red'>$msgq26</div>";
echo "<hr>";

/* STArT 27 *************************************************************************/
$sql27 = "SELECT * FROM fr_q27";$req27 = mysql_query($sql27) or die("req27 : ".mysql_error());
$q27 = mysql_result($req27,"0","q27");
$q27D1 = mysql_result($req27,"0","q27D1");
$q27r1 = mysql_result($req27,"0","q27r1");
$q27r2 = mysql_result($req27,"0","q27r2");
$q27r3 = mysql_result($req27,"0","q27r3");
echo "<h3>27) $q27</h3>";
echo "<table width='100%' border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
echo "<td><b>$q27D1</b></td>";
echo "<td align='center'><b>$q27r1</b></td>";
echo "<td align='center'><b>$q27r2</b></td>";
echo "<td align='center'><b>$q27r3</b></td>";
echo "</tr>";

for($i=1;$i<="16";$i++){
// boucle sur les 16 questions en BDD
$sql271 = "SELECT * FROM fr_q27q$i";$req271 = mysql_query($sql271) or die("req271 : ".mysql_error());
$q27q[$i] = mysql_result($req271,"0","q27q$i");

if($_POST['paysmodif']){
$sql271p = "SELECT * FROM fr_q27q$i WHERE pays='$pays' ORDER BY id DESC";
$req271p = mysql_query($sql271p) or die("req271 : ".mysql_error());
$q27qir = "q27q".$i."r";
$q27qr[$i] = mysql_result($req271p,"0","$q27qir");
} else {
$q27qr[$i] = $_POST['q27q'.$i.'r'];
}

echo "<tr>\n";
echo "<td>$q27q[$i]<br><div style='color:red'>$msgq27[$i]</div></td>\n";
echo "<td align='center'><input type='radio' name='q27q".$i."r' value='$q27r1' ";if($q27qr[$i]==$q27r1)echo "checked";echo "></td>\n";
echo "<td align='center'><input type='radio' name='q27q".$i."r' value='$q27r2' ";if($q27qr[$i]==$q27r2)echo "checked";echo "></td>\n";
echo "<td align='center'><input type='radio' name='q27q".$i."r' value='$q27r3' ";if($q27qr[$i]==$q27r3)echo "checked";echo "></td>\n";
echo "</tr>\n";
}
echo "</table>";
echo "<hr>";
/* END 27 ***************************************************************************/

$sql28 = "SELECT * FROM fr_q28";
$req28 = mysql_query($sql28) or die("req28 : ".mysql_error());
$q28 = mysql_result($req28,"0","q28");
$q28r1 = mysql_result($req28,"0","q28r1");$q28r1 = ereg_replace("'","&#39;",$q28r1);
$q28r2 = mysql_result($req28,"0","q28r2");$q28r2 = ereg_replace("'","&#39;",$q28r2);
$q28r3 = mysql_result($req28,"0","q28r3");$q28r3 = ereg_replace("'","&#39;",$q28r3);
$_POST['q28r1'] = stripslashes(ereg_replace("'","&#39;",$_POST['q28r1']));
$_POST['q28r2'] = stripslashes(ereg_replace("'","&#39;",$_POST['q28r2']));
$_POST['q28r3'] = stripslashes(ereg_replace("'","&#39;",$_POST['q28r3']));

if($_POST['paysmodif']){
$sql28p = "SELECT * FROM fr_q28 WHERE pays='$pays' ORDER BY id DESC";
$req28p = mysql_query($sql28p) or die("req28 : ".mysql_error());
$q28r1p = mysql_result($req28p,"0","q28r1"); $q28r1p = stripslashes(ereg_replace("'","&#39;",$q28r1p));
$q28r2p = mysql_result($req28p,"0","q28r2"); $q28r2p = stripslashes(ereg_replace("'","&#39;",$q28r2p));
$q28r3p = mysql_result($req28p,"0","q28r3"); $q28r3p = stripslashes(ereg_replace("'","&#39;",$q28r3p));
$q28cp = mysql_result($req28p,"0","comment");$q28cp = stripslashes(ereg_replace("'","&#39;",$q28cp));
} else {
$q28r1p = $_POST['q28r1'];
$q28r2p = $_POST['q28r2'];
$q28r3p = $_POST['q28r3'];
$q28cp = $_POST['commentq28'];
}

echo "<h3>28) $q28</h3>\n";
echo "<input type='checkbox' name='q28r1' value='$q28r1' ";if($q28r1p==$q28r1)echo "checked";echo ">$q28r1<br>\n";
echo "<input type='checkbox' name='q28r2' value='$q28r2' ";if($q28r2p==$q28r2)echo "checked";echo ">$q28r2<br>\n";
echo "<input type='checkbox' name='q28r3' value='$q28r3' ";if($q28r3p==$q28r3)echo "checked";echo ">$q28r3<br>\n";
echo "Commentaires : <input type='text' name='commentq28' size='50' value='".$q28cp."'><br>\n";
echo "<div style='color:red'>$msgq28</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql29 = "SELECT * FROM fr_q29";
$req29 = mysql_query($sql29) or die("req29 : ".mysql_error());
$q29 = mysql_result($req29,"0","q29");
$q29r1 = mysql_result($req29,"0","q29r1");$q29r1 = ereg_replace("'","&#299;",$q29r1);
$q29r2 = mysql_result($req29,"0","q29r2");$q29r2 = ereg_replace("'","&#299;",$q29r2);
$q29r3 = mysql_result($req29,"0","q29r3");$q29r3 = ereg_replace("'","&#299;",$q29r3);
$_POST['q29r'] = stripslashes(ereg_replace("'","&#299;",$_POST['q29r']));//echo $_POST['q29r'];

if($_POST['paysmodif']){
$sql29p = "SELECT * FROM fr_q29 WHERE pays='$pays' ORDER BY id DESC";
$req29p = mysql_query($sql29p) or die("req29 : ".mysql_error());
$q29rp = mysql_result($req29p,"0","q29r");$q29rp = stripslashes(ereg_replace("'","&#299;",$q29rp));
$q29cp = mysql_result($req29p,"0","comment");$q29cp = stripslashes(ereg_replace("'","&#39;",$q29cp));
} else { 
$q29rp = stripslashes(ereg_replace("'","&#299;",$_POST['q29r']));
$q29cp = $_POST['commentq29'];
} 

echo "\n<h3>29) $q29</h3>\n";
echo "<input type='radio' name='q29r' value='$q29r1' ";if($q29rp==$q29r1)echo "checked";echo ">$q29r1<br>\n";
echo "<input type='radio' name='q29r' value='$q29r2' ";if($q29rp==$q29r2)echo "checked";echo ">$q29r2<br>\n";
echo "<input type='radio' name='q29r' value='$q29r3' ";if($q29rp==$q29r3)echo "checked";echo ">$q29r3<br>\n";
echo "Commentaires : <input type='text' name='commentq29' size='50' value='".$q29cp."'><br>\n";
echo "<div style='color:red'>$msgq29</div>\n";
echo "<hr>";
/***************************************************************************************************************/
$sql30 = "SELECT * FROM fr_q30";
$req30 = mysql_query($sql30) or die("req30 : ".mysql_error());
$q30 = mysql_result($req30,"0","q30");
$q30r1 = mysql_result($req30,"0","q30r1");$q30r1 = ereg_replace("'","&#309;",$q30r1);
$q30r2 = mysql_result($req30,"0","q30r2");$q30r2 = ereg_replace("'","&#309;",$q30r2);
$q30r3 = mysql_result($req30,"0","q30r3");$q30r3 = ereg_replace("'","&#309;",$q30r3);
$_POST['q30r'] = stripslashes(ereg_replace("'","&#309;",$_POST['q30r']));//echo $_POST['q30r'];

if($_POST['paysmodif']){
$sql30p = "SELECT * FROM fr_q30 WHERE pays='$pays' ORDER BY id DESC";
$req30p = mysql_query($sql30p) or die("req30 : ".mysql_error());
$q30rp = mysql_result($req30p,"0","q30r");$q30rp = stripslashes(ereg_replace("'","&#309;",$q30rp));
$q30cp = mysql_result($req30p,"0","comment");$q30cp = stripslashes(ereg_replace("'","&#39;",$q30cp));
} else { 
$q30rp = stripslashes(ereg_replace("'","&#309;",$_POST['q30r']));
$q30cp = $_POST['commentq30'];
} 

echo "\n<h3>30) $q30</h3>\n";
echo "<input type='radio' name='q30r' value='$q30r1' ";if($q30rp==$q30r1)echo "checked";echo ">$q30r1<br>\n";
echo "<input type='radio' name='q30r' value='$q30r2' ";if($q30rp==$q30r2)echo "checked";echo ">$q30r2<br>\n";
echo "<input type='radio' name='q30r' value='$q30r3' ";if($q30rp==$q30r3)echo "checked";echo ">$q30r3<br>\n";
echo "Commentaires : <input type='text' name='commentq30' size='50' value='".$q30cp."'><br>\n";
echo "<div style='color:red'>$msgq30</div>\n";
echo "<hr>";
/***************************************************************************************************************/
$sql31 = "SELECT * FROM fr_q31";
$req31 = mysql_query($sql31) or die("req31 : ".mysql_error());
$q31 = mysql_result($req31,"0","q31");
$q31r1 = mysql_result($req31,"0","q31r1");
$q31r2 = mysql_result($req31,"0","q31r2");

if($_POST['paysmodif']){
$sql31p = "SELECT * FROM fr_q31 WHERE pays='$pays' ORDER BY id DESC";
$req31p = mysql_query($sql31p) or die("req31 : ".mysql_error());
$q31rp = mysql_result($req31p,"0","q31r");
$q31cp = mysql_result($req31p,"0","comment");$q31cp = stripslashes(ereg_replace("'","&#39;",$q31cp));
} else { 
$q31rp = $_POST['q31r'];
$q31cp = $_POST['commentq31'];
}

echo "<h3>31) $q31</h3>";
echo "<input type='radio' name='q31r' value='$q31r1' ";if($q31rp==$q31r1)echo "checked";echo ">$q31r1<br>";
echo "<input type='radio' name='q31r' value='$q31r2' ";if($q31rp==$q31r2)echo "checked";echo ">$q31r2<br>";
echo "Commentaires : <input type='text' name='commentq31' size='50' value='".$q31cp."'><br>";
echo "<div style='color:red'>$msgq31</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql32 = "SELECT * FROM fr_q32";
$req32 = mysql_query($sql32) or die("req32 : ".mysql_error());
$q32 = mysql_result($req32,"0","q32");
$q32r1 = mysql_result($req32,"0","q32r1");
$q32r2 = mysql_result($req32,"0","q32r2");
$q32r3 = mysql_result($req32,"0","q32r3");
$q32r4 = mysql_result($req32,"0","q32r4");
$q32r5 = mysql_result($req32,"0","q32r5");

if($_POST['paysmodif']){
$sql32p = "SELECT * FROM fr_q32 WHERE pays='$pays' ORDER BY id DESC";
$req32p = mysql_query($sql32p) or die("req32 : ".mysql_error());
$q32r1p = mysql_result($req32p,"0","q32r1");
$q32r2p = mysql_result($req32p,"0","q32r2");
$q32r3p = mysql_result($req32p,"0","q32r3");
$q32r4p = mysql_result($req32p,"0","q32r4");
$q32r5p = mysql_result($req32p,"0","q32r5");
$q32r5sp = mysql_result($req32p,"0","q32r5s");$q32r5sp = stripslashes(ereg_replace("'","&#39;",$q32r5sp));
$q32cp = mysql_result($req32p,"0","comment");$q32cp = stripslashes(ereg_replace("'","&#39;",$q32cp));
} else {
$q32r1p = $_POST['q32r1'];
$q32r2p = $_POST['q32r2'];
$q32r2sp = $_POST['q32r2s'];
$q32r3p = $_POST['q32r3'];
$q32cp = $_POST['commentq32'];
}

echo "<h3>32) $q32</h3>";
echo "<input type='checkbox' name='q32r1' value='$q32r1' ";if($q32r1p==$q32r1)echo "checked";echo ">$q32r1<br>";
echo "<input type='checkbox' name='q32r2' value='$q32r2' ";if($q32r2p==$q32r2)echo "checked";echo ">$q32r2<br>";
echo "<input type='checkbox' name='q32r3' value='$q32r3' ";if($q32r3p==$q32r3)echo "checked";echo ">$q32r3<br>";
echo "<input type='checkbox' name='q32r3' value='$q32r3' ";if($q32r4p==$q32r4)echo "checked";echo ">$q32r3<br>";
echo "<input type='checkbox' name='q32r2' value='$q32r2' ";if($q32r5p==$q32r5)echo "checked";echo ">$q32r5 <input type='text' name='q32r5s' size='30' value='"
.$q32r5sp."'><br>";
echo "Commentaires : <input type='text' name='commentq32' size='50' value='".$q32cp."'><br>";
echo "<div style='color:red'>$msgq32</div>";
echo "<hr>";

/***************************************************************************************************************/
$sql33 = "SELECT * FROM fr_q33";
$req33 = mysql_query($sql33) or die("req33 : ".mysql_error());
$q33 = mysql_result($req33,"0","q33");
$q33r1 = mysql_result($req33,"0","q33r1");$q33r1 = stripslashes(ereg_replace("'","&#39;",$q33r1));
$q33r2 = mysql_result($req33,"0","q33r2");$q33r2 = stripslashes(ereg_replace("'","&#39;",$q33r2));

if($_POST['paysmodif']){
$sql33p = "SELECT * FROM fr_q33 WHERE pays='$pays' ORDER BY id DESC";
$req33p = mysql_query($sql33p) or die("req33 : ".mysql_error());
$q33r1p = mysql_result($req33p,"0","q33r1");$q33r1p = stripslashes(ereg_replace("'","&#39;",$q33r1p));
$q33r1sp = mysql_result($req33p,"0","q33r1s");$q33r1sp = stripslashes(ereg_replace("'","&#39;",$q33r1sp));
$q33r2p = mysql_result($req33p,"0","q33r2");$q33r2p = stripslashes(ereg_replace("'","&#39;",$q33r2p));
$q33r2sp = mysql_result($req33p,"0","q33r2s");$q33r2sp = stripslashes(ereg_replace("'","&#39;",$q33r2sp));
$q33cp = mysql_result($req33p,"0","comment");$q33cp = stripslashes(ereg_replace("'","&#39;",$q33cp));
} else {
$q33r1p = $_POST['q33r1'];
$q33r1sp = $_POST['q33r1s'];
$q33r2p = $_POST['q33r2'];
$q33r2sp = $_POST['q33r2s'];
$q33cp = $_POST['commentq33'];
}

echo "<h3>33) $q33</h3>";
echo "<input type='checkbox' name='q33r1' value='$q33r1' ";if($q33r1p==$q33r1)echo "checked";echo ">$q33r1 <input type='text' name='q33r1s' size='30' value='".$q33r1sp."'><br>";
echo "<input type='checkbox' name='q33r2' value='$q33r2' ";if($q33r2p==$q33r2)echo "checked";echo ">$q33r2 <input type='text' name='q33r2s' size='30' value='".$q33r2sp."'><br>";
echo "Commentaires : <input type='text' name='commentq33' size='50' value='".$q33cp."'><br>";
echo "<div style='color:red'>$msgq33</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql34 = "SELECT * FROM fr_q34";
$req34 = mysql_query($sql34) or die("req34 : ".mysql_error());
$q34 = mysql_result($req34,"0","q34");
$q34r1 = mysql_result($req34,"0","q34r1");
$q34r2 = mysql_result($req34,"0","q34r2");

if($_POST['paysmodif']){
$sql34p = "SELECT * FROM fr_q34 WHERE pays='$pays' ORDER BY id DESC";
$req34p = mysql_query($sql34p) or die("req34 : ".mysql_error());
$q34rp = mysql_result($req34p,"0","q34r");
$q34cp = mysql_result($req34p,"0","comment");$q34cp = stripslashes(ereg_replace("'","&#39;",$q34cp));
} else { 
$q34rp = $_POST['q34r'];
$q34cp = $_POST['commentq34'];
}
echo "<h3>34) $q34</h3>";
echo "<input type='radio' name='q34r' value='$q34r1' ";if($q34rp==$q34r1)echo "checked";echo ">$q34r1<br>";
echo "<input type='radio' name='q34r' value='$q34r2' ";if($q34rp==$q34r2)echo "checked";echo ">$q34r2<br>";
echo "<br>Commentaires : <input type='text' name='commentq34' size='50' value='".$q34cp."'><br>";
echo "<div style='color:red'>$msgq34</div>";
echo "<hr>";

/* STArT 35 *************************************************************************/
$sql35 = "SELECT * FROM fr_q35";$req35 = mysql_query($sql35) or die("req35 : ".mysql_error());
$q35 = mysql_result($req35,"0","q35");
$q35r1 = mysql_result($req35,"0","q35r1");
$q35r2 = mysql_result($req35,"0","q35r2");
$q35C= mysql_result($req35,"0","q35C");
echo "<h3>35) $q35</h3>";
echo "<table width='100%' border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
echo "<td><b>&nbsp;</b></td>";
echo "<td align='center'><b>$q35r1</b></td>";
echo "<td align='center'><b>$q35r2</b></td>";
echo "<td align='center'><b>$q35C</b></td>";
echo "</tr>";

for($i=1;$i<="5";$i++){ // boucle sur les 5 questions en BDD
$sql351 = "SELECT * FROM fr_q35q$i";$req351 = mysql_query($sql351) or die("req351 : ".mysql_error());
$q35q[$i] = mysql_result($req351,"0","q35q$i");

if($_POST['paysmodif']){
$sql351p = "SELECT * FROM fr_q35q$i WHERE pays='$pays' ORDER BY id DESC";
$req351p = mysql_query($sql351p) or die("req351 : ".mysql_error());
$q35rp = "q35q".$i."r";$q35rp = mysql_result($req351p,"0","$q35rp");
$q35cp = "q35q".$i."c";$q35cp = mysql_result($req351p,"0","$q35cp");$q35cp = stripslashes(ereg_replace("'","&#39;",$q35cp));
} else {
$q35rp = $_POST['q35q'.$i.'r'];
$q35cp = $_POST['q35q'.$i.'c'];
}

echo "<tr>";
echo "<td>$q35q[$i]<br><div style='color:red'>$msgq35[$i]</div></td>";
echo "<td align='center'><input type='radio' name='q35q".$i."r' value='$q35r1' ";if($q35rp==$q35r1)echo "checked";echo "></td>";
echo "<td align='center'><input type='radio' name='q35q".$i."r' value='$q35r2' ";if($q35rp==$q35r2)echo "checked";echo "></td>";
echo "<td align='center'><input type='text' name='q35q".$i."c' value='".$q35cp."'></td>";
echo "</tr>";
}
echo "</table><br>";

if($_POST['paysmodif']){
$sql351c = "SELECT * FROM fr_q35 WHERE pays='$pays' ORDER BY id DESC";
$req351c = mysql_query($sql351c) or die("req351 : ".mysql_error());
$q35c = mysql_result($req351c,"0","comment");$q35c = stripslashes(ereg_replace("'","&#39;",$q35c));
} else {
$q35c = $_POST['q35C'];
}

echo "Observations : <input type='text' name='q35C' size='50' value='".$q35c."'><br>";
echo "<hr>";
/* END 35 ***************************************************************************/

$sql36 = "SELECT * FROM fr_q36";
$req36 = mysql_query($sql36) or die("req36 : ".mysql_error());
$q36 = mysql_result($req36,"0","q36");
$q36r1 = mysql_result($req36,"0","q36r1");$q36r1 = stripslashes(ereg_replace("'","&#39;",$q36r1));
$q36r2 = mysql_result($req36,"0","q36r2");$q36r2 = stripslashes(ereg_replace("'","&#39;",$q36r2));
$q36r3 = mysql_result($req36,"0","q36r3");$q36r3 = stripslashes(ereg_replace("'","&#39;",$q36r3));
$q36r4 = mysql_result($req36,"0","q36r4");$q36r4 = stripslashes(ereg_replace("'","&#39;",$q36r4));
$q36r5 = mysql_result($req36,"0","q36r5");$q36r5 = stripslashes(ereg_replace("'","&#39;",$q36r5));


if($_POST['paysmodif']){
$sql36p = "SELECT * FROM fr_q36 WHERE pays='$pays' ORDER BY id DESC";
$req36p = mysql_query($sql36p) or die("req36 : ".mysql_error());
$q36r1p = mysql_result($req36p,"0","q36r1");$q36r1p = stripslashes(ereg_replace("'","&#39;",$q36r1p));
$q36r1sp = mysql_result($req36p,"0","q36r1s");$q36r1sp = stripslashes(ereg_replace("'","&#39;",$q36r1sp));
$q36r2p = mysql_result($req36p,"0","q36r2");$q36r2p = stripslashes(ereg_replace("'","&#39;",$q36r2p));
$q36r2sp = mysql_result($req36p,"0","q36r2s");$q36r2sp = stripslashes(ereg_replace("'","&#39;",$q36r2sp));
$q36r3p = mysql_result($req36p,"0","q36r3");$q36r3p = stripslashes(ereg_replace("'","&#39;",$q36r3p));
$q36r3sp = mysql_result($req36p,"0","q36r3s");$q36r3sp = stripslashes(ereg_replace("'","&#39;",$q36r3sp));
$q36r4p = mysql_result($req36p,"0","q36r4");$q36r4p = stripslashes(ereg_replace("'","&#39;",$q36r4p));
$q36r4sp = mysql_result($req36p,"0","q36r4s");$q36r4sp = stripslashes(ereg_replace("'","&#39;",$q36r4sp));
$q36r5p = mysql_result($req36p,"0","q36r5");$q36r5p = stripslashes(ereg_replace("'","&#39;",$q36r5p));
$q36r5sp = mysql_result($req36p,"0","q36r5s");$q36r5sp = stripslashes(ereg_replace("'","&#39;",$q36r5sp));
$q36cp = mysql_result($req36p,"0","comment");$q36cp = stripslashes(ereg_replace("'","&#39;",$q36cp));

} else {
$q36r1p = $_POST['q36r1'];$q36r1sp = $_POST['q36r1s'];
$q36r2p = $_POST['q36r2'];$q36r2sp = $_POST['q36r2s'];
$q36r3p = $_POST['q36r3'];$q36r3sp = $_POST['q36r3s'];
$q36r4p = $_POST['q36r4'];$q36r4sp = $_POST['q36r4s'];
$q36r5p = $_POST['q36r5'];$q36r5sp = $_POST['q36r5s'];
}

echo "<h3>36) $q36</h3>";
//echo $q36r1."<br>";echo $q36r1p."<br>";

echo "<input type='checkbox' name='q36r1' value='$q36r1' ";if($q36r1p==$q36r1)echo "checked";echo ">$q36r1 <input type='text' name='q36r1s' size='30' value='".$q36r1sp."'><br>";
echo "<input type='checkbox' name='q36r2' value='$q36r2' ";if($q36r2p==$q36r2)echo "checked";echo ">$q36r2 <input type='text' name='q36r2s' size='30' value='".$q36r2sp."'><br>";
echo "<input type='checkbox' name='q36r3' value='$q36r3' ";if($q36r3p==$q36r3)echo "checked";echo ">$q36r3 <input type='text' name='q36r3s' size='30' value='".$q36r3sp."'><br>";
echo "<input type='checkbox' name='q36r4' value='$q36r4' ";if($q36r4p==$q36r4)echo "checked";echo ">$q36r4 <input type='text' name='q36r4s' size='30' value='".$q36r4sp."'><br>";
echo "<input type='checkbox' name='q36r5' value='$q36r5' ";if($q36r5p==$q36r5)echo "checked";echo ">$q36r5 <input type='text' name='q36r5s' size='30' value='".$q36r5sp."'><br>";
echo "<div style='color:red'>$msgq36</div>";
echo "<hr>";

/* STArT 37 *************************************************************************/
$sql37 = "SELECT * FROM fr_q37";$req37 = mysql_query($sql37) or die("req37 : ".mysql_error());
$q37 = mysql_result($req37,"0","q37");
$q37r1 = mysql_result($req37,"0","q37r1");
$q37r2 = mysql_result($req37,"0","q37r2");
$q37C= mysql_result($req37,"0","q37C");
echo "<h3>37) $q37</h3>";
echo "<table width='100%' border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>";
echo "<td><b>&nbsp;</b></td>";
echo "<td align='center'><b>$q37r1</b></td>";
echo "<td align='center'><b>$q37r2</b></td>";
echo "<td align='center'><b>$q37C</b></td>";
echo "</tr>";

for($i=1;$i<="5";$i++){ // boucle sur les 5 questions en BDD
$sql371 = "SELECT * FROM fr_q37q$i";$req371 = mysql_query($sql371) or die("req371 : ".mysql_error());
$q37q[$i] = mysql_result($req371,"0","q37q$i");

if($_POST['paysmodif']){
$sql371p = "SELECT * FROM fr_q37q$i WHERE pays='$pays' ORDER BY id DESC";
$req371p = mysql_query($sql371p) or die("req371 : ".mysql_error());
$q37rp = "q37q".$i."r";$q37rp = mysql_result($req371p,"0","$q37rp");
$q37cp = "q37q".$i."c";$q37cp = mysql_result($req371p,"0","$q37cp");$q37cp = stripslashes(ereg_replace("'","&#39;",$q37cp));
} else {
$q37rp = $_POST['q37q'.$i.'r'];
$q37cp = $_POST['q37q'.$i.'c'];
}

echo "<tr>";
echo "<td>$q37q[$i]<br><div style='color:red'>$msgq37[$i]</div></td>";
echo "<td align='center'><input type='radio' name='q37q".$i."r' value='$q37r1' ";if($q37rp==$q37r1)echo "checked";echo "></td>";
echo "<td align='center'><input type='radio' name='q37q".$i."r' value='$q37r2' ";if($q37rp==$q37r2)echo "checked";echo "></td>";
echo "<td align='center'><input type='text' name='q37q".$i."c' value='".$q37cp."'></td>";
echo "</tr>";
}
echo "</table><br>";

if($_POST['paysmodif']){
$sql371c = "SELECT * FROM fr_q37 WHERE pays='$pays' ORDER BY id DESC";
$req371c = mysql_query($sql371c) or die("req371 : ".mysql_error());
$q37c = mysql_result($req371c,"0","comment");$q37c = stripslashes(ereg_replace("'","&#39;",$q37c));
} else {
$q37c = $_POST['q37C'];
}

echo "Observations : <input type='text' name='q37C' size='50' value='".$q37c."'><br>";
echo "<hr>";
/* END 37 ***************************************************************************/

$sql38 = "SELECT * FROM fr_q38";
$req38 = mysql_query($sql38) or die("req38 : ".mysql_error());
$q38 = mysql_result($req38,"0","q38");
$q38r1 = mysql_result($req38,"0","q38r1");
$q38r2 = mysql_result($req38,"0","q38r2");

if($_POST['paysmodif']){
$sql38p = "SELECT * FROM fr_q38 WHERE pays='$pays' ORDER BY id DESC";
$req38p = mysql_query($sql38p) or die("req38 : ".mysql_error());
$q38rp = mysql_result($req38p,"0","q38r");
$q38cp = mysql_result($req38p,"0","comment");$q38cp = stripslashes(ereg_replace("'","&#39;",$q38cp));
} else { 
$q38rp = $_POST['q38r'];
$q38cp = $_POST['commentq38'];
}

echo "<h3>38) $q38</h3>";
echo "<input type='radio' name='q38r' value='$q38r1' ";if($q38rp==$q38r1)echo "checked";echo ">$q38r1<br>";
echo "<input type='radio' name='q38r' value='$q38r2' ";if($q38rp==$q38r2)echo "checked";echo ">$q38r2<br>";
echo "<br>Commentaires : <input type='text' name='commentq38' size='50' value='".$q38cp."'><br>";
echo "<div style='color:red'>$msgq38</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql39 = "SELECT * FROM fr_q39";
$req39 = mysql_query($sql39) or die("req39 : ".mysql_error());
$q39 = mysql_result($req39,"0","q39");
$q39r1 = mysql_result($req39,"0","q39r1");
$q39r1S1 = mysql_result($req39,"0","q39r1S1");
$q39r1S2 = mysql_result($req39,"0","q39r1S2");
$q39r2 = mysql_result($req39,"0","q39r2");

if($_POST['paysmodif']){
$sql39p = "SELECT * FROM fr_q39 WHERE pays='$pays' ORDER BY id DESC";
$req39p = mysql_query($sql39p) or die("req39 : ".mysql_error());
$q39rp = mysql_result($req39p,"0","q39r");
$q39r1rp = mysql_result($req39p,"0","q39r1r");
$q39cp = mysql_result($req39p,"0","comment");$q39cp = stripslashes(ereg_replace("'","&#39;",$q39cp));
} else {
$q39rp = $_POST['q39r'];
$q39r1rp = $_POST['q39r1r'];
$q39cp = $_POST['commentq39'];
}

echo "<h3>39) $q39</h3>";
echo "<input type='radio' name='q39r' value='$q39r1' ";if($q39rp==$q39r1)echo "checked";echo ">$q39r1<br>";
echo "<blockquote>";
echo "<input type='radio' name='q39r1r' value='$q39r1S1' ";if($q39r1rp==$q39r1S1)echo "checked";echo ">$q39r1S1<br>";
echo "<input type='radio' name='q39r1r' value='$q39r1S2' ";if($q39r1rp==$q39r1S2)echo "checked";echo ">$q39r1S2<br>";
echo "<div style='color:red'>$msgq39Q1</div>";
echo "</blockquote>";
echo "<input type='radio' name='q39r' value='$q39r2' ";if($q39rp==$q39r2)echo "checked";echo ">$q39r2<br>";
echo "Commentaires : <input type='text' name='commentq39' size='50' value='".$q39cp."'><br>";
echo "<div style='color:red'>$msgq39</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql40 = "SELECT * FROM fr_q40";
$req40 = mysql_query($sql40) or die("req40 : ".mysql_error());
$q40 = mysql_result($req40,"0","q40");
$q40r1 = mysql_result($req40,"0","q40r1");
$q40r2 = mysql_result($req40,"0","q40r2");

if($_POST['paysmodif']){
$sql40p = "SELECT * FROM fr_q40 WHERE pays='$pays' ORDER BY id DESC";
$req40p = mysql_query($sql40p) or die("req40 : ".mysql_error());
$q40rp = mysql_result($req40p,"0","q40r");
$q40cp = mysql_result($req40p,"0","comment");$q40cp = stripslashes(ereg_replace("'","&#39;",$q40cp));
} else { 
$q40rp = $_POST['q40r'];
$q40cp = $_POST['commentq40'];
}

echo "<h3>40) $q40</h3>";
echo "<input type='radio' name='q40r' value='$q40r1' ";if($q40rp==$q40r1)echo "checked";echo ">$q40r1<br>";
echo "<input type='radio' name='q40r' value='$q40r2' ";if($q40rp==$q40r2)echo "checked";echo ">$q40r2<br>";
echo "<br>Commentaires : <input type='text' name='commentq40' size='50' value='".$q40cp."'><br>";
echo "<div style='color:red'>$msgq40</div>";
echo "<hr>";
/***************************************************************************************************************/
$sql41 = "SELECT * FROM fr_q41";
$req41 = mysql_query($sql41) or die("req41 : ".mysql_error());
$q41 = mysql_result($req41,"0","q41");

if($_POST['paysmodif']){
$sql41p = "SELECT * FROM fr_q41 WHERE pays='$pays' ORDER BY id DESC";
$req41p = mysql_query($sql41p) or die("req41 : ".mysql_error());
$q41rp = mysql_result($req41p,"0","q41r");
} else {
$q41rp = $_POST['q41r'];
}

echo "<h3>41) $q41</h3>";
echo "<textarea name='q41r' cols='70' rows='15'>".$q41rp."</textarea><br>";
echo "<hr>";
/***************************************************************************************************************/
echo "<input type='submit' value='enregistrer la fiche pays'>";
echo "</form>";

} // fin du break

} // fin du ok admin

?>
