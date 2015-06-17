<?php


$file = fopen("../protocols/recibido.txt", "r") or exit("Unable to open file!");
//$file = fopen("/home/pi/Desktop/protorasp2222/recibido.txt", "r") or exit("Unable to open file!");

//Output a line of the file until the end is reached
$bin= fgets($file);
//$dec= bindec($bin);

//echo $bin;
//echo '1010110';
//sleep(1);
//echo '1001100';
//sleep(1);
//echo '1000011';
//sleep(1);


//$letra =array(1=>'V',2=> 'L',3=>'C');
//foreach($letra as $key=>$letra){
//	echo($letra);

//}


//echo bindec($bin).'º';
//echo $dec.'º';
echo $bin;

fclose($file);

?>


