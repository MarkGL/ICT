<?php
 	bla = "GOrdon" //command <--- moet een $ hebben daarom geeft hij een fout aan.
 -----------------------------------------------
 $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
/*             /\  /\/\ /\ /\ /\ /\ /\ /\ /\
               0   1 2  3  4  5  6  7  8  9
dus */
echo $array[0]// Word echo "1"
----------------------------------------------------------
 //Andere manier\/

$auto = array("merk" => "VW","type" => "GOLF"); //Assoc Array

echo $auto['type'];// Word echo "Golf"

$etters = array("Mark", "Michael", "Dylan", "Menno", "Kevin")
/*               /\         /\       /\        /\       /\
                 0          1         2         3        4
*/
echo $etters[1]// Word echo "Michael"
------------------------------------------------------------------
$personen = array(array("Naam" => "Mark", "Leeftijd" => 16), array(), array());
// dus
echo $personen[0]['Leeftijd'];
-----------------------------------------------------------------------
<form method="post">
</form> 

 ?>
 
