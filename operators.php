 <?php 
     // Arithmethic operators
     # Addition
     $num1 = 7;
     $num2 = 8;
     $sum = $num1 + $num2;
        echo "The Sum of " . $num1 . " and " . $num2 ." is " . $sum ."."; // display the sum of numbers
        echo "<br/>";
        echo "<br/>";

    # Multiplication
    $num1 = 7;
    $num2 = 8;
    $multiply = $num1 * $num2;
    echo "The Multiplication of " . $num1 . " and " . $num2 . " is " . $multiply . "."; // display the multiplication of numbers
    echo "<br/>";
    echo "<br/>";

    # Modulus
    $num1 = 14;
    $num2 = 8;
    $modulus = $num1 % $num2;
    echo "The Modulus of " . $num1 . " and " . $num2 . " is " . $modulus . "."; // display the modulus of numbers
    echo "<br/>";
    echo "<br/>";

     # Decrement
    $num1 = 14;
    $num2 = 1;
    $num1--; // substract 1 from the initial number
    echo $num1+1 . " is decreased by " . $num2 . " and the result is " . $num1-- . "."; // display the decrement of numbers
    echo "<br/>";
    echo "<br/>";

    /*
    In comparism operator, != and <> means "Is not equal" 
    */

    // Assignment Operator
    $num1 = 7;
    $num2 = 8;
    // " += "
    echo ("The addition of " . $num1 . ' and ' . $num2 . " is " . $num1 += $num2  );
    echo ". <br/>";
    echo " <br/>";

    $num1 = 14;
    $num2 = 8;
        // operator used is " /= "
    echo "The division of " . $num1 . ' by ' . $num2 . " is " . $num1 /= $num2;
    echo ". <br/>";
    echo " <br/>";

    $name1 = "Sun";
    $name2 = "day";
            // operator used is " .= "
    echo "The joining of " . $name1 . ' with ' . $name2 . " is " . $name1 .= $name2;
    echo ". <br/>";
    echo " <br/>";
     ?>