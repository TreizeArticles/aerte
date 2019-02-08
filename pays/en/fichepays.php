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

	echo "<a href='fichepays.php'>Click here to insert another country index</a> | ";
	echo "<a href='fichemodif.php'>Click here to modify a country index</a><br><hr>";

if($_POST['pays']){
	include("fichepayserrors.php");
	if($errors>"0"){echo "<h3 style='color:red;'>Number of entry errors  = $errors. Please correct.</h3>";}
	else{
	echo "<h3 style='color:green;'>Country index $pays inserted.</h3>";
	include("insertpays.php");
	echo "<a href='fichepays.php'>Click here to insert another country index</a>";
	$break="ok";
	}
}

if($break!="ok"){

echo "<form action='' method='POST' enctype='multipart/form-data'>";

echo "Country <input type='text' name='pays' size='50' value='".$_POST['pays']."'>";
echo "<hr>";

$sql1 = "SELECT * FROM q1";
$req1 = mysql_query($sql1) or die("req1 : ".mysql_error());
$q1 = mysql_result($req1,"0","q1");
$q1r1 = mysql_result($req1,"0","q1r1");
$q1r2 = mysql_result($req1,"0","q1r2");
$q1r3 = mysql_result($req1,"0","q1r3");
echo "<h3>1) $q1</h3>";
echo "<input type='checkbox' name='q1r1' value='$q1r1'";if($_POST['q1r1']==$q1r1)echo "checked";echo ">$q1r1<br>";
echo "<input type='checkbox' name='q1r2' value='$q1r2'";if($_POST['q1r2']==$q1r2)echo "checked";echo ">$q1r2<br>";
echo "<input type='checkbox' name='q1r3' value='$q1r3'";if($_POST['q1r3']==$q1r3)echo "checked";echo ">$q1r3<br>";
echo "Comments : <input type='text' name='commentq1' size='50' value='".$_POST['commentq1']."'><br>";
echo "<div style='color:red'>$msgq1</div>";
echo "<hr>";

$sql2 = "SELECT * FROM q2";
$req2 = mysql_query($sql2) or die("req2 : ".mysql_error());
$q2 = mysql_result($req2,"0","q2");
$q2r1 = mysql_result($req2,"0","q2r1");
$q2r2 = mysql_result($req2,"0","q2r2");
$q2r3 = mysql_result($req2,"0","q2r3");
$q2r4 = mysql_result($req2,"0","q2r4");
$q2r5 = mysql_result($req2,"0","q2r5");
$q2r6 = mysql_result($req2,"0","q2r6");
echo "<h3>2) $q2</h3>";
echo "$q2r1 : <input type='text' name='q2r1' size='50' value='".$_POST['q2r1']."'><br>";
echo "$q2r2 : <input type='text' name='q2r2' size='50' value='".$_POST['q2r2']."'><br>";
echo "$q2r3 : <input type='text' name='q2r3' size='50' value='".$_POST['q2r3']."'><br>";
echo "$q2r4 : <input type='text' name='q2r4' size='50' value='".$_POST['q2r4']."'><br>";
echo "$q2r5 : <input type='text' name='q2r5' size='50' value='".$_POST['q2r5']."'><br>";
echo "$q2r6 : <input type='text' name='q2r6' size='50' value='".$_POST['q2r6']."'><br>";
echo "<div style='color:red'>$msgq2</div>";
echo "<hr>";

$sql3 = "SELECT * FROM q3";
$req3 = mysql_query($sql3) or die("req3 : ".mysql_error());
$q3 = mysql_result($req3,"0","q3");
$q3r1 = mysql_result($req3,"0","q3r1");$q3r1 = ereg_replace("'","&#39;",$q3r1);
$q3r2 = mysql_result($req3,"0","q3r2");$q3r2 = ereg_replace("'","&#39;",$q3r2);
$q3r3 = mysql_result($req3,"0","q3r3");$q3r3 = ereg_replace("'","&#39;",$q3r3);
$_POST['q3r'] = stripslashes(ereg_replace("'","&#39;",$_POST['q3r']));//echo $_POST['q3r'];
echo "\n<h3>3) $q3</h3>\n";
echo "<input type='radio' name='q3r' value='$q3r1' ";if($_POST['q3r']==$q3r1)echo "checked";echo ">$q3r1<br>\n";
echo "<input type='radio' name='q3r' value='$q3r2' ";if($_POST['q3r']==$q3r2)echo "checked";echo ">$q3r2<br>\n";
echo "<input type='radio' name='q3r' value='$q3r3' ";if($_POST['q3r']==$q3r3)echo "checked";echo ">$q3r3<br>\n";
echo "Comments : <input type='text' name='commentq3' size='50' value='".$_POST['commentq3']."'><br>\n";
echo "<div style='color:red'>$msgq3</div>\n";
echo "<hr>";

$sql4 = "SELECT * FROM q4";
$req4 = mysql_query($sql4) or die("req4 : ".mysql_error());
$q4 = mysql_result($req4,"0","q4");
$q4r1 = mysql_result($req4,"0","q4r1");
$q4r2 = mysql_result($req4,"0","q4r2");
echo "<h3>4) $q4</h3>";
echo "<input type='radio' name='q4r' value='$q4r1' ";if($_POST['q4r']==$q4r1)echo "checked";echo ">$q4r1<br>";
echo "<input type='radio' name='q4r' value='$q4r2' ";if($_POST['q4r']==$q4r2)echo "checked";echo ">$q4r2<br>";
echo "Comments : <input type='text' name='commentq4' size='50' value='".$_POST['commentq4']."'><br>";
echo "<div style='color:red'>$msgq4</div>";
echo "<hr>";

$sql5 = "SELECT * FROM q5";
$req5 = mysql_query($sql5) or die("req5 : ".mysql_error());
$q5 = mysql_result($req5,"0","q5");
echo "<h3>5) $q5</h3>";
echo "<input type='text' name='q5r' size='100' value='".$_POST['q5r']."'><br>";
echo "<div style='color:red'>$msgq5</div>";
echo "<hr>";

$sql6 = "SELECT * FROM q6";
$req6 = mysql_query($sql6) or die("req6 : ".mysql_error());
$q6 = mysql_result($req6,"0","q6");
$q6r1 = mysql_result($req6,"0","q6r1");
$q6r2 = mysql_result($req6,"0","q6r2");
echo "<h3>6) $q6</h3>";
echo "<input type='radio' name='q6r' value='$q6r1' ";if($_POST['q6r']==$q6r1)echo "checked";echo ">$q6r1<br>";
echo "<input type='radio' name='q6r' value='$q6r2' ";if($_POST['q6r']==$q6r2)echo "checked";echo ">$q6r2<br>";
echo "Comments : <input type='text' name='commentq6' size='50' value='".$_POST['commentq6']."'><br>";
echo "<div style='color:red'>$msgq6</div>";
echo "<hr>";

$sql7 = "SELECT * FROM q7";
$req7 = mysql_query($sql7) or die("req7 : ".mysql_error());
$q7 = mysql_result($req7,"0","q7");
echo "<h3>7) $q7</h3>";
echo "<input type='text' name='q7r' size='100' value='".$_POST['q7r']."'><br>";
echo "<div style='color:red'>$msgq7</div>";
echo "<hr>";

$sql8 = "SELECT * FROM q8";
$req8 = mysql_query($sql8) or die("req8 : ".mysql_error());
$q8 = mysql_result($req8,"0","q8");
echo "<h3>8) $q8</h3>";
echo "<input type='text' name='q8r' size='100' value='".$_POST['q8r']."'><br>";
echo "<div style='color:red'>$msgq8</div>";
echo "<hr>";

$sql9 = "SELECT * FROM q9";
$req9 = mysql_query($sql9) or die("req9 : ".mysql_error());
$q9 = mysql_result($req9,"0","q9");
$q9r1 = mysql_result($req9,"0","q9r1");
$q9r2 = mysql_result($req9,"0","q9r2");
echo "<h3>9) $q9</h3>";
echo "<input type='checkbox' name='q9r1' value='$q9r1' ";if($_POST['q9r1']==$q9r1)echo "checked";echo ">$q9r1<br>";
echo "<input type='checkbox' name='q9r2' value='$q9r2' ";if($_POST['q9r2']==$q9r2)echo "checked";echo ">$q9r2<br>";
echo "Comments : <input type='text' name='commentq9' size='50' value='".$_POST['commentq9']."'><br>";
echo "<div style='color:red'>$msgq9</div>";
echo "<hr>";

$sql10 = "SELECT * FROM q10";
$req10 = mysql_query($sql10) or die("req10 : ".mysql_error());
$q10 = mysql_result($req10,"0","q10");
$q10r1 = mysql_result($req10,"0","q10r1");
$q10r2 = mysql_result($req10,"0","q10r2");
$q10r3 = mysql_result($req10,"0","q10r3");$q10r3 = ereg_replace("'","&#39;",$q10r3);
$_POST['q10r3'] = stripslashes(ereg_replace("'","&#39;",$_POST['q10r3']));//echo $_POST['q3r'];
echo "<h3>10) $q10</h3>";
echo "<input type='checkbox' name='q10r1' value='$q10r1' ";if($_POST['q10r1']==$q10r1)echo "checked";echo ">$q10r1<br>";
echo "<input type='checkbox' name='q10r2' value='$q10r2' ";if($_POST['q10r2']==$q10r2)echo "checked";echo ">$q10r2<br>";
echo "<input type='checkbox' name='q10r3' value='$q10r3' ";if($_POST['q10r3']==$q10r3)echo "checked";echo ">$q10r3 <input type='text' name='q10r3s' size='30' value='".$_POST['q10r3s']."'><br><br>";
echo "Comments : <input type='text' name='commentq10' size='50' value='".$_POST['commentq10']."'><br>";
echo "<div style='color:red'>$msgq10</div>";
echo "<hr>";

$sql11 = "SELECT * FROM q11";
$req11 = mysql_query($sql11) or die("req11 : ".mysql_error());
$q11 = mysql_result($req11,"0","q11");
$q11r1 = mysql_result($req11,"0","q11r1");
$q11r2 = mysql_result($req11,"0","q11r2");
echo "<h3>11) $q11</h3>";
echo "<input type='radio' name='q11r' value='$q11r1' ";if($_POST['q11r']==$q11r1)echo "checked";echo ">$q11r1<br>";
echo "<input type='radio' name='q11r' value='$q11r2' ";if($_POST['q11r']==$q11r2)echo "checked";echo ">$q11r2<br>";
echo "Comments : <input type='text' name='commentq11' size='50' value='".$_POST['commentq11']."'><br>";
echo "<div style='color:red'>$msgq11</div>";
echo "<hr>";

$sql12 = "SELECT * FROM q12";
$req12 = mysql_query($sql12) or die("req12 : ".mysql_error());
$q12 = mysql_result($req12,"0","q12");
$q12r1 = mysql_result($req12,"0","q12r1");
$q12r2 = mysql_result($req12,"0","q12r2");
$q12r3 = mysql_result($req12,"0","q12r3");
$q12r4 = mysql_result($req12,"0","q12r4");
$q12r5 = mysql_result($req12,"0","q12r5");
echo "<h3>12) $q12</h3>";
echo "<input type='checkbox' name='q12r1' value='$q12r1' ";if($_POST['q12r1']==$q12r1)echo "checked";echo ">$q12r1<br>";
echo "<input type='checkbox' name='q12r2' value='$q12r2' ";if($_POST['q12r2']==$q12r2)echo "checked";echo ">$q12r2<br>";
echo "<input type='checkbox' name='q12r3' value='$q12r3' ";if($_POST['q12r3']==$q12r3)echo "checked";echo ">$q12r3 <input type='text' name='q12r3s' size='30' value='".$_POST['q12r3s']."'><br>";
echo "<input type='checkbox' name='q12r4' value='$q12r4' ";if($_POST['q12r4']==$q12r4)echo "checked";echo ">$q12r4 <input type='text' name='q12r4s' size='30' value='".$_POST['q12r4s']."'><br>";
echo "<input type='checkbox' name='q12r5' value='$q12r5' ";if($_POST['q12r5']==$q12r5)echo "checked";echo ">$q12r5 <input type='text' name='q12r5s' size='30' value='".$_POST['q12r5s']."'><br><br>";
echo "Comments : <input type='text' name='commentq12' size='50' value='".$_POST['commentq12']."'><br>";
echo "<div style='color:red'>$msgq12</div>";
echo "<hr>";

$sql13 = "SELECT * FROM q13";
$req13 = mysql_query($sql13) or die("req13 : ".mysql_error());
$q13 = mysql_result($req13,"0","q13");
$q13r1 = mysql_result($req13,"0","q13r1");
$q13r2 = mysql_result($req13,"0","q13r2");
$q13r3 = mysql_result($req13,"0","q13r3");
echo "<h3>13) $q13</h3>";
echo "<input type='checkbox' name='q13r1' value='$q13r1' ";if($_POST['q13r1']==$q13r1)echo "checked";echo ">$q13r1<br>";
echo "<input type='checkbox' name='q13r2' value='$q13r2' ";if($_POST['q13r2']==$q13r2)echo "checked";echo ">$q13r2 <input type='text' name='q13r2s' size='30' value='".$_POST['q13r2s']."'><br>";
echo "<input type='checkbox' name='q13r3' value='$q13r3' ";if($_POST['q13r3']==$q13r3)echo "checked";echo ">$q13r3<br><br>";
echo "Comments : <input type='text' name='commentq13' size='50' value='".$_POST['commentq13']."'><br>";
echo "<div style='color:red'>$msgq13</div>";
echo "<hr>";

$sql14 = "SELECT * FROM q14";
$req14 = mysql_query($sql14) or die("req14 : ".mysql_error());
$q14 = mysql_result($req14,"0","q14");
$q14r1 = mysql_result($req14,"0","q14r1");
$q14r2 = mysql_result($req14,"0","q14r2");
echo "<h3>14) $q14</h3>";
echo "<input type='radio' name='q14r' value='$q14r1' ";if($_POST['q14r']==$q14r1)echo "checked";echo ">$q14r1<br>";
echo "<input type='radio' name='q14r' value='$q14r2' ";if($_POST['q14r']==$q14r2)echo "checked";echo ">$q14r2<br>";
echo "Comments : <input type='text' name='commentq14' size='50' value='".$_POST['commentq14']."'><br>";
echo "<div style='color:red'>$msgq14</div>";
echo "<hr>";

$sql15 = "SELECT * FROM q15";
$req15 = mysql_query($sql15) or die("req15 : ".mysql_error());
$q15 = mysql_result($req15,"0","q15");
$q15r1 = mysql_result($req15,"0","q15r1");
$q15r2 = mysql_result($req15,"0","q15r2");
echo "<h3>15) $q15</h3>";
echo "<input type='radio' name='q15r' value='$q15r1' ";if($_POST['q15r']==$q15r1)echo "checked";echo ">$q15r1<br>";
echo "<input type='radio' name='q15r' value='$q15r2' ";if($_POST['q15r']==$q15r2)echo "checked";echo ">$q15r2<br>";
echo "Comments : <input type='text' name='commentq15' size='50' value='".$_POST['commentq15']."'><br>";
echo "<div style='color:red'>$msgq15</div>";
echo "<hr>";

$sql16 = "SELECT * FROM q16";
$req16 = mysql_query($sql16) or die("req16 : ".mysql_error());
$q16 = mysql_result($req16,"0","q16");
$q16r1 = mysql_result($req16,"0","q16r1");
$q16r2 = mysql_result($req16,"0","q16r2");
echo "<h3>16) $q16</h3>";
echo "<input type='radio' name='q16r' value='$q16r1' ";if($_POST['q16r']==$q16r1)echo "checked";echo ">$q16r1<br>";
echo "<input type='radio' name='q16r' value='$q16r2' ";if($_POST['q16r']==$q16r2)echo "checked";echo ">$q16r2<br>";
echo "Comments : <input type='text' name='commentq16' size='50' value='".$_POST['commentq16']."'><br>";
echo "<div style='color:red'>$msgq16</div>";
echo "<hr>";

$sql17 = "SELECT * FROM q17";
$req17 = mysql_query($sql17) or die("req17 : ".mysql_error());
$q17 = mysql_result($req17,"0","q17");
$q17r1 = mysql_result($req17,"0","q17r1");
$q17r2 = mysql_result($req17,"0","q17r2");
echo "<h3>17) $q17</h3>";
echo "<input type='radio' name='q17r' value='$q17r1' ";if($_POST['q17r']==$q17r1)echo "checked";echo ">$q17r1<br>";
echo "<input type='radio' name='q17r' value='$q17r2' ";if($_POST['q17r']==$q17r2)echo "checked";echo ">$q17r2<br>";
echo "Comments : <input type='text' name='commentq17' size='50' value='".$_POST['commentq17']."'><br>";
echo "<div style='color:red'>$msgq17</div>";
echo "<hr>";

$sql18 = "SELECT * FROM q18";
$req18 = mysql_query($sql18) or die("req18 : ".mysql_error());
$q18 = mysql_result($req18,"0","q18");
$q18r1 = mysql_result($req18,"0","q18r1");
$q18r2 = mysql_result($req18,"0","q18r2");
$q18r3 = mysql_result($req18,"0","q18r3");
$q18r4 = mysql_result($req18,"0","q18r4");
echo "<h3>18) $q18</h3>";
echo "<input type='checkbox' name='q18r1' value='$q18r1' ";if($_POST['q18r1']==$q18r1)echo "checked";echo ">$q18r1 <input type='text' name='q18r1s' size='30' value='".$_POST['q18r1s']."'><br>";
echo "<input type='checkbox' name='q18r2' value='$q18r2' ";if($_POST['q18r2']==$q18r2)echo "checked";echo ">$q18r2 <input type='text' name='q18r2s' size='30' value='".$_POST['q18r2s']."'><br>";
echo "<input type='checkbox' name='q18r3' value='$q18r3' ";if($_POST['q18r3']==$q18r3)echo "checked";echo ">$q18r3 <input type='text' name='q18r3s' size='30' value='".$_POST['q18r3s']."'><br>";
echo "<input type='checkbox' name='q18r4' value='$q18r4' ";if($_POST['q18r4']==$q18r4)echo "checked";echo ">$q18r4 <input type='text' name='q18r4s' size='30' value='".$_POST['q18r4s']."'><br><br>";
echo "Comments : <input type='text' name='commentq18' size='50' value='".$_POST['commentq18']."'><br>";
echo "<div style='color:red'>$msgq18</div>";
echo "<hr>";

$sql19 = "SELECT * FROM q19";
$req19 = mysql_query($sql19) or die("req19 : ".mysql_error());
$q19 = mysql_result($req19,"0","q19");
$q19r1 = mysql_result($req19,"0","q19r1");
$q19r2 = mysql_result($req19,"0","q19r2");
$q19r3 = mysql_result($req19,"0","q19r3");
$q19r4 = mysql_result($req19,"0","q19r4");
echo "<h3>19) $q19</h3>";
echo "<input type='checkbox' name='q19r1' value='$q19r1' ";if($_POST['q19r1']==$q19r1)echo "checked";echo ">$q19r1 <input type='text' name='q19r1s' size='30' value='".$_POST['q19r1s']."'><br>";
echo "<input type='checkbox' name='q19r2' value='$q19r2' ";if($_POST['q19r2']==$q19r2)echo "checked";echo ">$q19r2 <input type='text' name='q19r2s' size='30' value='".$_POST['q19r2s']."'><br>";
echo "<input type='checkbox' name='q19r3' value='$q19r3' ";if($_POST['q19r3']==$q19r3)echo "checked";echo ">$q19r3 <input type='text' name='q19r3s' size='30' value='".$_POST['q19r3s']."'><br>";
echo "<input type='checkbox' name='q19r4' value='$q19r4' ";if($_POST['q19r4']==$q19r4)echo "checked";echo ">$q19r4 <input type='text' name='q19r4s' size='30' value='".$_POST['q19r4s']."'><br><br>";
echo "Comments : <input type='text' name='commentq19' size='50' value='".$_POST['commentq19']."'><br>";
echo "<div style='color:red'>$msgq19</div>";
echo "<hr>";

$sql20 = "SELECT * FROM q20";
$req20 = mysql_query($sql20) or die("req20 : ".mysql_error());
$q20 = mysql_result($req20,"0","q20");
$q20r1 = mysql_result($req20,"0","q20r1");
$q20r2 = mysql_result($req20,"0","q20r2");
echo "<h3>20) $q20</h3>";
echo "<input type='radio' name='q20r' value='$q20r1' ";if($_POST['q20r']==$q20r1)echo "checked";echo ">$q20r1<br>";
echo "<input type='radio' name='q20r' value='$q20r2' ";if($_POST['q20r']==$q20r2)echo "checked";echo ">$q20r2<br>";
echo "Comments : <input type='text' name='commentq20' size='50'  value='".$_POST['commentq20']."'><br>";
echo "<div style='color:red'>$msgq20</div>";
echo "<hr>";

$sql21 = "SELECT * FROM q21";
$req21 = mysql_query($sql21) or die("req21 : ".mysql_error());
$q21 = mysql_result($req21,"0","q21");
$q21r1 = mysql_result($req21,"0","q21r1");
$q21r2 = mysql_result($req21,"0","q21r2");
echo "<h3>21) $q21</h3>";
echo "<input type='radio' name='q21r' value='$q21r1' ";if($_POST['q21r']==$q21r1)echo "checked";echo ">$q21r1<br>";
echo "<input type='radio' name='q21r' value='$q21r2' ";if($_POST['q21r']==$q21r2)echo "checked";echo ">$q21r2<br>";
echo "Comments : <input type='text' name='commentq21' size='50' value='".$_POST['commentq21']."'><br>";
echo "<div style='color:red'>$msgq21</div>";
echo "<hr>";

$sql22 = "SELECT * FROM q22";
$req22 = mysql_query($sql22) or die("req22 : ".mysql_error());
$q22 = mysql_result($req22,"0","q22");
echo "<h3>22) $q22</h3>";
echo "<input type='file' name='q22F' value='Download'><br>";
echo "<div style='color:red'>$msgq22</div><div style='color:green'>$msgq22ok</div>";
echo "<hr>";

$sql23 = "SELECT * FROM q23";
$req23 = mysql_query($sql23) or die("req23 : ".mysql_error());
$q23 = mysql_result($req23,"0","q23");
$q23r1 = mysql_result($req23,"0","q23r1");
$q23r2 = mysql_result($req23,"0","q23r2");
$q23r3 = mysql_result($req23,"0","q23r3");
$q23r4 = mysql_result($req23,"0","q23r4");
$q23r5 = mysql_result($req23,"0","q23r5");
$q23r6 = mysql_result($req23,"0","q23r6");
echo "<h3>23) $q23</h3>";
echo "$q23r1 : <input type='text' name='q23r1' size='50' value='".$_POST['q23r1']."'><br>";
echo "$q23r2 : <input type='text' name='q23r2' size='50' value='".$_POST['q23r2']."'><br>";
echo "$q23r3 : <input type='text' name='q23r3' size='50' value='".$_POST['q23r3']."'><br>";
echo "$q23r4 : <input type='text' name='q23r4' size='50' value='".$_POST['q23r4']."'><br>";
echo "$q23r5 : <input type='text' name='q23r5' size='50' value='".$_POST['q23r5']."'><br>";
echo "$q23r6 : <input type='text' name='q23r6' size='50' value='".$_POST['q23r6']."'><br>";
echo "<div style='color:red'>$msgq23</div>";
echo "<hr>";

$sql24 = "SELECT * FROM q24";
$req24 = mysql_query($sql24) or die("req24 : ".mysql_error());
$q24 = mysql_result($req24,"0","q24");
$q24r1 = mysql_result($req24,"0","q24r1");
$q24r2 = mysql_result($req24,"0","q24r2");
$q24r3 = mysql_result($req24,"0","q24r3");
$q24r4 = mysql_result($req24,"0","q24r4");
echo "<h3>24) $q24</h3>";
echo "$q24r1 : <input type='text' name='q24r1' size='50' value='".$_POST['q24r1']."'><br>";
echo "$q24r2 : <input type='text' name='q24r2' size='50' value='".$_POST['q24r2']."'><br>";
echo "$q24r3 : <input type='text' name='q24r3' size='50' value='".$_POST['q24r3']."'><br>";
echo "$q24r4 : <input type='text' name='q24r4' size='50' value='".$_POST['q24r4']."'><br>";
echo "If no competences shared, please write « no competences shared » in  box 1.";
echo "<div style='color:red'>$msgq24</div>";
echo "<hr>";

$sql25 = "SELECT * FROM q25";
$req25 = mysql_query($sql25) or die("req25 : ".mysql_error());
$q25 = mysql_result($req25,"0","q25");
$q25r1 = mysql_result($req25,"0","q25r1");
$q25r2 = mysql_result($req25,"0","q25r2");
$q25r3 = mysql_result($req25,"0","q25r3");
$q25r4 = mysql_result($req25,"0","q25r4");
echo "<h3>25) $q25</h3>";
echo "$q25r1 : <input type='text' name='q25r1' size='50' value='".$_POST['q25r1']."'><br>";
echo "$q25r2 : <input type='text' name='q25r2' size='50' value='".$_POST['q25r2']."'><br>";
echo "$q25r3 : <input type='text' name='q25r3' size='50' value='".$_POST['q25r3']."'><br>";
echo "$q25r4 : <input type='text' name='q25r4' size='50' value='".$_POST['q25r4']."'><br>";
echo "If no competences shared, please write « no competences shared » in  box 1.";
echo "<div style='color:red'>$msgq25</div>";
echo "<hr>";

$sql26 = "SELECT * FROM q26";
$req26 = mysql_query($sql26) or die("req26 : ".mysql_error());
$q26 = mysql_result($req26,"0","q26");
$q26r1 = mysql_result($req26,"0","q26r1");
$q26r2 = mysql_result($req26,"0","q26r2");
$q26r3 = mysql_result($req26,"0","q26r3");
$q26r4 = mysql_result($req26,"0","q26r4");
echo "<h3>26) $q26</h3>";
echo "$q26r1 : <input type='text' name='q26r1' size='50' value='".$_POST['q26r1']."'><br>";
echo "$q26r2 : <input type='text' name='q26r2' size='50' value='".$_POST['q26r2']."'><br>";
echo "$q26r3 : <input type='text' name='q26r3' size='50' value='".$_POST['q26r3']."'><br>";
echo "$q26r4 : <input type='text' name='q26r4' size='50' value='".$_POST['q26r4']."'><br>";
echo "<div style='color:red'>$msgq26</div>";
echo "<hr>";

/* STArT 27 *************************************************************************/
$sql27 = "SELECT * FROM q27";$req27 = mysql_query($sql27) or die("req27 : ".mysql_error());
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

for($i=1;$i<="16";$i++){ // boucle sur les 16 questions en BDD
$sql271 = "SELECT * FROM q27q$i";$req271 = mysql_query($sql271) or die("req271 : ".mysql_error());
$q27q[$i] = mysql_result($req271,"0","q27q$i");
echo "<tr>\n";
echo "<td>$q27q[$i]<br><div style='color:red'>$msgq27[$i]</div></td>\n";
echo "<td align='center'><input type='radio' name='q27q".$i."r' value='$q27r1' ";if($_POST['q27q'.$i.'r']==$q27r1)echo "checked";echo "></td>\n";
echo "<td align='center'><input type='radio' name='q27q".$i."r' value='$q27r2' ";if($_POST['q27q'.$i.'r']==$q27r2)echo "checked";echo "></td>\n";
echo "<td align='center'><input type='radio' name='q27q".$i."r' value='$q27r3' ";if($_POST['q27q'.$i.'r']==$q27r3)echo "checked";echo "></td>\n";
echo "</tr>\n";
}
echo "</table>";
echo "<hr>";
/* END 27 ***************************************************************************/

$sql28 = "SELECT * FROM q28";
$req28 = mysql_query($sql28) or die("req28 : ".mysql_error());
$q28 = mysql_result($req28,"0","q28");
$q28r1 = mysql_result($req28,"0","q28r1");$q28r1 = ereg_replace("'","&#39;",$q28r1);
$q28r2 = mysql_result($req28,"0","q28r2");$q28r2 = ereg_replace("'","&#39;",$q28r2);
$q28r3 = mysql_result($req28,"0","q28r3");$q28r3 = ereg_replace("'","&#39;",$q28r3);
$_POST['q28r1'] = stripslashes(ereg_replace("'","&#39;",$_POST['q28r1']));
$_POST['q28r2'] = stripslashes(ereg_replace("'","&#39;",$_POST['q28r2']));
$_POST['q28r3'] = stripslashes(ereg_replace("'","&#39;",$_POST['q28r3']));
echo "<h3>28) $q28</h3>\n";
echo "<input type='checkbox' name='q28r1' value='$q28r1' ";if($_POST['q28r1']==$q28r1)echo "checked";echo ">$q28r1<br>\n";
echo "<input type='checkbox' name='q28r2' value='$q28r2' ";if($_POST['q28r2']==$q28r2)echo "checked";echo ">$q28r2<br>\n";
echo "<input type='checkbox' name='q28r3' value='$q28r3' ";if($_POST['q28r3']==$q28r3)echo "checked";echo ">$q28r3<br>\n";
echo "Comments : <input type='text' name='commentq28' size='50' value='".$_POST['commentq28']."'><br>\n";
echo "<div style='color:red'>$msgq28</div>";
echo "<hr>";

$sql29 = "SELECT * FROM q29";
$req29 = mysql_query($sql29) or die("req29 : ".mysql_error());
$q29 = mysql_result($req29,"0","q29");
$q29r1 = mysql_result($req29,"0","q29r1");
$q29r2 = mysql_result($req29,"0","q29r2");
$q29r3 = mysql_result($req29,"0","q29r3");$q29r3 = ereg_replace("'","&#39;",$q29r3);
$_POST['q29r'] = stripslashes(ereg_replace("'","&#39;",$_POST['q29r']));
echo "<h3>29) $q29</h3>";
echo "<input type='radio' name='q29r' value='$q29r1' ";if($_POST['q29r']==$q29r1)echo "checked";echo ">$q29r1<br>";
echo "<input type='radio' name='q29r' value='$q29r2' ";if($_POST['q29r']==$q29r2)echo "checked";echo ">$q29r2<br>";
echo "<input type='radio' name='q29r' value='$q29r3' ";if($_POST['q29r']==$q29r3)echo "checked";echo ">$q29r3<br>";
echo "Comments : <input type='text' name='commentq29' size='50' value='".$_POST['commentq29']."'><br>";
echo "<div style='color:red'>$msgq29</div>";
echo "<hr>";

$sql30 = "SELECT * FROM q30";
$req30 = mysql_query($sql30) or die("req30 : ".mysql_error());
$q30 = mysql_result($req30,"0","q30");
$q30r1 = mysql_result($req30,"0","q30r1");
$q30r2 = mysql_result($req30,"0","q30r2");
$q30r3 = mysql_result($req30,"0","q30r3");
echo "<h3>30) $q30</h3>";
echo "<input type='radio' name='q30r' value='$q30r1' ";if($_POST['q30r']==$q30r1)echo "checked";echo ">$q30r1<br>";
echo "<input type='radio' name='q30r' value='$q30r2' ";if($_POST['q30r']==$q30r2)echo "checked";echo ">$q30r2<br>";
echo "<input type='radio' name='q30r' value='$q30r3' ";if($_POST['q30r']==$q30r3)echo "checked";echo ">$q30r3<br>";
echo "Comments : <input type='text' name='commentq30' size='50' value='".$_POST['commentq30']."'><br>";
echo "<div style='color:red'>$msgq30</div>";
echo "<hr>";

$sql31 = "SELECT * FROM q31";
$req31 = mysql_query($sql31) or die("req31 : ".mysql_error());
$q31 = mysql_result($req31,"0","q31");
$q31r1 = mysql_result($req31,"0","q31r1");
$q31r2 = mysql_result($req31,"0","q31r2");
echo "<h3>31) $q31</h3>";
echo "<input type='radio' name='q31r' value='$q31r1' ";if($_POST['q31r']==$q31r1)echo "checked";echo ">$q31r1<br>";
echo "<input type='radio' name='q31r' value='$q31r2' ";if($_POST['q31r']==$q31r2)echo "checked";echo ">$q31r2<br>";
echo "Comments : <input type='text' name='commentq31' size='50' value='".$_POST['commentq31']."'><br>";
echo "<div style='color:red'>$msgq31</div>";
echo "<hr>";

$sql32 = "SELECT * FROM q32";
$req32 = mysql_query($sql32) or die("req32 : ".mysql_error());
$q32 = mysql_result($req32,"0","q32");
$q32r1 = mysql_result($req32,"0","q32r1");
$q32r2 = mysql_result($req32,"0","q32r2");
$q32r3 = mysql_result($req32,"0","q32r3");
$q32r4 = mysql_result($req32,"0","q32r4");
$q32r5 = mysql_result($req32,"0","q32r5");
echo "<h3>32) $q32</h3>";
echo "<input type='checkbox' name='q32r1' value='$q32r1' ";if($_POST['q32r1']==$q32r1)echo "checked";echo ">$q32r1<br>";
echo "<input type='checkbox' name='q32r2' value='$q32r2' ";if($_POST['q32r2']==$q32r2)echo "checked";echo ">$q32r2<br>";
echo "<input type='checkbox' name='q32r3' value='$q32r3' ";if($_POST['q32r3']==$q32r3)echo "checked";echo ">$q32r3<br>";
echo "<input type='checkbox' name='q32r4' value='$q32r4' ";if($_POST['q32r4']==$q32r4)echo "checked";echo ">$q32r4<br>";
echo "<input type='checkbox' name='q32r5' value='$q32r5' ";if($_POST['q32r5']==$q32r5)echo "checked";echo ">$q32r5 <input type='text' name='q32r5s' size='30' value='".$_POST['q32r5s']."'><br><br>";
echo "Comments : <input type='text' name='commentq32' size='50' value='".$_POST['commentq32']."'><br>";
echo "<div style='color:red'>$msgq32</div>";
echo "<hr>";

$sql33 = "SELECT * FROM q33";
$req33 = mysql_query($sql33) or die("req33 : ".mysql_error());
$q33 = mysql_result($req33,"0","q33");
$q33r1 = mysql_result($req33,"0","q33r1");$q33r1 = ereg_replace("'","&#39;",$q33r1);
$q33r2 = mysql_result($req33,"0","q33r2");$q33r2 = ereg_replace("'","&#39;",$q33r2);
$_POST['q33r1'] = stripslashes(ereg_replace("'","&#39;",$_POST['q33r1']));
$_POST['q33r2'] = stripslashes(ereg_replace("'","&#39;",$_POST['q33r2']));
echo "<h3>33) $q33</h3>";
echo "<input type='checkbox' name='q33r1' value='$q33r1' ";if($_POST['q33r1']==$q33r1)echo "checked";echo ">$q33r1 <input type='text' name='q33r1s' size='30' value='".$_POST['q33r1s']."'><br>";
echo "<input type='checkbox' name='q33r2' value='$q33r2' ";if($_POST['q33r2']==$q33r2)echo "checked";echo ">$q33r2 <input type='text' name='q33r2s' size='30' value='".$_POST['q33r2s']."'><br>";
echo "Comments : <input type='text' name='commentq33' size='50'  value='".$_POST['commentq33']."'><br>";
echo "<div style='color:red'>$msgq33</div>";
echo "<hr>";

$sql34 = "SELECT * FROM q34";
$req34 = mysql_query($sql34) or die("req34 : ".mysql_error());
$q34 = mysql_result($req34,"0","q34");
$q34r1 = mysql_result($req34,"0","q34r1");
$q34r2 = mysql_result($req34,"0","q34r2");
echo "<h3>34) $q34</h3>";
echo "<input type='radio' name='q34r' value='$q34r1' ";if($_POST['q34r']==$q34r1)echo "checked";echo ">$q34r1<br>";
echo "<input type='radio' name='q34r' value='$q34r2' ";if($_POST['q34r']==$q34r2)echo "checked";echo ">$q34r2<br>";
echo "Comments : <input type='text' name='commentq34' size='50' value='".$_POST['commentq34']."'><br>";
echo "<div style='color:red'>$msgq34</div>";
echo "<hr>";

/* STArT 35 *************************************************************************/
$sql35 = "SELECT * FROM q35";$req35 = mysql_query($sql35) or die("req35 : ".mysql_error());
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
$sql351 = "SELECT * FROM q35q$i";$req351 = mysql_query($sql351) or die("req351 : ".mysql_error());
$q35q[$i] = mysql_result($req351,"0","q35q$i");
echo "<tr>";
echo "<td>$q35q[$i]<br><div style='color:red'>$msgq35[$i]</div></td>";
echo "<td align='center'><input type='radio' name='q35q".$i."r' value='$q35r1' ";if($_POST['q35q'.$i.'r']==$q35r1)echo "checked";echo "></td>";
echo "<td align='center'><input type='radio' name='q35q".$i."r' value='$q35r2' ";if($_POST['q35q'.$i.'r']==$q35r2)echo "checked";echo "></td>";
echo "<td align='center'><input type='text' name='q35q".$i."c' value='".$_POST['q35q'.$i.'c']."'></td>";
echo "</tr>";
}
echo "</table><br>";
echo "Observations : <input type='text' name='q35C' size='50' value='".$_POST['q35C']."'><br>";
echo "<hr>";
/* END 35 ***************************************************************************/

$sql36 = "SELECT * FROM q36";
$req36 = mysql_query($sql36) or die("req36 : ".mysql_error());
$q36 = mysql_result($req36,"0","q36");
$q36r1 = mysql_result($req36,"0","q36r1");$q36r1 = ereg_replace("'","&#39;",$q36r1);
$q36r2 = mysql_result($req36,"0","q36r2");$q36r2 = ereg_replace("'","&#39;",$q36r2);
$q36r3 = mysql_result($req36,"0","q36r3");$q36r3 = ereg_replace("'","&#39;",$q36r3);
$q36r4 = mysql_result($req36,"0","q36r4");$q36r4 = ereg_replace("'","&#39;",$q36r4);
$q36r5 = mysql_result($req36,"0","q36r5");$q36r5 = ereg_replace("'","&#39;",$q36r5);
$_POST['q36r1'] = stripslashes(ereg_replace("'","&#39;",$_POST['q36r1']));
$_POST['q36r2'] = stripslashes(ereg_replace("'","&#39;",$_POST['q36r2']));
$_POST['q36r3'] = stripslashes(ereg_replace("'","&#39;",$_POST['q36r3']));
$_POST['q36r4'] = stripslashes(ereg_replace("'","&#39;",$_POST['q36r4']));
$_POST['q36r5'] = stripslashes(ereg_replace("'","&#39;",$_POST['q36r5']));
echo "<h3>36) $q36</h3>";
echo "<input type='checkbox' name='q36r1' value='$q36r1' ";if($_POST['q36r1']==$q36r1)echo "checked";echo ">$q36r1 <input type='text' name='q36r1s' size='30' value='".$_POST['q36r1s']."'><br>";
echo "<input type='checkbox' name='q36r2' value='$q36r2' ";if($_POST['q36r2']==$q36r2)echo "checked";echo ">$q36r2 <input type='text' name='q36r2s' size='30' value='".$_POST['q36r2s']."'><br>";
echo "<input type='checkbox' name='q36r3' value='$q36r3' ";if($_POST['q36r3']==$q36r3)echo "checked";echo ">$q36r3 <input type='text' name='q36r3s' size='30' value='".$_POST['q36r3s']."'><br>";
echo "<input type='checkbox' name='q36r4' value='$q36r4' ";if($_POST['q36r4']==$q36r4)echo "checked";echo ">$q36r4 <input type='text' name='q36r4s' size='30' value='".$_POST['q36r4s']."'><br>";
echo "<input type='checkbox' name='q36r5' value='$q36r5' ";if($_POST['q36r5']==$q36r5)echo "checked";echo ">$q36r5 <input type='text' name='q36r5s' size='30' value='".$_POST['q36r5s']."'><br>";
echo "<div style='color:red'>$msgq36</div>";
echo "<hr>";

/* STArT 37 *************************************************************************/
$sql37 = "SELECT * FROM q37";$req37 = mysql_query($sql37) or die("req37 : ".mysql_error());
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
$sql371 = "SELECT * FROM q37q$i";$req371 = mysql_query($sql371) or die("req371 : ".mysql_error());
$q37q[$i] = mysql_result($req371,"0","q37q$i");
echo "<tr>";
echo "<td>$q37q[$i]<br><div style='color:red'>$msgq37[$i]</td>";
echo "<td align='center'><input type='radio' name='q37q".$i."r' value='$q37r1' ";if($_POST['q37q'.$i.'r']==$q37r1)echo "checked";echo "></td>";
echo "<td align='center'><input type='radio' name='q37q".$i."r' value='$q37r2' ";if($_POST['q37q'.$i.'r']==$q37r2)echo "checked";echo "></td>";
echo "<td align='center'><input type='text' name='q37q".$i."c' value='".$_POST['q37q'.$i.'c']."'></td>";
echo "</tr>";
}
echo "</table><br>";
echo "Observations : <input type='text' name='q37C' size='50' value='".$_POST['q37C']."'><br>";
//echo "<div style='color:red'>$msgq37</div>";
echo "<hr>";
/* END 37 ***************************************************************************/

$sql38 = "SELECT * FROM q38";
$req38 = mysql_query($sql38) or die("req38 : ".mysql_error());
$q38 = mysql_result($req38,"0","q38");
$q38r1 = mysql_result($req38,"0","q38r1");
$q38r2 = mysql_result($req38,"0","q38r2");
echo "<h3>38) $q38</h3>";
echo "<input type='radio' name='q38r' value='$q38r1' ";if($_POST['q38r']==$q38r1)echo "checked";echo ">$q38r1<br>";
echo "<input type='radio' name='q38r' value='$q38r2' ";if($_POST['q38r']==$q38r2)echo "checked";echo ">$q38r2<br>";
echo "Comments : <input type='text' name='commentq38' size='50' value='".$_POST['commentq38']."'><br>";
echo "<div style='color:red'>$msgq38</div>";
echo "<hr>";

$sql39 = "SELECT * FROM q39";
$req39 = mysql_query($sql39) or die("req39 : ".mysql_error());
$q39 = mysql_result($req39,"0","q39");
$q39r1 = mysql_result($req39,"0","q39r1");
$q39r1S1 = mysql_result($req39,"0","q39r1S1");
$q39r1S2 = mysql_result($req39,"0","q39r1S2");
$q39r2 = mysql_result($req39,"0","q39r2");
echo "<h3>39) $q39</h3>";
echo "<input type='radio' name='q39r' value='$q39r1' ";if($_POST['q39r']==$q39r1)echo "checked";echo ">$q39r1<br>";
echo "<blockquote>";
echo "<input type='radio' name='q39r1r' value='$q39r1S1' ";if($_POST['q39r1r']==$q39r1S1)echo "checked";echo ">$q39r1S1<br>";
echo "<input type='radio' name='q39r1r' value='$q39r1S2' ";if($_POST['q39r1r']==$q39r1S2)echo "checked";echo ">$q39r1S2<br>";
echo "<div style='color:red'>$msgq39Q1</div>";
echo "</blockquote>";
echo "<input type='radio' name='q39r' value='$q39r2' ";if($_POST['q39r']==$q39r2)echo "checked";echo ">$q39r2<br>";
echo "Comments : <input type='text' name='commentq39' size='50' value='".$_POST['commentq39']."'><br>";
echo "<div style='color:red'>$msgq39</div>";
echo "<hr>";

$sql40 = "SELECT * FROM q40";
$req40 = mysql_query($sql40) or die("req40 : ".mysql_error());
$q40 = mysql_result($req40,"0","q40");
$q40r1 = mysql_result($req40,"0","q40r1");
$q40r2 = mysql_result($req40,"0","q40r2");
echo "<h3>40) $q40</h3>";
echo "<input type='radio' name='q40r' value='$q40r1' ";if($_POST['q40r']==$q40r1)echo "checked";echo ">$q40r1<br>";
echo "<input type='radio' name='q40r' value='$q40r2' ";if($_POST['q40r']==$q40r2)echo "checked";echo ">$q40r2<br>";
echo "Comments : <input type='text' name='commentq40' size='50' value='".$_POST['commentq40']."'><br>";
echo "<div style='color:red'>$msgq40</div>";
echo "<hr>";

$sql41 = "SELECT * FROM q41";
$req41 = mysql_query($sql41) or die("req41 : ".mysql_error());
$q41 = mysql_result($req41,"0","q41");
echo "<h3>41) $q41</h3>";
echo "<textarea name='q41r' cols='70' rows='15'>".$_POST['q41r']."</textarea><br>";
echo "<hr>";

echo "<input type='submit' value='Save the country index'>";
echo "</form>";

} // fin du break

} // fin du ok admin

?>
