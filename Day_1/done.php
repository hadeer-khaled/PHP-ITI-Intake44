<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
 

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $department = $_POST["department"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $gender = $_POST["gender"];
    $mr_or_miss = $gender == "male" ? "Mr." : "Miss.";
    $skills = $_POST["skills"] ;


    echo "<h2>Thanks   $mr_or_miss   $firstname   $lastname</h2>";
    echo "<p>Please review your information </p>";
    echo "<p>First Name: $firstname</p>";
    echo "<p>Last Name: $lastname</p>";
    echo "<p>Username: $username</p>";
    echo "<p>Department: $department</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Skills:</p>";
    echo "<ul>";
    foreach ($skills as $skill) {
        echo "<li>$skill</li>";
    }
    echo "</ul>";

?>

</body>
</html>
