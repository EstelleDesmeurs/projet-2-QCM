<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function pre($arg) {
	echo "<pre><code>".print_r($arg, true)."</code></pre>";
}

$qcm = array(
			array(
				"question" =>'question 1',
				'reponses' => array(
					array('reponse 1',true),
					array('reponse 2',false),
					array('reponse 3',false)
				)
			),

			array(
				"question"=>'question 2',
				'reponses' => array(
					array('reponse 1',true),
					array('reponse 2',false),
					array('reponse 3',false)
				)
			),
			array(
				"question"=>'question 3',
				'reponses' => array(
					array('reponse 1',true),
					array('reponse 2',false),
					array('reponse 3',false)
				)
			),
);




echo '<form action="" method="post">';
foreach ($qcm as $question => $arrayRep) {
	pre($qcm);
	//echo $question.'<br>';
	
/*	
	foreach ($arrayRep as $key => $reponse) {
		echo '<input type="radio" name="'.$question.'" value="'.$reponse[1].'">'.$reponse[0].'<br>';

	}
}


echo '<br><input type="submit" name="submit">';	

if (isset($_POST['submit'])) {
    echo 'hum? ' . $_POST['question 1'] ;
    }




//echo array_key_exists(1, $_POST);


//condition qui récupère le $_POST
//if (isset($_POST['submit'])) { 
	if ($juste == 1) {
		echo "une bonne réponse";
	}
	if ($juste == 2) {
		echo "deux bonnes réponses";
	}
	if ($juste == 3) {
		echo "trois bonnes réponses";
	}
}





					
$juste = 0;

if (isset($_POST['submit'])) { 
	pre($_POST);


	foreach ($qcm as $question => $arrayRep) {
		foreach ($arrayRep as $reponse => $vraiFaux) {

			pre($_POST);
			pre($reponse);

			

			if ($_POST[$vraiFaux] == true) {
				$juste++;
			}
			else{
				echo "Répondre à toutes les questions";
			}	
			
		}
	}
	
}
*/




echo '</form>'
?>