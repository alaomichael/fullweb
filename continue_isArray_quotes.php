<?php
// Continue, is_array and quote
$month = "March";
$fruits = array ("Orange","Banana", "Size" => array("small", "medium", "Big"),"Pawpaw","Apple","Pineapple", ); // Size is an array
foreach ($fruits as  $fresh) {
    if (is_array($fresh) ) { // check if there is an array, if true, the code jumps it and continues
        continue;
    }
  echo $fresh . ".<br/>"; // display all the values in $fruits
}
echo "<br/>";

echo "We are in the month of $month ."; // With double qoute, display the value of the variable

echo "<br/>";
echo "<br/>";

echo 'We are in the month of $month.'; // With single qoute, display the text as they are without the variable value

?>