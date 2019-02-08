<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));

$_POST['pays'] = strtoupper($_POST['pays']);

// Q1
$sql1 = "INSERT INTO `q1` VALUES('', '', '".$_POST['q1r1']."', '".$_POST['q1r2']."', '".$_POST['q1r3']."', '".$_POST['commentq1']."', '".$_POST['pays']."');";
$req1 = mysql_query($sql1) or die("req1 : ".mysql_error());

// Q2
$sql2 = "INSERT INTO `q2` VALUES('','','".$_POST['q2r1']."','".$_POST['q2r2']."','".$_POST['q2r3']."','".$_POST['q2r4']."','".$_POST['q2r5']."','".$_POST['q2r6']."','".$_POST['pays']."');";
$req2 = mysql_query($sql2) or die("req2 : ".mysql_error());

// Q3
$sql3 = "INSERT INTO `q3` VALUES('','','','','','".$_POST['q3r']."','".$_POST['commentq3']."','".$_POST['pays']."');";
$req3 = mysql_query($sql3) or die("req3 : ".mysql_error());

// Q4
$sql4 = "INSERT INTO `q4` VALUES('','','','','".$_POST['q4r']."','".$_POST['commentq4']."','".$_POST['pays']."');";
$req4 = mysql_query($sql4) or die("req4 : ".mysql_error());

// Q5
$sql5 = "INSERT INTO `q5` VALUES('','','".$_POST['q5r']."','".$_POST['pays']."');";
$req5 = mysql_query($sql5) or die("req5 : ".mysql_error());

// Q6
$sql6 = "INSERT INTO `q6` VALUES('','','','','".$_POST['q6r']."','".$_POST['commentq6']."','".$_POST['pays']."');";
$req6 = mysql_query($sql6) or die("req6 : ".mysql_error());

// Q7
$sql7 = "INSERT INTO `q7` VALUES('','','".$_POST['q7r']."','".$_POST['pays']."');";
$req7 = mysql_query($sql7) or die("req7 : ".mysql_error());

// Q8
$sql8 = "INSERT INTO `q8` VALUES('','','".$_POST['q8r']."','".$_POST['pays']."');";
$req8 = mysql_query($sql8) or die("req8 : ".mysql_error());

// Q9
$sql9 = "INSERT INTO `q9` VALUES('','','".$_POST['q9r1']."','".$_POST['q9r2']."','".$_POST['commentq9']."','".$_POST['pays']."');";
$req9 = mysql_query($sql9) or die("req9 : ".mysql_error());

// Q10
$sql10 = "INSERT INTO `q10` VALUES('','','".$_POST['q10r1']."','".$_POST['q10r2']."','".$_POST['q10r3']."','".$_POST['q10r3s']."','".$_POST['commentq10']."','".$_POST['pays']."');";
$req10 = mysql_query($sql10) or die("req10 : ".mysql_error());

// Q11
$sql11 = "INSERT INTO `q11` VALUES('','','','','".$_POST['q11r']."','".$_POST['commentq11']."','".$_POST['pays']."');";
$req11 = mysql_query($sql11) or die("req11 : ".mysql_error());

// Q12
$sql12 = "INSERT INTO `q12` VALUES('','','".$_POST['q12r1']."','".$_POST['q12r2']."','".$_POST['q12r3']."','".$_POST['q12r3s']."','".$_POST['q12r4']."','".$_POST['q12r4s']."','".$_POST['q12r5']."','".$_POST['q12r5s']."','".$_POST['commentq12']."','".$_POST['pays']."');";
$req12 = mysql_query($sql12) or die("req12 : ".mysql_error());

// Q13
$sql13 = "INSERT INTO `q13` VALUES('','','".$_POST['q13r1']."','".$_POST['q13r2']."','".$_POST['q13r2s']."','".$_POST['q13r3']."','".$_POST['commentq13']."','".$_POST['pays']."');";
$req13 = mysql_query($sql13) or die("req13 : ".mysql_error());

// Q14
$sql14 = "INSERT INTO `q14` VALUES('','','','','".$_POST['q14r']."','".$_POST['commentq14']."','".$_POST['pays']."');";
$req14 = mysql_query($sql14) or die("req14 : ".mysql_error());

// Q15
$sql15 = "INSERT INTO `q15` VALUES('','','','','".$_POST['q15r']."','".$_POST['commentq15']."','".$_POST['pays']."');";
$req15 = mysql_query($sql15) or die("req15 : ".mysql_error());

// Q16
$sql16 = "INSERT INTO `q16` VALUES('','','','','".$_POST['q16r']."','".$_POST['commentq16']."','".$_POST['pays']."');";
$req16 = mysql_query($sql16) or die("req16 : ".mysql_error());

// Q17
$sql17 = "INSERT INTO `q17` VALUES('','','','','".$_POST['q17r']."','".$_POST['commentq17']."','".$_POST['pays']."');";
$req17 = mysql_query($sql17) or die("req17 : ".mysql_error());

// Q18
$sql18 = "INSERT INTO `q18` VALUES('','','".$_POST['q18r1']."','".$_POST['q18r1s']."','".$_POST['q18r2']."','".$_POST['q18r2s']."','".$_POST['q18r3']."','".$_POST['q18r3s']."','".$_POST['q18r4']."','".$_POST['q18r4s']."','".$_POST['commentq18']."','".$_POST['pays']."');";
$req18 = mysql_query($sql18) or die("req18 : ".mysql_error());

// Q19
$sql19 = "INSERT INTO `q19` VALUES('','','".$_POST['q19r1']."','".$_POST['q19r1s']."','".$_POST['q19r2']."','".$_POST['q19r2s']."','".$_POST['q19r3']."','".$_POST['q19r3s']."','".$_POST['q19r4']."','".$_POST['q19r4s']."','".$_POST['commentq19']."','".$_POST['pays']."');";
$req19 = mysql_query($sql19) or die("req19 : ".mysql_error());

// Q20
$sql20 = "INSERT INTO `q20` VALUES('','','','','".$_POST['q20r']."','".$_POST['commentq20']."','".$_POST['pays']."');";
$req20 = mysql_query($sql20) or die("req20 : ".mysql_error());

// Q21
$sql21 = "INSERT INTO `q21` VALUES('','','','','".$_POST['q21r']."','".$_POST['commentq21']."','".$_POST['pays']."');";
$req21 = mysql_query($sql21) or die("req21 : ".mysql_error());

// Q22
if ($okfile=="ok"){
$sql22 = "INSERT INTO `q22` VALUES('','','".$q22FNew."','','".$_POST['pays']."');";
$req22 = mysql_query($sql22) or die("req22 : ".mysql_error());
}

// Q23
$sql23 = "INSERT INTO `q23` VALUES('','','".$_POST['q23r1']."','".$_POST['q23r2']."','".$_POST['q23r3']."','".$_POST['q23r4']."','".$_POST['q23r5']."','".$_POST['q23r6']."','".$_POST['pays']."');";
$req23 = mysql_query($sql23) or die("req23 : ".mysql_error());

// Q24
$sql24 = "INSERT INTO `q24` VALUES('','','".$_POST['q24r1']."','".$_POST['q24r2']."','".$_POST['q24r3']."','".$_POST['q24r4']."','".$_POST['pays']."');";
$req24 = mysql_query($sql24) or die("req24 : ".mysql_error());

// Q25
$sql25 = "INSERT INTO `q25` VALUES('','','".$_POST['q25r1']."','".$_POST['q25r2']."','".$_POST['q25r3']."','".$_POST['q25r4']."','".$_POST['pays']."');";
$req25 = mysql_query($sql25) or die("req25 : ".mysql_error());

// Q26
$sql26 = "INSERT INTO `q26` VALUES('','','".$_POST['q26r1']."','".$_POST['q26r2']."','".$_POST['q26r3']."','".$_POST['q26r4']."','".$_POST['pays']."');";
$req26 = mysql_query($sql26) or die("req26 : ".mysql_error());

// Q271
$sql271 = "INSERT INTO `q27q1` VALUES('','','".$_POST['q27q1r']."','".$_POST['pays']."');";
$req271 = mysql_query($sql271) or die("req271 : ".mysql_error());
// Q272
$sql272 = "INSERT INTO `q27q2` VALUES('','','".$_POST['q27q2r']."','".$_POST['pays']."');";
$req272 = mysql_query($sql272) or die("req272 : ".mysql_error());
// Q273
$sql273 = "INSERT INTO `q27q3` VALUES('','','".$_POST['q27q3r']."','".$_POST['pays']."');";
$req273 = mysql_query($sql273) or die("req273 : ".mysql_error());
// Q274
$sql274 = "INSERT INTO `q27q4` VALUES('','','".$_POST['q27q4r']."','".$_POST['pays']."');";
$req274 = mysql_query($sql274) or die("req274 : ".mysql_error());
// Q275
$sql275 = "INSERT INTO `q27q5` VALUES('','','".$_POST['q27q5r']."','".$_POST['pays']."');";
$req275 = mysql_query($sql275) or die("req275 : ".mysql_error());
// Q276
$sql276 = "INSERT INTO `q27q6` VALUES('','','".$_POST['q27q6r']."','".$_POST['pays']."');";
$req276 = mysql_query($sql276) or die("req276 : ".mysql_error());
// Q277
$sql277 = "INSERT INTO `q27q7` VALUES('','','".$_POST['q27q7r']."','".$_POST['pays']."');";
$req277 = mysql_query($sql277) or die("req277 : ".mysql_error());
// Q278
$sql278 = "INSERT INTO `q27q8` VALUES('','','".$_POST['q27q8r']."','".$_POST['pays']."');";
$req278 = mysql_query($sql278) or die("req278 : ".mysql_error());
// Q279
$sql279 = "INSERT INTO `q27q9` VALUES('','','".$_POST['q27q9r']."','".$_POST['pays']."');";
$req279 = mysql_query($sql279) or die("req279 : ".mysql_error());
// Q2710
$sql2710 = "INSERT INTO `q27q10` VALUES('','','".$_POST['q27q10r']."','".$_POST['pays']."');";
$req2710 = mysql_query($sql2710) or die("req2710 : ".mysql_error());
// Q2711
$sql2711 = "INSERT INTO `q27q11` VALUES('','','".$_POST['q27q11r']."','".$_POST['pays']."');";
$req2711 = mysql_query($sql2711) or die("req2711 : ".mysql_error());
// Q2712
$sql2712 = "INSERT INTO `q27q12` VALUES('','','".$_POST['q27q12r']."','".$_POST['pays']."');";
$req2712 = mysql_query($sql2712) or die("req2712 : ".mysql_error());
// Q2713
$sql2713 = "INSERT INTO `q27q13` VALUES('','','".$_POST['q27q13r']."','".$_POST['pays']."');";
$req2713 = mysql_query($sql2713) or die("req2713 : ".mysql_error());
// Q2714
$sql2714 = "INSERT INTO `q27q14` VALUES('','','".$_POST['q27q14r']."','".$_POST['pays']."');";
$req2714 = mysql_query($sql2714) or die("req2714 : ".mysql_error());
// Q2715
$sql2715 = "INSERT INTO `q27q15` VALUES('','','".$_POST['q27q15r']."','".$_POST['pays']."');";
$req2715 = mysql_query($sql2715) or die("req2715 : ".mysql_error());
// Q2716
$sql2716 = "INSERT INTO `q27q16` VALUES('','','".$_POST['q27q16r']."','".$_POST['pays']."');";
$req2716 = mysql_query($sql2716) or die("req2716 : ".mysql_error());

// Q28
$sql28 = "INSERT INTO `q28` VALUES('','','".$_POST['q28r1']."','".$_POST['q28r2']."','".$_POST['q28r3']."','".$_POST['commentq28']."','".$_POST['pays']."');";
$req28 = mysql_query($sql28) or die("req28 : ".mysql_error());

// Q29
$sql29 = "INSERT INTO `q29` VALUES('','','','','','".$_POST['q29r']."','".$_POST['commentq29']."','".$_POST['pays']."');";
$req29 = mysql_query($sql29) or die("req29 : ".mysql_error());

// Q30
$sql30 = "INSERT INTO `q30` VALUES('','','','','','".$_POST['q30r']."','".$_POST['commentq30']."','".$_POST['pays']."');";
$req30 = mysql_query($sql30) or die("req30 : ".mysql_error());

// Q31
$sql31 = "INSERT INTO `q31` VALUES('','','','','".$_POST['q31r']."','".$_POST['commentq31']."','".$_POST['pays']."');";
$req31 = mysql_query($sql31) or die("req31 : ".mysql_error());

// Q32
$sql32 = "INSERT INTO `q32` VALUES('','','".$_POST['q32r1']."','".$_POST['q32r2']."','".$_POST['q32r3']."','".$_POST['q32r4']."','".$_POST['q32r5']."','".$_POST['q32r5s']."','".$_POST['commentq32']."','".$_POST['pays']."');";
$req32 = mysql_query($sql32) or die("req32 : ".mysql_error());

// Q33
$sql33 = "INSERT INTO `q33` VALUES('','','".$_POST['q33r1']."','".$_POST['q33r1s']."','".$_POST['q33r2']."','".$_POST['q33r2s']."','".$_POST['commentq33']."','".$_POST['pays']."');";
$req33 = mysql_query($sql33) or die("req33 : ".mysql_error());

// Q34
$sql34 = "INSERT INTO `q34` VALUES('','','','','".$_POST['q34r']."','".$_POST['commentq34']."','".$_POST['pays']."');";
$req34 = mysql_query($sql34) or die("req34 : ".mysql_error());

//Q35
$sql35 = "INSERT INTO `q35` VALUES('','','','','','".$_POST['q35C']."','".$_POST['pays']."');";
$req35 = mysql_query($sql35) or die("req35 : ".mysql_error());
//Q351
$sql351 = "INSERT INTO `q35q1` VALUES('','','".$_POST['q35q1r']."','".$_POST['q35q1c']."','".$_POST['pays']."');";
$req351 = mysql_query($sql351) or die("req351 : ".mysql_error());
//Q352
$sql352 = "INSERT INTO `q35q2` VALUES('','','".$_POST['q35q2r']."','".$_POST['q35q2c']."','".$_POST['pays']."');";
$req352 = mysql_query($sql352) or die("req352 : ".mysql_error());
//Q353
$sql353 = "INSERT INTO `q35q3` VALUES('','','".$_POST['q35q3r']."','".$_POST['q35q3c']."','".$_POST['pays']."');";
$req353 = mysql_query($sql353) or die("req352 : ".mysql_error());
//Q354
$sql354 = "INSERT INTO `q35q4` VALUES('','','".$_POST['q35q4r']."','".$_POST['q35q4c']."','".$_POST['pays']."');";
$req354 = mysql_query($sql354) or die("req354 : ".mysql_error());
//Q355
$sql355 = "INSERT INTO `q35q5` VALUES('','','".$_POST['q35q5r']."','".$_POST['q35q5c']."','".$_POST['pays']."');";
$req355 = mysql_query($sql355) or die("req355 : ".mysql_error());

// Q36
$sql36 = "INSERT INTO `q36` VALUES('','','".$_POST['q36r1']."','".$_POST['q36r1s']."','".$_POST['q36r2']."','".$_POST['q36r2s']."','".$_POST['q36r3']."','".$_POST['q36r3s']."','".$_POST['q36r4']."','".$_POST['q36r4s']."','".$_POST['q36r5']."','".$_POST['q36r5s']."','','".$_POST['pays']."');";
$req36 = mysql_query($sql36) or die("req36 : ".mysql_error());

//Q37
$sql37 = "INSERT INTO `q37` VALUES('','','','','','".$_POST['q37C']."','".$_POST['pays']."');";
$req37 = mysql_query($sql37) or die("req37 : ".mysql_error());
//Q371
$sql371 = "INSERT INTO `q37q1` VALUES('','','".$_POST['q37q1r']."','".$_POST['q37q1c']."','".$_POST['pays']."');";
$req371 = mysql_query($sql371) or die("req371 : ".mysql_error());
//Q372
$sql372 = "INSERT INTO `q37q2` VALUES('','','".$_POST['q37q2r']."','".$_POST['q37q2c']."','".$_POST['pays']."');";
$req372 = mysql_query($sql372) or die("req372 : ".mysql_error());
//Q373
$sql373 = "INSERT INTO `q37q3` VALUES('','','".$_POST['q37q3r']."','".$_POST['q37q3c']."','".$_POST['pays']."');";
$req373 = mysql_query($sql373) or die("req372 : ".mysql_error());
//Q374
$sql374 = "INSERT INTO `q37q4` VALUES('','','".$_POST['q37q4r']."','".$_POST['q37q4c']."','".$_POST['pays']."');";
$req374 = mysql_query($sql374) or die("req374 : ".mysql_error());
//Q375
$sql375 = "INSERT INTO `q37q5` VALUES('','','".$_POST['q37q5r']."','".$_POST['q37q5c']."','".$_POST['pays']."');";
$req375 = mysql_query($sql375) or die("req375 : ".mysql_error());

// Q38
$sql38 = "INSERT INTO `q38` VALUES('','','','','".$_POST['q38r']."','".$_POST['commentq38']."','".$_POST['pays']."');";
$req38 = mysql_query($sql38) or die("req38 : ".mysql_error());

// Q39
$sql39 = "INSERT INTO `q39` VALUES('','','','','','".$_POST['q39r1r']."','','".$_POST['q39r']."','".$_POST['commentq39']."','".$_POST['pays']."');";
$req39 = mysql_query($sql39) or die("req39 : ".mysql_error());

// Q40
$sql40 = "INSERT INTO `q40` VALUES('','','','','".$_POST['q40r']."','".$_POST['commentq40']."','".$_POST['pays']."');";
$req40 = mysql_query($sql40) or die("req40 : ".mysql_error());

// Q41
$sql41 = "INSERT INTO `q41` VALUES('','','".$_POST['q41r']."','','".$_POST['pays']."');";
$req41 = mysql_query($sql41) or die("req41 : ".mysql_error());

?>