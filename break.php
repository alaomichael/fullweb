<?php 
 // While loop with break
 $num = 1;
 while ($num < 11) {
    if ($num == 8) {
        echo "The number is " .  $num . " <br/>";
        break;
    } 
    $num++; // This must always be added, else the code will loop forever!
 }
echo "<br/>";

$names = array ("Tunde", "Oladuti", "Ademola", "Michael", "Esther", "Peculiar");
foreach ($names as $mine) {
    if ($mine == "Esther" || $mine == "Oladuti") {
        echo "Your are " . $mine . " and the wife of " . $names[3] . " Alao.";
        break;
    }
}
echo "<br/>";

?>