 <?php 
     /* Multi line comment */
     # Numerical array
     $array = array ("Michael", "Esther", "Peculiar");
        echo $array[2] . " is the son of " . $array[0] . "."; // Concatenate two arrays
        echo ("<br>");
     // Associative arrays
     $assoArray = array("Father" => "Babatunde", "Mother" => "Oladuti", "Son" => "Oluwafikunolaayomi");
     echo "The parents of " .$assoArray["Son"] . " are " . $assoArray["Father"] . " and " . $assoArray["Mother"] . ".";
    echo "<br/>";

     // Multiarray
     $multiArrays = array (
                            "names" => array (
                                            "Michael", "Esther", "Joel"
                                            ),
                             "ages" => array(
                                            33,33,2
                                        ),
                            "sex" => array(
                                "Male", "Female", "Male"
                            ),
                          );
    echo    $multiArrays["names"][0] . " is " . $multiArrays["ages"][0] . " years old and " ; 
    if ($multiArrays["sex"][0]=="Male") {
        echo "He is proudly a " . $multiArrays["sex"][0] . ".";
    } else {
        echo "She is elegantly a " . $multiArrays["sex"][0] . ".";
    } ;
    echo "<br/>";

    echo $multiArrays["names"][1] . " is " . $multiArrays["ages"][1] . " years old and a " ;
    if ($multiArrays["sex"][1] == "Male") {
    echo "He is proudly a " . $multiArrays["sex"][1] . ".";
} else {
    echo "She is elegantly a " . $multiArrays["sex"][1] . ".";
};
    echo "<br/>";

    echo $multiArrays["names"][2] . " is " . $multiArrays["ages"][2] . " years old and a " ;
    if ($multiArrays["sex"][2] == "Male") {
    echo "He is proudly a " . $multiArrays["sex"][2] . ".";
} else {
    echo "She is elegantly a " . $multiArrays["sex"][2] . ".";
};
    echo "<br/>";

?>