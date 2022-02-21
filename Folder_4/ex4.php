<?php

$title_Err = $first_Name_Err = $surname_Err = $username_Err = $password_1_Err = $password_2_Err = "";
$title = $firstname = $surname = $username = $password_1 = $password_2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if ($_POST["title"] == "Select...") {
        $title_Err = "Not Selected";
    } else {
        $title = $_POST["title"];
    }
    if (empty($_POST["firstname"])) {
        $first_Name_Err = "Not Entered";
    } else {
        $firstname = $_POST["firstname"];
    }
    if (empty($_POST["surname"])) {
        $surname_Err= "Not Entered";
    } else {
        $surname = $_POST["surname"];
    }
    if (empty($_POST["username"])) {
        $username_Err= "Not Entered";
    } else {
        $username = $_POST["username"];
    }
    if (empty($_POST["password_1"])) {
        $password_1_Err= "Not Entered";
    } else {
        $password_1 = $_POST["password_1"];
    }
    if (empty($_POST["password_2"])) {
        $password_2_Err= "Not Entered";
    } else {
        $password_2 = $_POST["password_2"];
    }
}

?>

<h2>Please enter the following details: </h2>
<form action='<?php echo($_SERVER["PHP_SELF"]) ?>' method='post'>

<p>
        <select id="title" name="title">
            <option>Select...</option>
            <option <?php if($title == "Mr") echo "Selected" ?> >Mr</option>
            <option <?php if($title == "Ms") echo "Selected" ?> >Ms</option>
            <option <?php if($title == "Dr") echo "Selected" ?> >Dr</option>
        </select>
        <?php echo $title_Err ?>
    </p>

<p>
    <label for="firstname">Firstname: </label>
    <input type='text' name='firstname' size="20" value='<?php echo htmlspecialchars($firstname) ?>' id='firstname'>
     <?php echo $first_Name_Err ?>

</p>

    <p><label for="surname">Surname:</label>
        <input type="text" name="surname" size="20" value='<?php echo htmlspecialchars($surname) ?>' id="surname">
        <?php echo $surname_Err ?>
    </p>

    <p><label for="username">Username:</label>
        <input type="text" name="username" size="20" value='<?php echo htmlspecialchars($username) ?>' id="username">
        <?php  echo $username_Err ?>
    </p>

    <p><label for="password_1">Password:</label>
        <input type="password" name="password_1" size="20" id="password_1">
        <?php echo $password_1_Err ?>
    </p>

    <p><label for="password_2">Password:</label>
        <input type="password" name="password_2" size="20" id="password_2">
        <?php echo $password_2_Err ?>
    </p>

    <input type="submit" name="submit" id="submit" value="Send Query">
</form>


<?php
if ( !empty($title) && !empty($password_1) && !empty($password_2) && !empty($username) && !empty($surname) && !empty($firstname) && isset($_POST["submit"])) {
    
    if($username == $firstname ||  $username == $surname) {
        echo "<p>Username the same as the Firstname or Surname</p>";
    }
    else if($password_1 == $firstname ||  $password_1 == $surname || $password_1 == $username) {
        echo "<p>Password the same as the Firstname, Surname or Username</p>";
    }
    else if($password_2 == $firstname ||  $password_2 == $surname || $password_2 == $username) {
        echo "<p>Password the same as the Firstname, Surname or Username</p>";
    }else if($password_1 != $password_2) {
        echo "<p>Both password fields are not the same</p>";
    }
    else {
        echo "<p>Greetings $title $firstname $surname</p>";
        echo "<p>Your username is $username and your password is $password_1 and $password_2 </p>";
    }
}

?> 


