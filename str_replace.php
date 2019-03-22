<?php 
     /* In PHP always use str_replace() to replace string in a variable */
        $mySkill = "I have experience in Java, Python and HTML.";
        echo $mySkill;
        echo ("<br/>");
        $newString = str_replace("Java","PHP",$mySkill); # replaces Java with PHP.
        echo ("This is the new string, after the replacement: <b>"  . $newString . "</b>"); // we concatenate in php with dot (.)
     ?>