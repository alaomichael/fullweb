<?php

// Include. Get info from another varaiable or page and add to the current page
// But if the page does not exist it throws an error, and CONTINUE running the remaining codes
# It is better to use include instead of require.

$prophesy = "You are blessed in Jesus' name.";
echo $prophesy;
echo "<br/>";
echo "<br/>";

include "continue_isArray_quotes.php";
echo "<br/>";
echo "<br/>";

echo "<b>What are you doing on Monday?</b>";
echo "<br/>";

echo "Is  $fresh your favourite fruits?";
echo "<br/>";

echo "$month is my month of birth, <i>thank you Jesus.</i>";
echo "<br/>";
echo "<br/>";
;


// Require. Get info from another varaiable or page and add to the current page.
// But if the page does not exist it throws an error, and STOP running the remaining codes
$prophesy = "<u>You shall be great in Jesus' name.</u>";
echo $prophesy;
echo "<br/>";

require "else_if.php";
echo "Where are you going on Friday $name ?";
echo "<br/>";
echo "<br/>";



?>