<?php

// нужно посчитать сколько слов 'balloon' можно собрать из рандомных символов представленных в строке $str

                                ################## FIRST SOLUTION ####################
// $str ='sldlznodbofeoboalvobllnolds';

// $resArr = [];
// $len = strlen($str);

// for($i=0; $i<$len; $i++){
// 	if(isset($resArr[$str[$i]])){
// 		$resArr[$str[$i]]++;
// 	}else{
// 		$resArr[$str[$i]] = 1;
// 	}
// }
// print_r($resArr);
// $ex = 'balloon';
// $count = 0;
// $len = strlen($ex);
// $res = $len;
// foreach($resArr as $value){

// 	for($i=0; $i<$len; $i++){
// 	$resArr[$ex[$i]]--;
// 	$count++;

// 	if($resArr[$ex[$i]] < 0){
// 		print_r($resArr);
// 		echo (int)($count/$len);
// 		return;
// 	}

// 	}
// }


                                   ################## SECOND SOLUTION ####################


$str ='sladnlznodboofeoabalvobllnolds';

$resArr = [];
$len = strlen($str);

for($i=0; $i<$len; $i++){
    if(isset($resArr[$str[$i]])){
        $resArr[$str[$i]]++;
    }else{
        $resArr[$str[$i]] = 1;
    }
}
print_r($resArr);
$ex = [
    'b'=>1,
    'a'=>1,
    'l'=>2,
    'o'=>2,
    'n'=>1
];
$count = 0;
$len = count($ex);
$minValue = '';
foreach($ex as $key=>$value){
    $count = $resArr[$key]/$value;
    if (empty($minValue)){
        $minValue = $count;
    }
    if($minValue>$count){
        $minValue = $count;
    }
}
echo $minValue;