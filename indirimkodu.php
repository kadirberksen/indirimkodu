<?php
function kod(){

 $karakterler = "1234567890QAZXSWEDCVFRTGBNHYUJMLKIOP";
 $kod1 = '';
 for($i=1;$i<6;$i++)                    
 {
  $kod1 .= $karakterler{rand() % 36};    
 }
 return $kod1;                           
}

echo $kod1=kod();
for($i=0;$i<50;$i++){


	echo kod() . "<br>";
}
?>