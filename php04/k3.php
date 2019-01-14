<?php
function aa($arr){
  $bb = 1;
  foreach ($arr as $a){
     $bb *= $a;

  }
  return $bb;

}
echo aa(array(1,3,5,7,9));
 ?>
