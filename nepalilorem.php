<?php
// for ($i=0; $i<54 ; $i++) { 
//         # code...
// 		$c= dechex((hexdec('0x904')+$i));
//         $a = '&#x'.$c.";<br>";
//         echo $c."=".$a;
//     }
// echo "&#x908;";
// echo "&#x904;";
// echo "&#xE0A494;";
// 0914
// 0000100100010100
// 11100000 10100100 10010100
// E0 A4 94
// $aa_word = 17;
// for ($i=0; $i <400 ; $i++) { 
// 	# code...

// $main_letter = rand(0,53);
// $letter_attr = rand(0,21);
// if($main_letter<17){
// $a = '&#x'.dechex((hexdec('0x904')+$main_letter)).";";
// }
// else {
// $a = '&#x'.dechex((hexdec('0x904')+$main_letter)).";&#x".dechex((hexdec('0x93A')+$letter_attr)).";";
// }
// echo " ".$a;
// }

function makeLetter()
{
	$aa_word = 17;
	$main_letter = rand(0,53);
	$letter_attr = rand(0,21);
	if($main_letter<17){
		$a = '&#x'.dechex((hexdec('0x904')+$main_letter)).";";
	}
	else {
		$a = '&#x'.dechex((hexdec('0x904')+$main_letter)).";&#x".dechex((hexdec('0x93A')+$letter_attr)).";";
	}
	return $a;
}

function makeWords(){
	$word_letter_count = rand(1,7);
	$letterss = '';
	for ($i=0; $i <$word_letter_count ; $i++) { 
		$letterss .= makeLetter();
	}

	return $letterss;	
}

for ($j=0; $j <5 ; $j++) { 
	$para_word_count = rand(3,10);
	$words = '';
	for ($i=0; $i <$para_word_count ; $i++) { 
		$words .= ' '.makeWords();
	}
	echo $words."&#x0964;";
}