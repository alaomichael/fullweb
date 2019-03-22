<?php 
     /* PHP variable always start with $ and followed by other letter but numbers */
        $myElement = htmlentities("!@#$%^&*()_+-=;<>,./\[]{}");
        echo "My HTML Elements are &rarr; " . $myElement;
        echo ("<br>");
        $font = htmlentities("<font>");
        $h1 = htmlentities("<h1>");
        $div = htmlentities("<div>");
        $b = htmlentities("<b>");
        echo "I use $font,$h1,$div, and $b tags.";
     ?>