<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));

$msg="";
$errors="0";

if($_POST['q1r1']=="" && $_POST['q1r2']=="" && $_POST['q1r3']==""){$msgq1 = "Q1:Faites au moins un choix.";$errors++;}
if($_POST['q2r1']==""){$msgq2="Q2:Saisissez au moins la Circonscription 1.";$errors++;}
if($_POST['q3r']==""){$msgq3="Q3:Faites votre choix.";$errors++;}
if($_POST['q4r']==""){$msgq4="Q4:Faites votre choix.";$errors++;}
if($_POST['q5r']==""){$msgq5="Q5:Saisissez votre réponse.";$errors++;}
if($_POST['q6r']==""){$msgq6="Q6:Faites votre choix.";$errors++;}
if($_POST['q7r']==""){$msgq7="Q7:Saisissez votre réponse.";$errors++;}
if($_POST['q8r']==""){$msgq8="Q8:Saisissez votre réponse.";$errors++;}
if($_POST['q9r1']=="" && $_POST['q9r2']==""){$msgq9 = "Q9:Faites au moins un choix.";$errors++;}
if($_POST['q10r1']=="" && $_POST['q10r2']=="" && $_POST['q10r3']==""){$msgq10 = "Q10:Faites au moins un choix.";$errors++;}
if($_POST['q10r3']!="" && $_POST['q10r3s']==""){$msgq10 = "Q10:Précisez oщ.";$errors++;}
if($_POST['q11r']==""){$msgq11="Q11:Faites votre choix.";$errors++;}

if($_POST['q12r1']=="" && $_POST['q12r2']=="" && $_POST['q12r3']=="" && $_POST['q12r4']=="" && $_POST['q12r5']==""){$msgq12 = "Q12:Faites au moins un choix.";$errors++;}
if($_POST['q12r3']!="" && $_POST['q12r3s']==""){$msgq12 .= "Q12:Précisez quels ministres. ";$errors++;}
if($_POST['q12r4']!="" && $_POST['q12r4s']==""){$msgq12 .= "Q12:Précisez quels élus. ";$errors++;}
if($_POST['q12r5']!="" && $_POST['q12r5s']==""){$msgq12 .= "Q12:Précisez qui. ";$errors++;}

if($_POST['q13r1']=="" && $_POST['q13r2']=="" && $_POST['q13r3']=="" ){$msgq13 = "Q13:Faites au moins un choix.";$errors++;}
if($_POST['q13r2']!="" && $_POST['q13r2s']==""){$msgq13 .= "Q13:Précisez la durée. ";$errors++;}

if($_POST['q14r']==""){$msgq14="Q14:Faites votre choix.";$errors++;}
if($_POST['q15r']==""){$msgq15="Q15:Faites votre choix.";$errors++;}
if($_POST['q16r']==""){$msgq16="Q16:Faites votre choix.";$errors++;}
if($_POST['q17r']==""){$msgq17="Q17:Faites votre choix.";$errors++;}

if($_POST['q18r1']=="" && $_POST['q18r2']=="" && $_POST['q18r3']=="" && $_POST['q18r4']==""){$msgq18 = "Q18:Faites au moins un choix.";$errors++;}
if($_POST['q19r1']=="" && $_POST['q19r2']=="" && $_POST['q19r3']=="" && $_POST['q19r4']==""){$msgq19 = "Q19:Faites au moins un choix.";$errors++;}

if($_POST['q20r']==""){$msgq20="Q20:Faites votre choix.";$errors++;}
if($_POST['q21r']==""){$msgq21="Q21:Faites votre choix.";$errors++;}

if($_POST['q23r1']==""){$msgq23="Q23:Saisissez au moins la Compétence 1.";$errors++;}
if($_POST['q24r1']==""){$msgq24="Q24:Saisissez au moins la Compétence 1.";$errors++;}
if($_POST['q25r1']==""){$msgq25="Q25:Saisissez au moins la Compétence 1.";$errors++;}

if($_POST['q26r1']==""){$msgq26="Q26:Saisissez au moins une appréciation.";$errors++;}

if($_POST['q27q1r']==""){$msgq27[1]="Q27Q1:Faites votre choix.";$errors++;}
if($_POST['q27q2r']==""){$msgq27[2]="Q27Q2:Faites votre choix.";$errors++;}
if($_POST['q27q3r']==""){$msgq27[3]="Q27Q3:Faites votre choix.";$errors++;}
if($_POST['q27q4r']==""){$msgq27[4]="Q27Q4:Faites votre choix.";$errors++;}
if($_POST['q27q5r']==""){$msgq27[5]="Q27Q5:Faites votre choix.";$errors++;}
if($_POST['q27q6r']==""){$msgq27[6]="Q27Q6:Faites votre choix.";$errors++;}
if($_POST['q27q7r']==""){$msgq27[7]="Q27Q7:Faites votre choix.";$errors++;}
if($_POST['q27q8r']==""){$msgq27[8]="Q27Q8:Faites votre choix.";$errors++;}
if($_POST['q27q9r']==""){$msgq27[9]="Q27Q9:Faites votre choix.";$errors++;}
if($_POST['q27q10r']==""){$msgq27[10]="Q27Q10:Faites votre choix.";$errors++;}
if($_POST['q27q11r']==""){$msgq27[11]="Q27Q11:Faites votre choix.";$errors++;}
if($_POST['q27q12r']==""){$msgq27[12]="Q27Q12:Faites votre choix.";$errors++;}
if($_POST['q27q13r']==""){$msgq27[13]="Q27Q13:Faites votre choix.";$errors++;}
if($_POST['q27q14r']==""){$msgq27[14]="Q27Q14:Faites votre choix.";$errors++;}
if($_POST['q27q15r']==""){$msgq27[15]="Q27Q15:Faites votre choix.";$errors++;}
if($_POST['q27q16r']==""){$msgq27[16]="Q27Q16:Faites votre choix.";$errors++;}

if($_POST['q28r1']=="" && $_POST['q28r2']=="" && $_POST['q28r3']=="" ){$msgq28 = "Q28:Faites au moins un choix.";$errors++;}
if($_POST['q29r']==""){$msgq29="Q29:Faites votre choix.";$errors++;}
if($_POST['q30r']==""){$msgq30="Q30:Faites votre choix.";$errors++;}
if($_POST['q31r']==""){$msgq31="Q31:Faites votre choix.";$errors++;}

if($_POST['q32r1']=="" && $_POST['q32r2']=="" && $_POST['q32r3']=="" && $_POST['q32r4']=="" && $_POST['q32r5']==""){$msgq32 = "Q32:Faites au moins un choix.";$errors++;}
if($_POST['q32r5']!="" && $_POST['q32r5s']==""){$msgq32 = "Q32:Précisez autres. ";$errors++;}

if($_POST['q33r1']=="" && $_POST['q33r2']=="" ){$msgq33 = "Q33:Faites au moins un choix.";$errors++;}
if($_POST['q34r']==""){$msgq34="Q34:Faites votre choix.";$errors++;}

if($_POST['q35q1r']==""){$msgq35[1]="Q35Q1:Faites votre choix.";$errors++;}
if($_POST['q35q2r']==""){$msgq35[2]="Q35Q2:Faites votre choix.";$errors++;}
if($_POST['q35q3r']==""){$msgq35[3]="Q35Q3:Faites votre choix.";$errors++;}
if($_POST['q35q4r']==""){$msgq35[4]="Q35Q4:Faites votre choix.";$errors++;}
if($_POST['q35q5r']==""){$msgq35[5]="Q35Q5:Faites votre choix.";$errors++;}

if($_POST['q36r1']=="" && $_POST['q36r2']=="" && $_POST['q36r3']=="" && $_POST['q36r4']=="" && $_POST['q36r5']==""){$msgq36 = "Q36:Faites au moins un choix.";$errors++;}

if($_POST['q37q1r']==""){$msgq37[1]="Q37Q1:Faites votre choix.";$errors++;}
if($_POST['q37q2r']==""){$msgq37[2]="Q37Q2:Faites votre choix.";$errors++;}
if($_POST['q37q3r']==""){$msgq37[3]="Q37Q3:Faites votre choix.";$errors++;}
if($_POST['q37q4r']==""){$msgq37[4]="Q37Q4:Faites votre choix.";$errors++;}
if($_POST['q37q5r']==""){$msgq37[5]="Q37Q5:Faites votre choix.";$errors++;}

if($_POST['q38r']==""){$msgq38="Q38:Faites votre choix.";$errors++;}

if($_POST['q39r']==""){$msgq39="Q39:Faites votre choix.";$errors++;}
if($_POST['q39r']=="oui" && $_POST['q39r1r']==""){$msgq39Q1="Q39Q1:Faites votre choix.";$errors++;}

if($_POST['q40r']==""){$msgq40="Q40:Faites votre choix.";$errors++;}

/** upload pdf *********************************************************************/

$msgq22 ="";
$repertoire = $_SERVER['DOCUMENT_ROOT'] . "/pays/docpays/";
$max_size   = 10000000;// Taille max en octets du fichier

$nom_pdf	= $_FILES['q22F']['name'];//echo "name :".$nom_pdf."<br>";
$poid_pdf	= $_FILES['q22F']['size'];//echo "poids :".$poid_pdf."<br>";
$type_pdf	= $_FILES['q22F']['type'];//echo "type:".$type_pdf."<br>";

$destination = $repertoire.$_FILES["q22F"][name];
$q22F=$_FILES["q22F"][name];

	// traitement nom fichier
	$nom_pdf = str_replace (" ", "_", $nom_pdf);
	$a = array("д", "в", "а");$nom_pdf = str_replace ($a, "a", $nom_pdf);
	$e = array("é", "и", "к", "л");$nom_pdf = str_replace ($e, "e", $nom_pdf);
	$i = array("п", "о");$nom_pdf = str_replace ($i, "i", $nom_pdf);
	$o = array("ц", "ф");$nom_pdf = str_replace ($o, "o", $nom_pdf);
	$u = array("щ", "ы", "ь");$nom_pdf = str_replace ($u, "u", $nom_pdf);

$q22FNew=date("dmY-His-").$nom_pdf;

if($nom_pdf){ // verification si un fichier est en upload

	if($type_pdf == "application/pdf"){

		if($poid_pdf <= $max_size){

			if (!move_uploaded_file($_FILES["q22F"][tmp_name], $destination)) {
				
				$msgq22 .= "Pas de fichier а transmettre.<br>";
				$errors++;

			}else{
				//$chmod = $destination;chmod($chmod, 0644);
				$msgq22ok .= "Le fichier <b>$nom_pdf</b> a bien été transmis au serveur.<br>";
				rename($repertoire.$_FILES["q22F"][name], $repertoire.$q22FNew);
				$okfile="ok";
			}
			
		} else {

			if ($poid_pdf > $max_size)	{$msgq22 .= "Poid incorrect : $poid_pdf > $max_size octets<br>";}
			$msgq22 .= "Echec dans la transmission du fichier.<br>";
			$errors++;
		} 

	} else {
		$msgq22 .= "Ce fichier n'est pas un pdf.";
		$errors++;
	}
}


?>