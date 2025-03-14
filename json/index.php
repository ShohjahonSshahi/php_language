<?php
$array = array('Peter' => 35, 'Ben'=>26);
// echo json_encode($array);
$arra1  ='{"Peter":35, "BEN":26}';
$obyekt = json_decode($arra1, true);

echo $obyekt->Peter;
var_dump($obyekt)
?>