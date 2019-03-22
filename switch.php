     <?php 

    // switch statement
    $days = "Thursday";
    switch ($days) {
         case 'Sunday':  // it acts as an if statement
              echo "Today is Sunday.";
              break;

          case 'Monday': // it acts as an elseif statement
              echo "Today is Monday.";
              break;

          case 'Tuesday': // it acts as an elseif statement
              echo "Today is Tuesday.";
              break;
         
          case 'Wednesday': // it acts as an elseif statement
              echo "Today is Wednesday.";
              break;

          case 'Thursday': // it acts as an elseif statement
              echo "Today is Thursday.";
              break;

          case 'Friday': // it acts as an elseif statement
              echo "Today is Friday.";
              break;

         default: // it acts as an else statement
              echo "Today is Saturday.";
              break;
              }

     ?>