<?php 
     # Explode, breaks a variable into parts 
     $waec = "The West Africa Examination Council";
     $ssce = explode(" ",$waec,5);
     foreach ($ssce as $exam ) {
    echo $exam. "  &rarr; <br/> &larr; "; // display the broken variable.
     echo "<br/>";
}

 # Explode, breaks a variable into parts 
$biodata = "Michael|33|2|Male|Yes|Toyota Rav4"; // the collected data of a person.
$profile = explode("|",$biodata);
echo $profile[0] . "  is " . $profile[1] . " years old. <br/>";
echo $profile[0] . " has " . $profile[2] . " kids. <br/>";
if ($profile[3] == "Male") {
    echo "He is";
} else {
    echo "She is";
}
if ($profile[4] == "Yes") {
    echo " Married.";
} else {
    echo "Not Married";
}
  echo "<br/> And drives a " . $profile[5] . ".";
echo "<br/>";
echo "<br/>";

$biodata = "Esther|33|2|Female|Yes|Toyota Sienna"; // the collected data of a person.
$profile = explode("|", $biodata);
echo $profile[0] . "  is " . $profile[1] . " years old. <br/>";
echo $profile[0] . " has " . $profile[2] . " kids. <br/>";
if ($profile[3] == "Male") {
    echo "He is";
} else {
    echo "She is";
}
if ($profile[4] == "Yes") {
    echo " Married.";
} else {
    echo "Not Married";
}
echo "<br/> And drives a " . $profile[5] . ".";
echo "<br/>";
echo "<br/>";

$phoneNumbers = "08062161711,07033680599,08024251321,08038011354";
$phone = explode(",", $phoneNumbers);
foreach ($phone as $contact) {
    echo $contact . "<br/>"; // display the broken variable.
    echo "<br/>";
}

// Implode , joins words or arrays together.
    $names = array("Tunde","Oladuti","Ademola");
    $family = implode(", ", $names);
    echo "The names of the Alao family are " . $family . ".";
    echo "<br/>";
?>