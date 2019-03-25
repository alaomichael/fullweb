<?php
$birthday = "25th of March";
$wishes = "God will empower you to fulfill all His purpose on earth in Jesus' name.";

// check if a variable is set
if (isset($birthday)) {
    echo "Today is " . $birthday . ". Our prayer for you is that, " . $wishes;
    echo "<br/>";
    echo "<br/>";
} else {
    echo "You birthday is not known to us yet, and we will be glad to know";
    echo "<br/>";
    echo "<br/>";
}

$fruit = "Pineapple";
unset($fruit);

// check if a variable is set or unset
if (isset($fruit)) {
    echo $fruit." is your favourite fruit.";
    echo "<br/>";
    echo "<br/>";
} else {
    echo "Variable is <u>not</u> set i.e unset or destroyed.";
    echo "<br/>";
    echo "<br/>";
}


const __NAME2__ = "Michael Babatunde Alao";

# check if a constant is defined
if (defined("__NAME2__")) {
    echo "Your name is " . __NAME2__;
    echo "<br/>";
    echo "<br/>";
} else {
    echo "Can you please tell us your name?";
    echo "<br/>";
    echo "<br/>";
}

function birthday (){
    if ($birthday == "25th March" ) {
        echo "Praise God, today is your birthday, we are happy to celebrate with you. Wishing you long life and prosperity in Jesus' Name.";
        echo "<br/>";
        echo "<br/>";
    } else {
        echo "We are waiting for you to inform us about your birthday.";
        echo "<br/>";
        echo "<br/>";
    }
}

// check if a function exist
if (function_exists("birthday")) {
    echo "A function for birthday wishes exists.";
} else {
    echo "A function for birthday greetings does not exist yet. You will do well to create one";
}

/* Using ! (i.e NOT operator) to check code  */
$birthday2 = "24th of February";
$wishes = "God will empower you to fulfill all His purpose on earth in Jesus' name.";

// check if a variable is NOT set.
if (!isset($birthday2)) {
    echo "Your birthday is not known to us yet, and we will be glad to know";
    echo "<br/>";
    echo "<br/>";
} else {
    echo "Today is " . $birthday2 . ". Our prayer for you is that, " . $wishes;
    echo "<br/>";
    echo "<br/>";
}

$fruit2 = "Pawpaw";
unset($fruit2);

// check if a variable is NOT set or unset
if (!isset($fruit2)) {
    echo "Variable is <u>not</u> set i.e unset or destroyed.";
    echo "<br/>";
    echo "<br/>";
} else {
    echo $fruit2 . " is your favourite fruit.";
    echo "<br/>";
    echo "<br/>";
}


const __NAME3__ = "Esther Oladuti Alao";

# check if a constant is NOT defined
if (!defined("__NAME3__")) {
    echo "Can you please tell us your name?";
    echo "<br/>";
    echo "<br/>";
} else {
    echo "Your name is " . __NAME3__;
    echo "<br/>";
    echo "<br/>";

}

function birthday2(){
    if ($birthday2 == "24th of February") {
        echo "Praise God, today is your birthday, we are happy to celebrate with you. Wishing you long life and prosperity in Jesus' Name.";
        echo "<br/>";
        echo "<br/>";
    } else {
        echo "We are waiting for you to inform us about your birthday.";
        echo "<br/>";
        echo "<br/>";
    }


// check if a function does NOT exist
if (!function_exists("birthday2")) {
    echo "Another function for birthday greetings does not exist yet. You will do well to create one";
        echo "<br/>";
        echo "<br/>";
} else {
    echo "Another function for birthday wishes also exists.";
        echo "<br/>";
        echo "<br/>";

}

}
?>