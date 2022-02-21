<?php

if (isset($_POST["submit"])) {
    $intCount = $_POST["intCount"];
	$intCount++;
}
else
	$intCount = 1;
?>

<h2>The number of times this form has been submitted is: <?php echo($intCount) ?></h2>
<form action='<?php echo($_SERVER["PHP_SELF"]) ?>' method='post'>
<p><input type='hidden' name='intCount' value='<?php echo($intCount) ?>'>
<input type='submit' name='submit'></p>
</form>
