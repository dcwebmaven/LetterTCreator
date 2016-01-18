<?php
#pre tags keep the asterisks more uniformly spaced
echo "<pre>";
for ($row = 0; $row < 15; $row++) { //sets the limits on the number of rows (less than 15)
 for ($column = 0; $column < 10; $column++) { //sets limits on the number of columns (less than 10)
 if (($row < 4) || ($column > 2 && $column <= 6)) { //sets conditions for putting asterisks that make the letter "T"
 echo "*";
 } 
 else echo " "; //creates spaces where there are no asterisks
 }
 echo "\n"; //the newline character starts the next row
}
echo "</pre>";  //off pre tag that helps keep the asterisks more uniformly spaced
?>