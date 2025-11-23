<?php

$number = $_POST['number'];
$divider = $_POST['divider'];

try {
    if ($divider == 0) {
        throw new Exception("Cannot divide by zero");
    }

    $result = $number / $divider;
    echo "Result: $result";
}
catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>

<br><br>
<a href="index.php">Back</a>