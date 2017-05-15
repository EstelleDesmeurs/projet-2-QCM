<?php

$bonneReponse = 0;
//print_r($_POST);


if ($_POST['R1']=='T1.B') {
    $bonneReponse++ ;
}
if ($_POST['R2']=='T2.A') {
    ++$bonneReponse ;
}
if ($_POST['R3']=='T3.C') {
    ++$bonneReponse ;
}
print_r($_POST);
echo $_POST;
echo "Vous avez obtenu ".$bonneReponse." bonnes réponses.";
*/
/*
$bonneReponse= array (
                R1 => 'T1.B',
                R2 => 'T2.A',
                R3 => 'T3.C'
)
$_POST= array(
            R1 => $_POST['R1'],
            R2 => $_POST['R2'],
            R3 => $_POST['R3']
)
    
$result = array_merge ($_POST, $bonneReponse);
print_r($result);



function validate($y) {
    $y= filter_var($y, FILTER_VALIDATE_STRING);
    return $y;
}
                                         
$firstName = validate($_POST['firstName']);
$lastName = validate($_POST['lastName']);                            
$message = validate($_POST['message']);
*/
?>