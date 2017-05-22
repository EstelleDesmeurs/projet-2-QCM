<?php


//print_r($_POST);


$bonneReponse = 0;

foreach ($_POST as $key => $value) {
    if ($value == 'Correct') {
        $bonneReponse++;  
    }
    
}

if ($bonneReponse <=5) {
    echo "C'est médiocre...dommage. Vous avez obtenu ".$bonneReponse." bonnes réponses.";
}
elseif ($bonneReponse > 5 && $bonneReponse < 7) {
    echo "Pas mal! Vous avez obtenu ".$bonneReponse." bonnes réponses.";
}
elseif ($bonneReponse >= 7) {
    echo "Bravo! Vous avez obtenu ".$bonneReponse." bonnes réponses.";
}

/*
$bonneReponse = 0;
//print_r($_POST);

Première solution :
if ($_POST['R1']=='T1.B') {
    $bonneReponse++ ;
}
if ($_POST['R2']=='T2.A') {
    ++$bonneReponse ;
}
if ($_POST['R3']=='T3.C') {
    ++$bonneReponse ;
}
//print_r($_POST);
echo $_POST;


Seconde solution idée:
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


Fonction pour validation:
function validate($y) {
    $y= filter_var($y, FILTER_VALIDATE_STRING);
    return $y;
}
                                         
$firstName = validate($_POST['firstName']);
$lastName = validate($_POST['lastName']);                            
$message = validate($_POST['message']);
*/
?>