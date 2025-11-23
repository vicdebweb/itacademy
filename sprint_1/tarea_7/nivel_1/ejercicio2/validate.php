<?php

$name = $_POST['name'];
$age = $_POST['age'];

$errors = [];

if ($name == "") {
    $errors[] = "Name cannot be empty.";
}

if ($age == "") {
    $errors[] = "Age cannot be empty.";
} elseif (!is_numeric($age)) {
    $errors[] = "Age must be a number.";
}

if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
} else {
    echo "Name: $name<br>";
    echo "Age: $age<br>";
    echo "Valid data.";
}

?>

<br><br>
<a href="index.php">Back</a>