<?php

function today()
{
    // $d = date("d/m/y",2019);
    $day = "Thursday";
    echo  "Today is $day";
}


function salute($name)
{
    $greet = "How are you today " . $name . "?";
    return $greet;
}

echo salute("Esther");
echo "<br/>";
echo "<br/>";

echo today() . ".It is cool and lovely.";
echo "<br/>";

function substract($a, $b)
{
    $answer = $a - $b;
    return $answer;
}

echo "When you subtract 30 from 100, you have = " . substract(100, 30);
echo "<br/>";
echo "<br/>";

echo "What is your date of birth?";
echo "<br/>";
echo "<br/>";
echo voter(2005);
echo "<br/>";
echo "<br/>";

function voter($bod)
{
    $age = 2019 - $bod;
    $wait = 18 - $age;
    if ($age < 18) {
        echo "Sorry, you are not eligible to vote.<br/>";
        echo  "Wait until " . $wait . " years.<br/>";
        echo  "Wait until " . (18 - $age) . " years";
        echo "<br/>";
    } else {
        echo "Congratulations you are an Eligible voter.";
        echo "<br/>";
    }
}

?>