<?php
//PHP array

//Associative array
$nigerian_universities =[
	'Anambra' => [
		'universities' => [
			'unizik' =>[
				'known_for' =>'good studies',
				'allow_sibblings_attend' => true,
				'short_description' => 'it a place for good studies'

			]

		]

	],
	'Enugu' => [
		'universities' => [
			'Unn' => [
				'known_for' =>'perfect_score',
				'allow_sibblings_attend' => true,
				'short_description' => "it a good place to go" 
			]
		]


	]


];
var_dump($nigerian_universities);
//php array
$tertiary_institutions =['okay'];

//	$count =20;
//	for ($i=0; $i < $count ; $i++){
//	echo "1 " .$i."</br>";//$numbers[0];
//	}
foreach ($tertiary_institutions as $key => $value) {
 # code...
 echo $key;
};

