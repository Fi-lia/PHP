
<?php

// $tab = [45,122,12,3,21,78,64,53,89,84];
// rsort($tab);


// foreach ($tab as $key => $val) {
//     echo "nombre = " . $val . "\n";
// }


$Tableau = [45,122,12,3,21,78,64,53,89,84];
 
echo "Avant:";
for($i = 0; $i < count($Tableau); $i++) {
 echo  $Tableau[$i].", ";
}
 
for($I = count($Tableau) - 2;$I >= 0; $I--) {
 for($i = 0; $i <= $I; $i++) {
  if($Tableau[$i + 1] < $Tableau[$i]) {
   $t = $Tableau[$i + 1];
   $Tableau[$i + 1] = $Tableau[$i];
   $Tableau[$i] = $t;
  }
 }
}
 
echo "Après:";
for($L = 0; $L < count($Tableau); $L++) {
  echo $Tableau[$L].", ";
}

