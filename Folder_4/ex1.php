<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercise_1</title>
</head>
<body>
<?php

echo "<h2>Pick a Day</h2>";

switch ($_POST['day']) {
    case "Monday":
      echo "Laugh on Monday, laugh for danger.";
      break;
    case "Tuesday":
      echo "Laugh on Tuesday, kiss a stranger.";
      break;
    case "Wednesday":
      echo "Laugh on Wednesday, laugh for a letter.";
      break;
    case "Thursday":
      echo "Laugh on Thursday, something better.";
      break;
    case "Friday":
      echo "Laugh on Friday, laugh for sorrow.";
      break;
    case "Saturday":
      echo "Laugh on Saturday, joy tomorrow.";
      break;
    default:
      echo "OMG PHP on Sunday";
  }

  echo "<form action ='ex1.html'>
<input type='submit' value='Back'/>
</form>";

?>
</body>
</html>