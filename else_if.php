 <?php 
      
      echo "The statement below is display from elseif statement:";
        echo "<br/>";
     # If and else statement
    $name = "Oladuti Alao";
    if ($name == "Alao Michael") {
         // Display if the above condition is true
    echo "You are a Male and your name is " . $name . ".";
    } elseif ($name == "Oladuti Alao") {
    echo "You are a Female and your name is " . $name . ".";
    }   
    else {
    echo "Your name is not known to us yet.";
    }
    echo "<br/>";
    
     ?>