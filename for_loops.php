<?php
/* Three different type of for loop */
# First type, regular for loop
for ($i= 0; $i< 10; $i++){
    echo $i . " is the number of this loop. <br/>";
}
echo "<br/>";

# Second type, foreach loop without a key value
$days = array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
echo "Below are the list of days in a week:";
echo "<br/>";
foreach ($days as $day) {
   echo $day . ".<br/>";    
}
echo "<br/>";

# Third type, foreach loop with a key value
$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
echo "Below are the list of days in a week:";
echo "<br/>";
foreach ($days as $key => $day) {
    echo "Key : " . $key . " &rrarr; Day " . $key . " &rrarr; " . $day . ".<br/>";
}
echo "<br/>";

?>