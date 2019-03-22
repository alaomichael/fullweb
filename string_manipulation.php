<?php 
     /* In PHP always use str_replace() to replace string in a variable */
        $mySkill = "I have experience in Java, Python and HTML.";
        echo strtolower($mySkill); // Turn all string to lower case
        echo ("<br/>");
        $newString = str_replace("Java","PHP",$mySkill); # replaces Java with PHP.
        echo ("This is the new string, after the replacement: <b>"  . $newString . "</b>"); // we concatenate in php with dot (.)
        echo ("<br/>");
        echo ucwords($mySkill); // change the first letter of every word to upper case

        echo ("<br/>");
        $myCV = substr($mySkill,0,17); // get the letters from index 0 to 17 from $mySkill variable
        $currentSkill = "You can now see that " . $myCV . "!";
        echo strtoupper($currentSkill); // Turn all string to upper case
     ?>