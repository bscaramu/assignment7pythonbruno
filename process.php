<?php
if (isset($_POST['integers'])) {
    $integers = $_POST['integers'];
    $threshold = 4; // You can change this value as needed

    $command = escapeshellcmd("python3 bitwise_operations.py '$integers' '$threshold'");
    $output = shell_exec($command);

    echo "<pre>$output</pre>";
} else {
    echo "No input provided.";
}
?>
